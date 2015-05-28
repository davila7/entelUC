@extends('layout')

@section('head')
@stop

@section('content')
<script src="{{ asset('js/home.js') }}"></script>

<!-- multistep form -->
<div id="msform">
    @if($errors->has())
    <div class="panel panel-danger">
            Ocurrió un problema al iniciar sesión:
            <ul class="list-group">
                @foreach($errors->all() as $message)
                <li class="list-group-item">{{ $message }}</li>
                @endforeach
            </ul>
    </div>
    @endif
    <div class="panel panel-danger login-required" style="display: none;">
            <ul class="list-group">
                <li class="list-group-item">Debes iniciar sesión para que tus elecciones queden registradas.</li>
            </ul>
    </div>
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Elige el color de tu smartphone</li>
		<li>Elige una opción para personalizar</li>
		<li>Personaliza</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Paso 1</h2>
		<h3 class="fs-subtitle">Elige el color de tu smartphone</h3>
    	<div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 1) btn-success @else btn-default @endif option-step1" data-id="1">
                             <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                 </a>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 2) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 3) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 4) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                            </div>
                        </div>
        </div>     
		<input type="button" name="next" class="next action-button" id="step-one" value="Siguiente" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Paso 2</h2>
		<h3 class="fs-subtitle">¿Como te gustaría empezar?</h3>
		<div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"><p class="label label-danger">Comienza desde cero</p></div>
                <div class="col-sm-8"><p class="label label-danger">Elige uno de nuestras muestras</p></div>
            </div>
            <div class="row">
                            <div class="col-sm-4">
                                <a class="btn @if($step_two == 0) btn-success @else btn-default @endif option-step2" data-id="0">
                                    <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="btn @if($step_two == 1) btn-success @else btn-default @endif option-step2" data-id="1">
                                    <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a class="btn @if($step_two == 2) btn-success @else btn-default @endif option-step2" data-id="2">
                                    <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                </a>
                            </div>
              </div>
        </div>                        
		<input type="button" name="previous" class="previous action-button" value="Anterior" />
		<input type="button" name="next" class="next action-button" id="step-two" value="Siguiente" />
	</fieldset>
	<fieldset>
        <h2 class="fs-title">Paso 3</h2>
		<h3 class="fs-subtitle">Personaliza</h3>
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
                    
                                            <img src="{{ asset('uploads/options/own.png') }}" id="image"
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
                                                    FORMULARIO DE ORDEN ACÁ
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
                                              @endif
                                        </div>
                                        
                                        </div>
                                        <!--/panel-->
                    
                                    </div>
                                    <!--/col-span-6-->
                    
                                </div>
                                <!--/row-->
                                 
                            <!--/col-span-9-->
                        </div>
                        <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading text-center">
                                                <h4 class="center-block">Ultimas elecciones</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                          </ol>
                                        
                                          <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/options/own2.png') }}" alt="Chania" class="img-responsive center-block">
                                                </a>
                                            </div>
                                        
                                            <div class="item">
                                              <img src="{{ asset('uploads/options/own.png') }}" alt="Flower" class="img-responsive center-block">
                                            </div>
                                        
                                            <div class="item">
                                              <img src="{{ asset('uploads/options/own4.png') }}" alt="Flower" class="img-responsive center-block">
                                            </div>
                                          </div>
                                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
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
                            </div>
                    </div>
                    <!-- /Main -->
                     <!--<div class="container-fluid">
                            <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-success">
                                            <div class="panel-heading text-center">
                                                <h4 class="center-block">Ultimas elecciones</h4>
                                            </div>
                                            <div class="panel-body">
                                       <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                          </ol>
                                        
                                          <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <a href="#">
                                                    <img src="{{ asset('uploads/options/own2.png') }}" alt="Chania" class="img-responsive center-block">
                                                </a>
                                            </div>
                                        
                                            <div class="item">
                                              <img src="{{ asset('uploads/options/own.png') }}" alt="Flower" class="img-responsive center-block">
                                            </div>
                                        
                                            <div class="item">
                                              <img src="{{ asset('uploads/options/own4.png') }}" alt="Flower" class="img-responsive center-block">
                                            </div>
                                          </div>
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
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
	</fieldset>
</div>    


@stop