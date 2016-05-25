<!DOCTYPE html>
<html>
    <head>
        <title>videte - login</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <!-- CSS requerido min-->
        <link href="{!! asset('css/vendor_login.css') !!}" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <div class="top-content">
            
        <div class="inner-bg">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>nekkyn</strong> Login </h1>
                        <!--<div class="description">
                            <p>videte</p>
                        </div>-->
                    </div>
                </div>
                
               
                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login</h3>
                            <p>Introdusca credenciales de acceso</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-shield"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        @if (Session::has('errors'))
                            <div class="alert alert-danger fade in m-b-15">
                                <strong>Oops! Algo salió mal : </strong>
                                <br><br>
                                @foreach ($errors->all() as $error)
                                    <i class="fa fa-bug"></i> {{ $error }}<br />
                                @endforeach
                                
                            </div>
                        @endif
                        <form class="aui login-form" action="{{asset('/login')}}" method="post" id="login-form" data-modules="login/login-form">
                        {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="email">Username</label>
                                <input type="text" name="email" placeholder="email..." class="form-username form-control" id="id_username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="id_password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
        

        <script src="{!! asset( 'js/vendor_login.js' ) !!}"></script>
    </body>
</html>









