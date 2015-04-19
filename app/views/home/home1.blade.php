@extends('layout')

@section('head')
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
@stop

@section('content')
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
<div class="cd-tabs">
  <nav>
    <ul class="cd-tabs-navigation">
      <li><a data-content="inbox" class="selected" href="#0">Inbox</a></li>
      <li><a data-content="new" href="#0">New</a></li>
      <li><a data-content="gallery" href="#0">Gallery</a></li>
      <li><a data-content="store" href="#0">Store</a></li>
      <li><a data-content="settings" href="#0">Settings</a></li>
      <li><a data-content="trash" href="#0">Trash</a></li>
    </ul> <!-- cd-tabs-navigation -->
  </nav>

  <ul class="cd-tabs-content">
    <li data-content="inbox" class="selected">
      <p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
      <p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
    </li>

    <li data-content="new">
      <p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>

      <p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>
    </li>

    <li data-content="gallery">
      <p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
    </li>

    <li data-content="store">
      <p>Store Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, enim, pariatur. Ab assumenda, accusantium! Consequatur magni placeat quae eos dicta, cum expedita sunt facilis est impedit possimus dolorum sequi nostrum nobis sit praesentium molestias nulla laudantium fugit corporis nam ut saepe harum ipsam? Debitis accusantium, omnis repudiandae modi, distinctio illo voluptatibus aperiam odio veritatis, quam perferendis eaque ullam. Temporibus tempore ad voluptates explicabo ea sit deleniti ipsum quos dolores tempora odio, ab corporis molestiae, eaque optio, perferendis! Cumque libero quia modi! Totam magni rerum id iusto explicabo distinctio, magnam, labore sed nemo expedita velit quam, perspiciatis non temporibus sit minus voluptatum. Iste, cumque sunt suscipit facere iusto asperiores, ullam dolorum excepturi quidem ea quibusdam deserunt illo. Nesciunt voluptates repellat ipsam.</p>
    </li>

    <li data-content="settings">
      <p>Settings Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nam magni, ullam nihil a suscipit, ex blanditiis, adipisci tempore deserunt maiores. Nostrum officia, ratione enim eaque nihil quis ea, officiis iusto repellendus. Animi illo in hic, maxime deserunt unde atque a nesciunt? Non odio quidem deserunt animi quod impedit nam, voluptates eum, voluptate consequuntur sit vel, et exercitationem sint atque dolores libero dolorem accusamus ratione iste tenetur possimus excepturi. Accusamus vero, dignissimos beatae tempore mollitia officia voluptate quam animi vitae.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ipsam eum reprehenderit minima at sapiente ad ipsum animi doloremque blanditiis unde omnis, velit molestiae voluptas placeat qui provident ab facilis.</p>
    </li>

    <li data-content="trash">
      <p>Trash Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque a iure nostrum animi praesentium, numquam quidem, nemo, voluptatem, aspernatur incidunt. Fugiat aspernatur excepturi fugit aut, dicta reprehenderit temporibus, nobis harum consequuntur quo sed, illum.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima doloremque optio tenetur, natus voluptatum error vel dolorem atque perspiciatis aliquam nemo id libero dicta est saepe laudantium provident tempore ipsa, accusamus similique laborum, consequatur quia, aut non maiores. Consectetur minus ipsum aliquam pariatur dolorem rerum laudantium minima perferendis in vero voluptatem suscipit cum labore nemo explicabo, itaque nobis debitis molestias officiis? Impedit corporis voluptates reiciendis deleniti, magnam, fuga eveniet! Velit ipsa quo labore molestias mollitia, quidem, alias nisi architecto dolor aliquid qui commodi tempore deleniti animi repellat delectus hic. Alias obcaecati fuga assumenda nihil aliquid sed vero, modi, voluptatem? Vitae voluptas aperiam nostrum quo harum numquam earum facilis sequi. Labore maxime laboriosam omnis delectus odit harum recusandae sint incidunt, totam iure commodi ducimus similique doloremque! Odio quaerat dolorum, alias nihil quam iure delectus repellendus modi cupiditate dolore atque quasi obcaecati quis magni excepturi vel, non nemo consequatur, mollitia rerum amet in. Nesciunt placeat magni, provident tempora possimus ut doloribus ullam!</p>
    </li>
  </ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->

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
@stop