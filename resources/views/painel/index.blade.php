@extends('layouts.app')

@section('content')
    <div class="container">
    <ul>
        <li class="col-md-6 text-center">
            <a href="">
                <h1>{{$totalUser}}</h1>
            </a>
        </li>    <li class="col-md-6 text-center">
            <a href="">
                <h1>{{$totalRole}}</h1>
            </a>
        </li>    <li class="col-md-6 text-center">
            <a href="">
                <h1>{{$totalPermission}}</h1>
            </a>
        </li>    <li class="col-md-6 text-center">
            <a href="">
                <h1>{{$totalNotice}}</h1>
            </a>
        </li>
    </ul>
    </div>
@endsection
