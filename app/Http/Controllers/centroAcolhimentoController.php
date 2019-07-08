<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
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
        $centro = centro_acolhimento::findOrFail($id_centro);
        dd($centro->casos());

//        $localizacao = DB::table('localizacao')
//            ->join('caso', 'caso.id_localizacao', '=', 'localizacao.id_localizacao')
//            ->join('pessoa_perdida', 'pessoa_perdida.id_p_perdida', '=', 'caso.id_pessoa_perdida')
//            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
//
//            //            ->join('users', 'users.id_usuario', '=', 'pessoa_perdida.user_id')
//            ->join('centro_acolhimento', 'centro_acolhimento.id_centro', '=', 'localizacao.id_localizacao')
//            ->select('localizacao.*', 'foto.nome_foto', 'pessoa_perdida.*', 'centro_acolhimento.designacao')
//            ->where('pessoa_perdida.estado', '=',1)
//            ->where('pessoa_perdida.situacao_vital','=','1')
//            ->orderBy('id_p_perdida','desc')
//            ->paginate();
//        dd($localizacao);


    }
    public function teste2(){
//        $centro = centro_acolhimento::with('localizacao')->get();
//        $centro = centro_acolhimento::all();
//        dd($centro);

        $localizacao = DB::table('centro_acolhimento')
            ->join('caso', 'caso.id_centro', '=', 'centro_acolhimento.id_centro')
            ->join('pessoa_perdida', 'pessoa_perdida.id_p_perdida', '=', 'caso.id_pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->get();

//            //            ->join('users', 'users.id_usuario', '=', 'pessoa_perdida.user_id')
//            ->join('centro_acolhimento', 'centro_acolhimento.id_localizacao', '=', 'localizacao.id_localizacao')
//            ->select('centro_acolhimento.*', 'foto.nome_foto', 'pessoa_perdida.*')
//            ->where('pessoa_perdida.estado', '=',1)
//            ->where('pessoa_perdida.situacao_vital','=','1')
//            ->orderBy('id_p_perdida','desc')
//            ->paginate();
        dd($localizacao);
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
