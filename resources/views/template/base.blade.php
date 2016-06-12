<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo', 'Nekkyn Store - Backend')</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS requerido min-->
        <link href="{!! asset('css/vendor_base.css') !!}" rel="stylesheet" type="text/css" />

    </head>
    <body class="expandido">

    <div class="headTop">
        <div class="pull-left">
            <a class="blueBackLeft" href="{!! asset('/') !!}">Nekkyn Backend</a>
            @yield('breadcrumb')
        </div>
        <div class="pull-right">
            <div class="avatar">
                <div class="pull-left">
                    <img class="av" src="{!! asset($avatar) !!}" />
                </div>
                <div class="pull-right sp">
                    <span>Hola <strong>{!! Auth::user()->nickname !!} </strong></span>                    
                </div>
            </div>
        </div>
    </div>

    @include('menu')

    <div class="contenido">
        @yield('contenido')        
    </div>
    
    <script src="{!! asset( 'js/vendor_base.js' ) !!}"></script>
    </body>
</html>