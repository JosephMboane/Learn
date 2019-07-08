@extends('layouts.app')
@section('title','Procura-se (Administrativo)')
@yield('content')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="wrapper" style="background-color: #F8F8FF">
    <div class="sidebar" data-color="azure" data-image="/images/sidebar-5.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    PROCURA-SE
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/front-admin">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-menu"></i>
                        <p>Pessoas perdidas</p>
                    </a>
                </li>
                <li>
                    <a href="/centro">
                        <i class="pe-7s-map-marker"></i>
                        <p>Centros</p>
                    </a>
                </li>
                <li>
                    <a href="/chart-teste">
                        <i class="pe-7s-users"></i>
                        <p>Estatistica</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-users"></i>
                        <p>Ususarios</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-science"></i>
                        <p>Casos de sucesso</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        @include('inc.navbar2')

        <nav aria-label="breadcrumb" style="left: 15px;position: relative;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li>
                <li class="breadcrumb-item current" aria-current="page">Pessoas perdidas</li>
            </ol>
        </nav>


        <div class="col-md-4" style="left: -240px">
            <a href="/create">
                <button type="submit" class="btn btn-info btn-fill pull-right">Adicionar</button>
            </a>
        </div>

        <div class="content col-md-12" style="top: -190px;position: relative;">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Pessoas Perdidas</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Nome</th>
                                        <th>Sexo</th>
                                        <th>Idade</th>
                                        <th>Data de Registo</th>
                                        <th>Localizacao actual</th>
                                        <th>Operação</th>
                                        <th>Mais</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pessoa_perdida as $p_perdida)
                                        <tr>
                                            <td>{{$p_perdida->id_p_perdida}}</td>
                                            <td class="py-1"><img src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}" alt="image" /></td>
                                            <td>{{$p_perdida->nome}}</td>
                                            <td>{{$p_perdida->sexo}}</td>
                                            <td>{{\Laravel_Learn\Pessoa_perdida::calcularIdade($p_perdida->data_nasc)}}</td>
                                            <td>{{\Laravel_Learn\Pessoa_perdida::calcularDias($p_perdida->created_at)}}</td>
                                            <td>{{$p_perdida->nome_localizacao}}</td>
                                            <td><a class="btn btn-success" href="/caso/{{$p_perdida->id_p_perdida}}/edit">Encontrada</a></td>
                                            <td><a class="btn btn-default" href="/caso/{{$p_perdida->id_p_perdida}}/update">Falecido</a></td>
{{--                                            <td><a class="btn btn-info btn-fill" href=""  data-toggle="modal"  data-target="#exampleModalCenter" >Transferencia</a></td>--}}
                                            <td><a class="btn btn-sucess" href="/pessoa_perdida/{{$p_perdida->id_p_perdida}}/edit">Editar</a></td>

                                            {{--                                           modal--}}
{{--                                            <div class="modal" id="exampleModalCenter{{$p_perdida->id_p_perdida}}" tabindex="-1" role="dialog"--}}
{{--                                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--                                                <div class="modal-dialog modal-dialog-centered" role="document"  >--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 class="modal-title" id="exampleModalLongTitle">Informação detalhada da pessoa--}}
{{--                                                                perdida</h5>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            <div>--}}
{{--                                                                <img class="card-img-top" src="/imgs_p_perdidas/{{$p_perdida->nome_foto}}"--}}
{{--                                                                     style=" width: 200px; height: 200px;">--}}
{{--                                                            </div>--}}
{{--                                                            <div class=""><CODE><h1>{{$p_perdida->nome}}</h1></CODE>--}}
{{--                                                            </div>--}}
{{--                                                            <div class=""><h4>--}}
{{--                                                                    <i class="pe-7s-id"></i>--}}
{{--                                                                    {{$p_perdida->data_nasc}}--}}
{{--                                                                </h4>--}}
{{--                                                            </div>--}}
{{--                                                            --}}{{--                                                            <h5 class=""><a href="">{{$p_perdida->designacao}}</a></h5>--}}

{{--                                                            <h4>--}}
{{--                                                                {{ \Laravel_Learn\Pessoa_perdida::calcularDias($p_perdida->created_at) }}--}}
{{--                                                            </h4>--}}


{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <a href="/contribuir/{{$p_perdida->id_p_perdida}}/edit" class="nav-link">--}}
{{--                                                                <button type="button" class="btn btn-primary">Comentar</button>--}}
{{--                                                            </a>--}}
{{--                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>--}}
{{--                                                            --}}{{--                                      <a href="/locations/{{$p_perdida->id_localizacao}}" class="nav-link">--}}
{{--                                                            <button type="button" class="btn btn-primary">Ver no Mapa</button>--}}
{{--                                                            </a>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

                                            {{--                                            moda--}}

                                        </tr>


                                    </tbody>
                                    @endforeach
                                </table>

                                <a class="btn btn-info btn-fill" href=""  data-toggle="modal"  data-target="#exampleModalCenter" >Transferencia</a>
                                <div class="modal" id="exampleModalCenter" tabindex="-1"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"  >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Informação detalhada da pessoa
                                                    perdida</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <img class="card-img-top" src="/imgs_p_perdidas/1.jpg"
                                                         style=" width: 200px; height: 200px;">
                                                </div>
                                                <div class=""><CODE><h1>Assss</h1></CODE>
                                                </div>
                                                <div class=""><h4>
                                                        <i class="pe-7s-id"></i>
                                                        aaa
                                                    </h4>
                                                </div>
                                                {{--                                                            <h5 class=""><a href="">{{$p_perdida->designacao}}</a></h5>--}}

                                                <h4>
                                                    aaaa
                                                </h4>


                                            </div>
                                            <div class="modal-footer">
                                                <a href="/contribuir/1/edit" class="nav-link">
                                                    <button type="button" class="btn btn-primary">Comentar</button>
                                                </a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                {{--                                      <a href="/locations/{{$p_perdida->id_localizacao}}" class="nav-link">--}}
                                                <button type="button" class="btn btn-primary">Ver no Mapa</button>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



</div>
</div>

<script src="<?php echo asset('js/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo asset('js/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
<script src="<?php echo asset('js/bootstrap.min.js')?>" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>

