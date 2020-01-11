<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <a class="navbar-brand" href="#"><i class="fa fa-phone" style="color: lightblue; font-size: xx-large;"></i> DynamicCallCenter <i class="fa fa-phone" style="color: lightblue; font-size: xx-large;"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item active">
              <a class="nav-link js-scroll-trigger" href="{{route('automatiqueCallCenter.index')}}">Home</a>
              <span class="sr-only">(current)</span>
          </li>

          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{route('automatiqueCallCenter.create')}}"><i class="fa fa-plus" style="color: lightblue;"></i> Contacts</a>
          </li>

          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About</a>
          </li>
          
          <li class="nav-item">
            <div class="dropdown">
                <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                  Services
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <button class="dropdown-item" type="button">Appel Cibl&eacute;</button>
                  <button class="dropdown-item" type="button">Programmer un appel</button>
                  <button class="dropdown-item" type="button">Envoyer des messages</button>
                </div>
            </div>
          </li>
          <div class="flex-center position-ref full-height">
                <div class="top-right links">
                  <form action="{{ route('logout') }}" method="post">
                  {{csrf_field()}}
                    <button>LogOut</button>
                  </form>
                </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">With Asterisk, communication become easy! Our Call Center is easy to use</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Header - set the background image for the header in the line below 
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="projet/pic/ACC2.jpg" class="d-block w-100" alt="...">
    </div>
    
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
</div>-->
  
<div class="container">
  @yield('content')
</div>
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <p class="m-0 text-center text-white" style="float: left; font: bold;">Copyright &copy; DallahDevGalimaTech 2019</p>
        </div>
        <div class="col-lg-4 col-sm-4 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
		    </div>	
      </div>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="projet/vendor/jquery/jquery.min.js"></script>
  <script src="projet/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
