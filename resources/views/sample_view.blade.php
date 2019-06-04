{{--@extends('layouts.appMboane')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Dashboard</div>--}}
{{--                    @include('inc.navbar2')--}}
{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        {!! $chart->container() !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layouts.appMboane')
@section('content')
    <div class="container">



    </div>

    <html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>

    </head>
    <body>
    <div id="teste">
        <div class="container">
        {!! $chart->container() !!}
        </div>
    </div>
    <script src="https://unpkg.com/vue"></script>
    <script>
        var teste = new Vue({
            el: '#teste',
        });
    </script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
    {!! $chart->script() !!}
    </body>
    </html>
@endsection
