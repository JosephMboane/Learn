<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel_Learn\Localizacao;

class LocalizacaoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localizacao = Localizacao::all();
//        $localizacao = Localizacao::all();;
//        $dados = response()->json($localizacao);
        return view('localizacao.index', compact('localizacao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function teste($id_localizacao)
    {
        $localizacao = Localizacao::findOrFail($id_localizacao);
        dd($localizacao->casos());

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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
