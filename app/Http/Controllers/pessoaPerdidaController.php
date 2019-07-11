<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Http\Requests\StorePessoaPerdida;
use Laravel_Learn\pessoa_perdida;
use Illuminate\Support\Facades\Storage;
use Laravel_Learn\Caso;
use Laravel_Learn\Foto;
use Illuminate\Support\Facades\DB;
use Laravel_Learn\User;

class pessoaPerdidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->join('centro_acolhimento', 'centro_acolhimento.id_centro', '=', 'localizacao.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.*', 'centro_acolhimento.designacao')
            ->where('pessoa_perdida.estado', '=',1)
            ->where('pessoa_perdida.situacao_vital','=','1')
            ->orderBy('id_p_perdida','desc')
            ->paginate(9);

//            dd($pessoa_perdida);
        return view('pessoa_perdida.index', compact('pessoa_perdida'));
    }

    /* VUE.JS Method */
    public function index_vue()
    {
        $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->join('centro_acolhimento', 'centro_acolhimento.id_centro', '=', 'localizacao.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.*', 'centro_acolhimento.designacao')
            ->where('pessoa_perdida.estado', '=',1)
            ->orderBy('id_p_perdida','desc')
            ->paginate(9);
//        $pessoa_perdida = DB::table('pessoa_perdida')->where('pessoa_perdida.estado', '=',1)
//            ->orderBy('id_p_perdida','desc')
//            ->paginate(6);
//        $pessoa_perdida = Pessoa_perdida::all();
        return $pessoa_perdida;
    }
    public function index_vueAchados()
    {
        $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->join('centro_acolhimento', 'centro_acolhimento.id_centro', '=', 'localizacao.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.*', 'centro_acolhimento.designacao')
            ->where('pessoa_perdida.estado', '=',0)
            ->orderBy('id_p_perdida','asc')
            ->paginate(8);
//        $pessoa_perdida = DB::table('pessoa_perdida')->where('pessoa_perdida.estado', '=',1)
//            ->orderBy('id_p_perdida','desc')
//            ->paginate(6);
//        $pessoa_perdida = Pessoa_perdida::all();
        return $pessoa_perdida;
    }
    public function index_achado()
    {
        $pessoa_perdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->join('centro_acolhimento', 'centro_acolhimento.id_centro', '=', 'localizacao.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.*', 'centro_acolhimento.designacao')
            ->where('pessoa_perdida.estado', '=',0)
            ->orderBy('id_p_perdida','asc')
            ->paginate(6);
//        $pessoa_perdida = DB::table('pessoa_perdida')->where('pessoa_perdida.estado', '=',1)
//            ->orderBy('id_p_perdida','desc')
//            ->paginate(6);
//        $pessoa_perdida = Pessoa_perdida::all();
        return view('pessoa_perdida.achada', compact('pessoa_perdida'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoa_perdida = DB::table('pessoa_perdida')->get();
        return view('pessoa_perdida.create', compact('pessoa_perdida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p_perdida = new Pessoa_perdida();

        $p_perdida->nome = $request->input('nome');
        $p_perdida->sexo = $request->input('sexo');
        $p_perdida->data_nasc = $request->input('d_nasc');
        $p_perdida->nacionalidade = $request->input('nacionalidade');
        $p_perdida->naturalidade = $request->input('naturalidade');
//        $file = $request->file('foto');
//        $name = time().$file->getClientOriginalName();
//        $file->move(public_path().'/imgs_p_perdidas/',$name);
//        $foto->nome_foto=$name;
//        $foto->save();
//        $p_perdida->id_foto = $foto->id_foto;
        $p_perdida->id_foto = $this->guardar_foto($request);
        $p_perdida->estado = 1;
//        $p_perdida->id_foto = 1;
        $p_perdida->save();
        $id=$p_perdida->id_p_perdida;

        if(!($id==null)){ 
            $caso = new Caso();
            $caso->guardar_caso($id);

            return redirect()->route('pessoa_perdida.index')->with('sucess', ' created successfully!');
        }else
        return redirect()->route('pessoa_perdida.index')->with('message', 'Ocorreu um erro ao gravar');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_p_perdida)
    {

    }

    public function update1($id_p_perdida)
    {
//        dd($id_p_perdida);
        $pessoaPerdida1 = Pessoa_perdida::find($id_p_perdida);
//        $pessoaPerdida = DB::table('pessoa_perdida')->find($id_p_perdida);
//        $pessoaPerdida->update1($request->all());

//        $pessoaPerdida = DB::table('pessoa_perdida')->find(97);

        $pessoaPerdida = DB::table('pessoa_perdida')
            ->join('foto', 'foto.id_foto', '=', 'pessoa_perdida.id_foto')
            ->join('caso', 'caso.id_pessoa_perdida', '=', 'pessoa_perdida.id_p_perdida')
            ->join('localizacao', 'localizacao.id_localizacao', '=', 'caso.id_localizacao')
            ->join('centro_acolhimento', 'centro_acolhimento.id_centro', '=', 'localizacao.id_localizacao')
            ->select('pessoa_perdida.*', 'foto.nome_foto', 'localizacao.*', 'centro_acolhimento.designacao')
            ->where('pessoa_perdida.id_p_perdida', '=', $pessoaPerdida1->id_p_perdida)
//            ->where('pessoa_perdida.id_p_perdida', '=', 95)
//            ->find($id_p_perdida)
            ->get();
//        dd($pessoaPerdida);
//        dd($pessoaPerdida1);
        return $pessoaPerdida;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa_perdida $pessoa_perdida)
    {
        return view('admin.pessoa_perdida.edit', compact('pessoa_perdida'));
    }
    public function edit2(Pessoa_perdida $pessoa_perdida)
    {
        return view('admin.pessoa_perdida.edit2', compact('pessoa_perdida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Pessoa_perdida  $pessoa_perdida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa_perdida $pessoa_perdida)
    {
        $pessoa_perdida->nome = $request->input('nome');
        $pessoa_perdida->sexo = $request->input('sexo');
        $pessoa_perdida->data_nasc = $request->input('d_nasc');
        $pessoa_perdida->nacionalidade = $request->input('nacionalidade');
        $pessoa_perdida->naturalidade = $request->input('naturalidade');
        $pessoa_perdida->id_foto = $this->guardar_foto($request);
        $pessoa_perdida->save();
        return redirect('/editar')->with('sucess', 'created successfully!');
    }

    public function act(Request $request, $id)
    {
        return 'sdfsdf';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa_perdida $pessoa_perdida)
    {
        return view('admin.pessoa_perdida.edit2', compact('pessoa_perdida'));
    }
    public function pesquisar(Request $request)
    {
        $pesquisar = $request->input('pesquisar');

        if($pesquisar){
            $pessoa_perdida = Pessoa_perdida::where('nome','LIKE','%'. $pesquisar . '%')
                ->orWhere('nacionalidade', 'LIKE', '%' . $pesquisar .'%')
                ->orWhere('sexo', 'LIKE', '%' . $pesquisar .'%')
                ->get();
            return view('pessoa_perdida.pesquisa', compact('pessoa_perdida', 'pesquisar'));
        }
        return view('pessoa_perdida.index')->withmessage('nao e possivel encontrar o dado');
    }
    public function pesquisar2(Request $request)
    {
        $pesquisar = $request->input('pesquisar');


        if($pesquisar){
            $pessoa_perdida = Pessoa_perdida::where('nome','LIKE','%'. $pesquisar . '%')
                ->orWhere('nacionalidade', 'LIKE', '%' . $pesquisar .'%')
                ->orWhere('sexo', 'LIKE', '%' . $pesquisar .'%')
                ->get();

        }
        dd($pesquisar);
        return $pesquisar;
    }

    public function guardar_foto( $request){
        $foto = new Foto();

        $file = $request->file('foto');
        $name = time() . $file->getClientOriginalName();
        $file->move(public_path().'/imgs_p_perdidas/',$name);

        $foto->nome_foto=$name;
        $foto->save();

        return $foto->id_foto;
    }


}
