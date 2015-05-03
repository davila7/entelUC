@extends('layout')

@section('head')
@stop

@section('content')
<script src="{{ asset('js/home.js') }}"></script>
<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <strong><i class="glyphicon glyphicon-wrench"></i> Menú</strong>
            <hr>
            <ul class="nav nav-stacked">
                 @foreach ($categories as $key=>$cat)
                 <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu{{ $key }}">
                        <img class="img-rounded" src="{{ asset('img/icons/'.$cat->icon) }}" height="30" width="30" /> {{ $cat->name }} <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu{{ $key }}">
                        @foreach($cat->subcategories as $subcat)
                        <li><a href="#" data-id="{{ $subcat->id }}" class="subcat" >
                            <i class="glyphicon glyphicon-circle"></i> 
                            <img class="img-rounded" src="{{ asset('img/icons/'.$subcat->icon) }}" height="30" width="30" /> {{ $subcat->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">
            <!-- column 2 -->
            <!--<ul class="list-inline pull-right">
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">1. Is there a way..</a></li>
                        <li><a href="#">2. Hello, admin. I would..</a></li>
                        <li><a href="#"><strong>All messages</strong></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
            </ul>
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>-->

            <div class="row">
                <!-- center left-->
                <div class="col-md-8">
                    <div id="content-btn">
                        <div class="btn-group btn-group-justified" id="div_options">
                            <a href="#" class="btn btn-primary col-sm-3 hide btn_options" data-id="" id="hide_opt" >
                                <img src="" height="20" width="20" class="img_options img-circle" />
                                <div class="text_options"><br> Option Hide</div>
                            </a>
                        </div>
                        <div class="btn-group btn-group-justified msg">
                            <div class="alert alert-info">
                                    <!--<button type="button" class="close" data-dismiss="alert">×</button>-->
                                    Seleccione una opción del menú.
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="panel panel-default">
                        <div class="panel-body">

                        <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                        height="300" width="300" class="img-responsive center-block" />
                        </div>
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->
                </div>
                <!--/col-->
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <h4 class="center-block">Öwn</h4></div>
                        <div class="panel-body">
                            @if (Auth::check())  
                                Bienvenido {{ Auth::user()->username }}
                            @else
                                <p>Ingresa tu email y contraseña.</p>
                                  {{ Form::open(array('url' => 'user/login', 'class'=>'form-signin')) }}
                                    <label for="inputEmail" class="sr-only">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    <br>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                                  {{ Form::close() }}
                                  @if ($error_login)
                                  <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            Usuario y contraseña incorrectos.
                                  </div>
                                  @endif
                          @endif
                    </div>
                    
                    </div>
                    <!--/panel-->

                </div>
                <!--/col-span-6-->

            </div>
            <!--/row-->
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->

 <div class="container">

        <hr>

        <!-- Footer -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading text-center">
                            <h4 class="center-block">Ultimas elecciones</h4>
                        </div>
                        <div class="panel-body">
                    <!-- Full Page Image Background Carousel Header -->
                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>
                    
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="#">
                                <img src="{{ asset('uploads/options/own2.png') }}" alt="Chania" class="img-responsive center-block">
                            </a>
                        </div>
                    
                        <div class="item">
                          <img src="{{ asset('uploads/options/own3.png') }}" alt="Chania" class="img-responsive center-block">
                        </div>
                    
                        <div class="item">
                          <img src="{{ asset('uploads/options/own.png') }}" alt="Flower" class="img-responsive center-block">
                        </div>
                    
                        <div class="item">
                          <img src="{{ asset('uploads/options/own4.png') }}" alt="Flower" class="img-responsive center-block">
                        </div>
                      </div>
                    
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
                </div>
            </div>
    </div>
    <!-- /.container -->
@stop