@extends('layout')

@section('head')
@stop

@section('content')
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
                        <img src="{{ asset('img/icons/'.$cat->icon) }}" height="30" width="30" /> {{ $cat->name }} <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu{{ $key }}">
                        @foreach($cat->subcategories as $subcat)
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> 
                            <img src="{{ asset('img/icons/'.$subcat->icon) }}" height="30" width="30" /> {{ $subcat->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">
            <!-- column 2 -->
            <ul class="list-inline pull-right">
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
            <hr>

            <div class="row">
                <!-- center left-->
                <div class="col-md-6">

                    <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-plus"></i>
                            <br> Service
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cloud"></i>
                            <br> Cloud
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cog"></i>
                            <br> Tools
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            <br> Help
                        </a>
                    </div>

                    <hr>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Reports</h4></div>
                        <div class="panel-body">

                        <img src="https://www.motorola.com/on/demandware.store/Sites-Motorola_US-Site/en_US/CONF_SVC_RedirectToAssetImage-Service?rear-color=OP102063&front-color=color-black&accent-color=OP102039&wallpaper=82PA00000116&memory=optionMemory-16&google-bootstrap=82PA00000005&pid=FLEXR2&activation-type=activation-type-NO_PLAN&view=accents&size=full"
                        height="300" width="300" />
                            
                        </div>
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->
                </div>
                <!--/col-->
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Notices</h4></div>
                        <div class="panel-body">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                This is a dismissable alert.. just sayin'.
                            </div>
                            <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Visits</th>
                                    <th>ROI</th>
                                    <th>Source</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>45</td>
                                    <td>2.45%</td>
                                    <td>Direct</td>
                                </tr>
                                <tr>
                                    <td>289</td>
                                    <td>56.2%</td>
                                    <td>Referral</td>
                                </tr>
                                <tr>
                                    <td>98</td>
                                    <td>25%</td>
                                    <td>Type</td>
                                </tr>
                                <tr>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                </tr>
                                <tr>
                                    <td>..</td>
                                    <td>..</td>
                                    <td>..</td>
                                </tr>
                            </tbody>
                        </table>
                            
                        </div>
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
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Full Page Image Background Carousel Header -->
                    <header id="myCarousel" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for Slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <!-- Set the first background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                                <div class="carousel-caption">
                                    <h2>Caption 1</h2>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the second background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                                <div class="carousel-caption">
                                    <h2>Caption 2</h2>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Set the third background image using inline CSS below. -->
                                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                                <div class="carousel-caption">
                                    <h2>Caption 3</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="icon-next"></span>
                        </a>

                    </header>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
@stop