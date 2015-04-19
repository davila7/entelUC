<!DOCTYPE>
<html ng-app="myApp">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<!-- Vertical tabs -->
		<link rel="stylesheet" href="css/bootstrap.vertical-tabs.css">
		<!--cover css-->
		<link rel="stylesheet" href="css/cover.css">
		<title>Entel Proyect</title>
	</head>
	<body>

		<div class="site-wrapper">
	      <div class="site-wrapper-inner">
	        <div class="cover-container">
	          <div class="masthead clearfix">
	            <div class="inner">
	              <h3 class="masthead-brand">Proyecto Entel</h3>
	              <nav>
	                <ul class="nav masthead-nav">
	                  <li class="active"><a href="#">Home</a></li>
	                  <li><a href="#">Features</a></li>
	                  <li><a href="#">Contact</a></li>
	                </ul>
	              </nav>
	            </div>
	          </div>
	          

	         <div class="inner cover">
	            <h1 class="cover-heading">Entel</h1>
	            <div class="col-xs-3"> <!-- required for floating -->
			    	<!-- Nav tabs -->
				    <ul class="nav nav-tabs tabs-left">
				      <li class="active"><a href="#home" data-toggle="tab">Back</a></li>
				      <li><a href="#profile" data-toggle="tab">Front</a></li>
				      <li><a href="#messages" data-toggle="tab">Trim</a></li>
				      <li><a href="#settings" data-toggle="tab">Test</a></li>
				    </ul>
				</div>

				<div class="col-xs-9">
				    <!-- Tab panes -->
				    <div class="tab-content">
				      <div class="tab-pane active" id="home">
						<img src="https://www.motorola.com/on/demandware.store/Sites-Motorola_US-Site/en_US/CONF_SVC_RedirectToAssetImage-Service?rear-color=OP102063&front-color=color-black&accent-color=OP102039&wallpaper=82PA00000116&memory=optionMemory-16&google-bootstrap=82PA00000005&pid=FLEXR2&activation-type=activation-type-NO_PLAN&view=backplate&size=full"
						height="300" width="300" />
				      </div>
				      <div class="tab-pane" id="profile">
				      	<img src="https://www.motorola.com/on/demandware.store/Sites-Motorola_US-Site/en_US/CONF_SVC_RedirectToAssetImage-Service?rear-color=OP102063&front-color=color-black&accent-color=OP102039&wallpaper=82PA00000116&memory=optionMemory-16&google-bootstrap=82PA00000005&pid=FLEXR2&activation-type=activation-type-NO_PLAN&view=frontplate&size=full"
						height="300" width="300" />
				      </div>
				      <div class="tab-pane" id="messages">
				      	<img src="https://www.motorola.com/on/demandware.store/Sites-Motorola_US-Site/en_US/CONF_SVC_RedirectToAssetImage-Service?rear-color=OP102063&front-color=color-black&accent-color=OP102039&wallpaper=82PA00000116&memory=optionMemory-16&google-bootstrap=82PA00000005&pid=FLEXR2&activation-type=activation-type-NO_PLAN&view=accents&size=full"
						height="300" width="300" />
				      </div>
				      <div class="tab-pane" id="settings">
				      	<p class="lead">
				      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.
						New Lorem ipsum dolor sit amet.</p>
				      </div>
				    </div>
				</div>
	          </div>
	          <div class="mastfoot">
	            <div class="inner">
	             <p class="lead">
	              <a href="#" class="btn btn-lg btn-default">Enviar</a>
	            </p>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
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

    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
	</body>
</html>