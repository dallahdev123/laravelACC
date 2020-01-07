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
  <link href="{{asset('projet/style.css')}}" rel="stylesheet">

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
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
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
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <?php 
        session_start();
          ?>
          <?php if (isset($_SESSION['message'])): ?>
          <div class="msg">
            <?php 
              echo $_SESSION['message']; 
              unset($_SESSION['message']);
            ?>
          </div>
          <?php endif ?>

              <div class="container"> 
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">email</th>
                    <th scope="col">Telephone</th>
                  </tr>
                </thead>
               
                  <tr>
                    <td><?php echo $contact['prenom']; ?></td>
                    <td><?php echo $contact['nom']; ?></td>
                    <td><?php echo $contact['address']; ?></td>
                    <td><?php echo $contact['email']; ?></td>
                    <td><?php echo $contact['telephone']; ?></td>
                  </tr>
            
              </table> 
              </div>
              <script src="projet/vendor/jquery/jquery.min.js"></script>
  <script src="projet/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
