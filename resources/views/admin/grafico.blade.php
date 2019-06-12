@extends('layouts.appMboane')
@section('title','Procura-se (Administrativo)')
@yield('content')

<div class="wrapper" style="background-color: #F8F8FF">
    <div class="sidebar" data-color="azure" data-image="/images/sidebar-5.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/pessoa_perdida') }}" class="simple-text">
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
                    <a href="/user">
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
{{--    <div class="main-panel">--}}
        @include('inc.navbar2')

{{--        <nav aria-label="breadcrumb" style="left: 15px;position: relative;">--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li>--}}
{{--                <li class="breadcrumb-item current" aria-current="page">Pessoas perdidas</li>--}}
{{--            </ol>--}}
{{--        </nav>--}}


{{--        <div class="col-md-4" style="left: -240px">--}}
{{--            <a href="/create">--}}
{{--                <button type="submit" class="btn btn-info btn-fill pull-right">Adicionar</button>--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="content col-md-12" style="top: -90px;position: relative;">--}}
        <div class="col-md-8 offset-md-3" style="position: relative;">

{{--            <div class="animated fadeIn">--}}
{{--                <div class="row">--}}

{{--                    <div class="col-md-12">--}}
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Grafico</strong>
                            </div>
                            <div class="card-body">
                                <div id="teste">

                                        {!! $chart->container() !!}

                                </div>

                            </div>
                        </div>
{{--                    </div>--}}


{{--                </div>--}}
{{--            </div><!-- .animated -->--}}
        </div><!-- .content -->



{{--    </div>--}}
</div>
<script src="https://unpkg.com/vue"></script>
<script>
    var teste = new Vue({
        el: '#teste',
    });
</script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
{!! $chart->script() !!}
<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>

