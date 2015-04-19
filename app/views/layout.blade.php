<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"/> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en" class="no-js"><![endif]-->
<html>
<head>
<title>Proyecto Entel @if (Auth::check()) | {{Auth::user()->username}} @endif</title>
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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
          @yield('head')
  
  <!-- Custom CSS -->
  <link href="css/show-item.css" rel="stylesheet">

  <script src="js/modernizr.js"></script> <!-- Modernizr -->

</head>
  <body>
        <div class="container">
            @yield('content')
        </div>        
  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
  <script src="js/main.js"></script> <!-- Resource jQuery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>