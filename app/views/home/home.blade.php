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
	<ul id="progressbar" style="font-weight: bold;">
		<li class="active"><strong>Elige el color de tu smartphone</strong></li>
		<li><strong>Categoría</strong></li>
		<li><strong>Personaliza</strong></li>
        <!--<li>Detalles</li>-->
        <li><strong>Enviar</strong></li>
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
                             <img src="{{ asset('uploads/step_one/blanco.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                 </a>
                                 <p>Blanco</p>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 2) btn-success @else btn-default @endif option-step1" data-id="2">
                              <img src="{{ asset('uploads/step_one/negro.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Negro</p>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 3) btn-success @else btn-default @endif option-step1" data-id="3">
                              <img src="{{ asset('uploads/step_one/dorado.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Dorado</p>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn @if($step_one == 4) btn-success @else btn-default @endif option-step1" data-id="4">
                              <img src="{{ asset('uploads/step_one/plateado.png') }}" id="data_image"
                                            height="300" width="300" class="img-responsive center-block" />
                                  </a>
                                  <p>Plateado</p>
                            </div>
                        </div>
        </div>
		<input type="button" name="next" class="next action-button" style="font-weight: bold;" id="step-one" value="Siguiente" />
	</fieldset>
	<fieldset class="wiz-center">
		<!--<h2 class="fs-title">Paso 2</h2>
		<h3 class="fs-subtitle">¿Como te gustaría empezar?</h3>-->
    <br>
		<div class="container">
            <div class="row row-centered">
                <div class="col-sm-12">
                        <div class="col-sm-4">
                        <a class="btn @if($step_two == 0) btn-success @else btn-default @endif option-step2" data-id="0">
                            <img src="{{ asset('uploads/options/textura.jpg') }}" id="data_image" height="300" width="300" class="img-responsive center-block" />
                                </a>
                                <p>Textura</p>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn @if($step_two == 1) btn-success @else btn-default @endif option-step2" data-id="1">
                            <img src="{{ asset('uploads/options/lisa.jpeg') }}" id="data_image" height="300" width="300" class="img-responsive center-block" />
                                </a>
                                <p>Lisa</p>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn @if($step_two == 2) btn-success @else btn-default @endif option-step2" data-id="2">
                            <img src="{{ asset('uploads/options/calado.jpg') }}" id="data_image" height="300" width="300" class="img-responsive center-block" />
                                </a>
                                <p>Calado</p>
                        </div>
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
                                <hr>
                                <!--<div class="panel panel-default" style="color:#db3141;">
                                  <div class="panel-heading">
                                    <i class="glyphicon glyphicon-menu-hamburger"></i> MENU
                                  </div>
                                </div>-->
                                <div id="myGroup">
                                    <ul class="nav nav-stacked">
                                     @foreach ($categories as $key=>$cat)
                                     <li class="nav-header">
                                        <a data-toggle="collapse" class="cate" id="cat{{ $key }}" data-target="#menu{{ $key }}" data-parent="#myGroup" style="color:white; cursor: pointer;">
                                           <!-- <img class="img-rounded" src="{{ asset('img/icons/'.$cat->icon) }}" height="30" width="30" />--> {{ $cat->name }} <i class="glyphicon glyphicon-chevron-right"></i>
                                           </a>
                                        <ul class="nav nav-stacked collapse" id="menu{{ $key }}">
                                            @foreach($cat->subcategories as $subcat)
                                            <li><a data-id="{{ $subcat->id }}" class="subcat" style="color:white; cursor: pointer;">
                                                <!--<i class="glyphicon glyphicon-circle"></i>-->
                                                <!--<img class="img-rounded" src="{{ asset('img/icons/'.$subcat->icon) }}" height="30" width="30" /> -->
                                                {{ $subcat->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- /col-3 -->
                            <div class="col-sm-9">
                                <div class="row">
                                    <!-- center left-->
                                    <div class="col-md-12">
                                        <div id="content-btn">
                                            <div class="btn-group btn-group-justified" id="div_options">
                                                <a href="#" class="btn btn-primary col-sm-3 hide btn_options" data-id="" id="hide_opt" >
                                                    <img src="" height="20" width="20" class="img_options img-circle" />
                                                    <div class="text_options"><br> Option Hide</div>
                                                </a>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="img-wrapper">
                                                    <img src="{{ asset('uploads/step_one/negro.png') }}" id="image_index1" height="300" width="300" class="img_personaliza img_own1" />
                                                    <img src="{{ asset('uploads/options/calado.jpg') }}" id="image_index2" height="300" width="300" class="img_personaliza img_own2" />
                                                    <img src="http://sierrafire.cr.usgs.gov/images/loading.gif" id="image_index3" height="300" width="300" style="z-index: 3; position: absolute; top: 0; left: 0;" class="img_personaliza hide" />
                                                    
                                                </div>
                                            </div>
                                            <!--/panel-body-->
                                        </div>
                                        <!--/panel-->
                                    <!--</div>-->
                                    <!--/col-->
                                   <!-- <div class="col-md-4">-->
                                    <!--<hr>-->
                                        <div  style="color:#db3141;">
                                         <!-- <div class="panel-heading">
                                            Opciones
                                          </div>-->
                                                <nav id="cd-vertical-nav" style="color:white;">
                                                    <ul>
                                                        <li id="li_color">
                                                            <a class="hide color_option" id="hide_color" data-src="" data-id="">
                                                                <span class="cd-dot color_opt" style="background-color:black;"></span>
                                                                <span class="cd-label name_color"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <br><br><br><br>
                                    </div>
                                    <!--/col-span-6-->
                                </div>
                                <!--/row-->
                            <!--/col-span-9-->
                        </div>
                        <div class="row">
                                    <div class="col-lg-12">
                                        <!--<div class="panel panel-success">
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
                                        </div>-->
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
    <!--<fieldset>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3">
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
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <hr>

                                        <div class="panel panel-default">
                                            <div class="panel-body">

                                            <img src="{{ asset('uploads/options/own.png') }}" id=""
                                            height="300" width="300" class="img-responsive center-block" />
                                            </div>
                                        </div>
                                    </div>
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

    </fieldset>-->
    <fieldset>
        <div class="col-md-8 col-md-offset-11">
          @if($existeOrder == false)
        <h2 class="fs-title">Enviar Datos</h2>
        <!--<h3 class="fs-subtitle">Ultimo paso</h3>-->
            <div class="container-fluid" id="form-send">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email_order" class="form-control" placeholder="Email">
                                  </div>
                                  <div class="form-group">
                                    <label>Código</label>
                                    <input type="text" class="form-control" id="codigo_order" placeholder="Código">
                                  </div>
                                  <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" name="direccion" class="form-control" id="address_order" placeholder="Dirección">
                                  </div>
                                  <button class="btn btn-info" id="sendOrder">Enviar</button>
            </div>
            <div class="alert alert-danger hide" id="require_alert" role="alert">Todos los campos son requeridos.</div>
            <div class="alert alert-success hide" id="success_alert" role="alert">Perfecto!! Tu elección ha sido enviada. Te enviamos un correo con la información.</div>
            @else
            <h1>Tu carcasa ya está en producción.</h1>
            @endif
        </div>
        <input type="button" name="previous" class="previous action-button" value="Anterior" />
    </fieldset>
</div>


@stop
