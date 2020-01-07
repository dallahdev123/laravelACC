<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Asterisk Server</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 


  <!-- Bootstrap core CSS -->
  <link href="{{asset('projet/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('projet/css/full-width-pics.css')}}" rel="stylesheet">
  <link href="{{asset('projet/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DynamicCallCenter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item active">
            <p class="nabar-btn ml-auto">
              <a class="btn btn-primary" href="{{route('automatiqueCallCenter.index')}}">Home</a>
            </p>
              <span class="sr-only">(current)</span>
          </li>
          <hr>
          <li class="nav-item">
            <p class="nabar-btn">
              <a class="btn btn-primary" href="{{route('automatiqueCallCenter.create')}}">Contacts</a>
            </p>
          </li>

          <li class="nav-item">
            <p class="nabar-btn">
              <a class="btn btn-primary" href="#">About</a>
            </p>
          </li>
          
          <li class="nav-item">
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">Action</button>
                  <button class="dropdown-item" type="button">Another action</button>
                  <button class="dropdown-item" type="button">Something else here</button>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below -->
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="projet/pic/carous.jpg" class="d-block w-100" alt="...">
    </div>
    <!--
    <div class="carousel-item">
      <img src="projet/pic/carous2.jpg" class="d-block w-100" alt="...">
    </div>
    -->
  </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
<div class="container">
  @yield('content')
</div>
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DallahDev 2019</p>
    </div>
    <div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
		</div>	
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="projet/vendor/jquery/jquery.min.js"></script>
  <script src="projet/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
