@extends('layouts.app')
@section('title','Registo de pessoa perdida')

<style type="text/css">
    .form-group{
        top: 20px;
        position: relative;
    }
    .conteiner{
        margin: 35px;
    }

</style>
@section('content')



    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center d-flex justify-content-center">
            <a href="#" class="nav-link" style="color: white;"><h4>PROCURA-SE</h4></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="/pessoa_perdida/" class="nav-link">
                        <i class="pe-7s-home"></i>Pagina Inicial</a>
                </li>
                <li class="nav-item active">
                    <a href="/pessoa_perdida/create/" class="nav-link">
                        <i class="pe-7s-add-user"></i>Pessoa Perdida</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Edson Gomes</span>
                        <img class="img-xs rounded-circle" src="/imgs_p_perdidas/1538714846foto.jpg" alt="Profile image">
                        <i class="pe-7s-edit"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="pe-7s-edit"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="pe-7s-id"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="pe-7s-users"></i>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Editar conta
                        </a>
                        <a class="dropdown-item">
                            Lista de Ajudas
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <nav aria-label="breadcrumb" style="left: 20px;position: relative;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item current" aria-current="page">Pessoas perdidas|Contributos</li>
        </ol>
    </nav>
    <div class="content" style="left: 5px; position: relative;background-image: url("/images/register.jpg");">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="header">
                        <div class="col-sm-4">
                            <h4 class="title">Pessoa Perdida</h4>
                        </div>
                        <div class="col-sm-6" style="">
                            <h4 class="title">Dar um contributo</h4>
                        </div>
                    </div>

                    <div class="content">
                        <div class="row">

                            <div id="graph">
                                {{!!$lava->render('BarChat','created_at','graph')}}
                            </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




@endsection

