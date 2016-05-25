<!DOCTYPE html>
<html>
    <head>
        <title>Nekkyn Store - Backend</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS requerido min-->
        <link href="{!! asset('css/vendor_base.css') !!}" rel="stylesheet" type="text/css" />

    </head>
    <body>

    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
      <a class="navmenu-brand visible-md visible-lg" href="#">Project name</a>
      <ul class="nav navmenu-nav">
        <li class="active"><a href="./">Slide in</a></li>
        <li><a href="../navmenu-push/">Push</a></li>
        <li><a href="../navmenu-reveal/">Reveal</a></li>
        <li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu navmenu-nav">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>    

    <div class="container">
      <div class="page-header">
        <h1>Navmenu Template</h1>
      </div>
      <p class="lead">This example shows the navmenu element. If the viewport is <b>less than 992px</b> the menu will be placed the off canvas and will be shown with a slide in effect.</p>
      <p>Also take a look at the examples for a navmenu with <a href="../navmenu-push">push effect</a> and <a href="../navmenu-reveal">reveal effect</a>.</p>
      @yield('contenido')
    </div><!-- /.container -->


    <script src="{!! asset( 'js/vendor_base.js' ) !!}"></script>
    </body>
</html>