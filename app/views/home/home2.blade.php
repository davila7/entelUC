<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Bootstrap 3 Admin</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Entel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu"><i class="glyphicon glyphicon-unchecked"></i> Back <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-flag"></i> Color 1</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-flag"></i> Color 2</a></li>
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-flag"></i> Color 3</a></li>
                    </ul>
                </li> 
                <li class="nav-header"> 
                <a href="#" data-toggle="collapse" data-target="#menu2"><i class="glyphicon glyphicon-phone"></i> Front <i class="glyphicon glyphicon-chevron-right"></i></a>

                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Information &amp; Stats</a>
                        </li>
                        <li><a href="#">Views</a>
                        </li>
                        <li><a href="#">Requests</a>
                        </li>
                        <li><a href="#">Timetable</a>
                        </li>
                        <li><a href="#">Alerts</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
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

    
    <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    </body>
</html>