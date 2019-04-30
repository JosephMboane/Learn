@extends('layouts.app')
{{--<link href="bootstrap/myedit.css" rel="stylesheet">--}}


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    @include('inc.navbar2')
                    {{--<div class="card-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    {{--<example-component></example-component>--}}
    {{--<PessoaPerdidaComponent></PessoaPerdidaComponent>--}}


    <pessoa-perdida></pessoa-perdida>
@endsection
