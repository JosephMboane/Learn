@extends('layouts.app')
@section('title','Procura-se (Administrativo)')


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
                <li class="">
                    <a href="/user">
                        <i class="pe-7s-map-marker"></i>
                        <p>Pessoas perdidas</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-user"></i>
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
                    <a href="/transferencia-centros">
                        <i class="pe-7s-science"></i>
                        <p>Transferencias</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-news-paper"></i>
                        <p>Minha Conta</p>
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

    @include('inc.navbar2')
    <nav aria-label="breadcrumb" style=" left: 300px; position: relative;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/front-admin">Admin</a></li>
            <li class="breadcrumb-item current" aria-current="page">Centros</li>
        </ol>
    </nav>
    <div style="width: : 100%; height: 100px;">
        @include('inc.messages')
    </div>

    <div class="col-sm-10" style="left: 290px">
        <center>

            <div class="col-sm-10" style="position: relative; margin: 12px;top: -45px" >
                <form method="post" action="/transferencia-centros">
                    @csrf
                    <input type="hidden" name="id_caso" value="{{$caso->id_caso}}" >
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Selecione o Centro</label>
                                <select class="form-control" name="id_centro" style="height: 34px">
                                    @foreach($centros as $centro)
                                    <option value="{{$centro->id_centro}}">{{$centro->designacao}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Motivo</label>
                            <select class="form-control" name="observacao" style="height: 34px">
                                <option value="Doente">Doente</option>
                                <option value="Dificiente">Dificiente</option>
                                <option value="Melhorias">Melhorias</option>
                                <option value="Morte">Morte</option>
                                <option value="Morte">Fuga</option>
                                <option value="Velho">Velho</option>
                                <option value="Menor de idade">Menor de idade</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-md-4" style="right: 20px">
                        <a href="/create_centro">
                            <button type="submit" class="btn btn-info btn-fill pull-right" id="destaque">Transferir</button>
                        </a>
                    </div>

                </form>


            </div>
        </center>
    </div>


    <main class="row">
        @yield('content')
    </main>

</div>
<script type="text/javascript">
    document.querySelector('#destaque').onclick = function() {
        alert("Transferido!");
    };
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>


