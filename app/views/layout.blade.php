<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"/> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en" class="no-js"><![endif]-->
<html>
<head>
<title>ENTEL ÖWN Mobile</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="Proyecto para entel desarrollado por estudiantes PUC del Centro de Innovación UC">
<meta name="keywords" content="Ente, PUC, Pontificia Universidad Catolica">
<meta name="author" content="github.com/davila7">
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:description" content=""/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <script src="{{ asset('js/modernizr.js') }}"></script>
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="{{ asset('css/color-menu.css') }}" rel="stylesheet">
            <link href="{{ asset('css/step-form.css') }}" rel="stylesheet">
        {{ Rapyd::styles() }}
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>
  <body style="font-family: 'Source Sans Pro', sans-serif;">
    <input type="hidden" id="base_url" value="{{ URL::to('/'); }}" />
    <input type="hidden" id="id_user" value="@if (Auth::check()){{ Auth::user()->id }}@else 0 @endif" />
    <div id="top-nav" class="navbar navbar-default navbar-static-top">
    <div class="container-fluid" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/'); }}"><img src="{{ asset('img/own-logo.png') }}" height="30" width="80" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    @if (Auth::user()->esAdmin)
                	   <li><a href="{{ URL::to('/admin'); }}"><i class="glyphicon glyphicon-cog"></i> Panel de Control</a></li>
                    @endif
                @endif
               <!-- <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>-->
                 @if (Auth::check())
                 <li><a><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->username }}</a></li>
                <li><a href="{{ URL::to('/user/logout'); }}"><i class="glyphicon glyphicon-lock"></i> Cerrar Sesión</a></li>
                 @else
                 <li><a href="#" data-toggle="modal" data-target="#modalIS"><i class="glyphicon glyphicon-hand-right"></i> Iniciar Sesión</a></li>
                 @endif
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="modalIS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inicia Sesión con:</h4>
      </div>
      <div class="modal-body">
      <ul class="list-group">
        <li class="list-group-item">
            <p>Ingresa tu email y contraseña.</p>
            {{ Form::open(array('url' => 'user/login', 'class'=>'form-signin')) }}
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <br>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            {{ Form::close() }}
        </li>
        <li class="list-group-item">O con tus Redes Sociales:</li>
        <li class="list-group-item"><a href="user/facebooklogin" class="btn btn-primary">Facebook</a>
        o <a href="user/twitterlogin" class="btn btn-info">Twitter</a></li>
      </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->

         <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
         <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
         <script src="{{ asset('js/color_menu.js') }}"></script>
        <div class="container">
            @yield('content')
        </div>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
          <script src="{{ asset('js/script.js') }}"></script>
          <script src="{{ asset('js/step-form.js') }}"></script>
          {{ Rapyd::scripts() }}
  </body>
</html>
