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
		<li>Categoría</li>
		<li>Personaliza</li>
        <li>Detalles</li>
        <li>Enviar</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<!--<h2 class="fs-title">Paso 1</h2>
		<h3 class="fs-subtitle">Elige el color de tu smartphone</h3>-->
        <br>
    	<div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 1) btn-success @else btn-default @endif option-step1" data-id="1">
                             <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                 </a>
                                 <p>Blanco</p>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 2) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Negro</p>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 3) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Dorado</p>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 4) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Plateado</p>
                            </div>
                        </div>
        </div>     
		<input type="button" name="next" class="next action-button" id="step-one" value="Siguiente" />
	</fieldset>
	<fieldset>
		<!--<h2 class="fs-title">Paso 2</h2>
		<h3 class="fs-subtitle">¿Como te gustaría empezar?</h3>-->
        <br>
		<div class="container-fluid">
            <div class="row">
                            <div class="col-sm-4">
                                <a class="btn @if($step_two == 0) btn-success @else btn-default @endif option-step2" data-id="0">
                                    <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                </a>
                                <p>Lisa</p>
                            </div>
                            <div class="col-sm-4">
                                <a class="btn @if($step_two == 1) btn-success @else btn-default @endif option-step2" data-id="1">
                                    <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                </a>
                                <p>Textura</p>
                            </div>
                            <div class="col-sm-4">
                                <a class="btn @if($step_two == 2) btn-success @else btn-default @endif option-step2" data-id="2">
                                    <img src="{{ asset('uploads/options/own.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                </a>
                                <p>Calado</p>
                            </div>
              </div>
        </div>                        
		<input type="button" name="previous" class="previous action-button" value="Anterior" />
		<input type="button" name="next" class="next action-button" id="step-two" value="Siguiente" />
	</fieldset>
	<fieldset>
        <!--<h2 class="fs-title">Paso 3</h2>
		<h3 class="fs-subtitle">Personaliza</h3>-->
            	   <!-- Main -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- Left column -->
                                <strong style="color:#db3141;"><i class="glyphicon glyphicon-wrench"></i> Menú</strong>
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
                                                <nav id="cd-vertical-nav" style="color:white;">
                                                    <ul>
                                                        <li>
                                                            <a href="#section1" data-number="1">
                                                                <span class="cd-dot" style="background-color:blue;" ></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section2" data-number="2">
                                                                <span class="cd-dot" style="background-color:black;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section3" data-number="3">
                                                                <span class="cd-dot" style="background-color:red;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section4" data-number="4">
                                                                <span class="cd-dot" style="background-color:aliceblue;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section5" data-number="5">
                                                                <span class="cd-dot" style="background-color:aquamarine;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section6" data-number="6">
                                                                <span class="cd-dot" style="background-color:darkorchid;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
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
    <input type="button" name="next" class="next action-button" id="step-three" value="Siguiente" />
    
	</fieldset>
    <fieldset>
        <!--<h2 class="fs-title">Paso 3</h2>
        <h3 class="fs-subtitle">Personaliza</h3>-->
                   <!-- Main -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- Left column -->
                                <strong style="color:#db3141;"><i class="glyphicon glyphicon-wrench"></i> Menú</strong>
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
                                                <nav id="cd-vertical-nav" style="color:white;">
                                                    <ul>
                                                        <li>
                                                            <a href="#section1" data-number="1">
                                                                <span class="cd-dot" style="background-color:blue;" ></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section2" data-number="2">
                                                                <span class="cd-dot" style="background-color:black;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section3" data-number="3">
                                                                <span class="cd-dot" style="background-color:red;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section4" data-number="4">
                                                                <span class="cd-dot" style="background-color:aliceblue;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section5" data-number="5">
                                                                <span class="cd-dot" style="background-color:aquamarine;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#section6" data-number="6">
                                                                <span class="cd-dot" style="background-color:darkorchid;"></span>
                                                                <span class="cd-label">Color</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="button" name="next" class="next action-button" id="step-three" value="Siguiente" />
    
    </fieldset>
    <fieldset>
        <h2 class="fs-title">Enviar Datos</h2>
        <!--<h3 class="fs-subtitle">Ultimo paso</h3>-->
        <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                              <form>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Dirección</label>
                                    <input type="text" class="form-control" placeholder="Dirección">
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Check me out
                                    </label>
                                  </div>
                                </form>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 4) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/options/own2.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Tu selección</p>
                            </div>
                        </div>
        </div>     
        <input type="button" name="previous" class="previous action-button" value="Anterior" />
        <input type="button" name="next" class="next action-button" id="step-one" value="Enviar" />
    </fieldset>
</div>    


@stop