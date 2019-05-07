@extends('layouts.appMboane')
@section('content')
    <div class="container">


        {{--@include('inc.slide_principal')--}}
    </div>
    {{--<example-component></example-component>--}}
    {{--<header-component></header-component>--}}
    {{--<pessoa-perdida></pessoa-perdida>--}}
    {{--<pessoa-perdida-create></pessoa-perdida-create>--}}
    <router-view></router-view>

@endsection