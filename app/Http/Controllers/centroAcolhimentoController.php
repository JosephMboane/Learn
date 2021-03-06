<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Caso;
use Laravel_Learn\pessoa_perdida;
use Laravel_Learn\centro_acolhimento;
use Illuminate\Support\Facades\DB;

class centroAcolhimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $centro_acolhimento = DB::table('centro_acolhimento')
            ->join('caso', 'caso.id_caso', '=', 'centro_acolhimento.id_caso')
            ->join('foto', 'foto.id_foto', '=', 'centro_acolhimento.id_foto')
            ->join('pessoa_perdida', 'pessoa_perdida.id_p_perdida', '=', 'caso.id_p_perdida')
            ->select('centro_acolhimento.*', 'pessoa_perdida.count(id_p_perdida)');*/
            $centro_acolhimento = centro_acolhimento::all();
        return view('admin.centros.index', compact('centro_acolhimento'))->with('sucess','Registado com sucesso');
        //return redirect('/centro')->with('sucess','Registado com sucesso');
        
    }
    public function teste($id_centro)
    {

        $centro = centro_acolhimento::where('id_centro', $id_centro)->with('casos')->first();
        $casos = $centro->casos;
        return view('admin.centros.pessoa_perdida', compact('centro', 'casos'))->with('centro',$centro);
    }



//    Metodo retorna a lista de dados transferidos
    public function listaTransferidos(){
        $casos = Caso::where('observacao','<>','')->get();
//        $centro = centro_acolhimento::

        return view('admin.centros.lista_transferidos', compact('casos'));

    }



    public function transferencia($id_caso){
        $caso = Caso::where('id_caso',$id_caso)->first();
//        dd($caso);
        $centros = centro_acolhimento::where('id_centro', '<>', $caso->id_centro)->get();
        return view('admin.centros.transferencia', compact('centros','caso'));

    }

//    retorna nome do centro actual
    public function retornarNome($id_centro)
    {

//        $centro = centro_acolhimento::where('id_centro', $id_centro)->with('casos')->first();
        $centro = centro_acolhimento::where('id_centro', $id_centro)->with('casos')->first();
//        $casos = $centro->casos;
//        dd($centro->designacao);
        return $centro->designacao;
//        return view('admin.centros.pessoa_perdida', compact('centro', 'casos'))->with('centro',$centro);
    }
//    Este metodo faz a transferencia
    public function transfererir(Request $request){


        $id_centro = $request->id_centro;
        $id_caso = $request->id_caso;
        $caso = Caso::where('id_caso',$id_caso)->first();
        $caso->proviencia = $this->retornarNome($caso->id_centro);
        $caso->id_centro = $id_centro;
        $caso->observacao = $request->input('observacao');

//        $caso->proviencia = 'Maputo';
//        dd($caso);
//        dd($caso->centro_acolhimento->id_centro);
        $caso->save();
//        dd($caso);

        return redirect('/centro/lista-transferidos')->with('sucess', 'created successfully!');


    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.centros.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centro = new centro_acolhimento();
        $file = $request->file('foto');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/imgs_p_perdidas/',$name);

        $centro->designacao = $request->input('designacao');
        $centro->tipo = $request->input('tipo');
        $centro->capacidade = $request->input('capacidade');
        $centro->email = $request->input('email');
        $centro->celular = $request->input('celular');
        $centro->provincia = $request->input('provincia');
        $centro->avenida = $request->input('avenida');
        $centro->numero = $request->input('nr');
        $centro->foto_centro = $name;
        $centro->obs = $request->input('obs');
        $centro->id_localizacao = 1;
        $centro->save();
        return view('admin.centros.create_centro')->with('message', ' created successfully!');
        //redirect('/create_centro')->with('sucess', ' created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
