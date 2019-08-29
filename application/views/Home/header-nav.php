

<body>

  <!-- Start your project here-->
   <!--Main Navigation-->
  <header>

    <!--Navbar-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark red darken-4">
  <div class="container">
  <a class="navbar-brand font-weight-bold styled" href="<?php echo base_url();?>">CCSICT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav mr-auto " >
      <li class="nav-item mx-2">
        <a class="nav-link styled" href="<?php echo base_url();?>" >Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link styled" href="<?php echo base_url('news');?>">News</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link styled" href="#">Take a Tour</a>
      </li>
      <!--<li class="nav-item dropdown mx-2">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
      <li class="nav-item mx-2">
        <a class="nav-link styled" href="#">Online Forum</a>
      </li>
      <li class="nav-item mx-2">
        <a class="nav-link styled" href="#">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link styled" href="#">
          <i class="fab fa-facebook-f"></i>
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link styled" href="#">
          <i class="fab fa-instagram"></i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle styled" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user "></i> </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</div>

</nav>
    <!--/.Navbar-->

  </header>
  <div class="mt-1 " >
  <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox" >
    <!-- First slide -->
    <div class="carousel-item active">
      <!--Mask color-->
      <div class="view" style="height:45vh">
        <!--Video source-->
        
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-indigo-light"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Light mask</h3>
          <p>First text</p>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view" style="height:45vh">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-purple-slight"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Super light mask</h3>
          <p>Secondary text</p>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Second slide -->

    <!-- Third slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view" style="height:45vh">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
        </video>
        <div class="mask "></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Strong mask</h3>
          <p>Third text</p>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Third slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>


