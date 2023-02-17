<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

<!--Bootstrap css link--->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--fontawesome link--->

<script src="https://kit.fontawesome.com/15751bed85.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>


  	<!--navbar-->

  	<div class="container-fluid p-0">
  	
    <!--first child-->

  	<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">

  <img src="img/logo2.jpg" alt="" class="logo"> 

  <h5 class="text-white h4"> Fuelin </h5>




    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        

        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Fuel</a></li>
            <li><a class="dropdown-item" href="#">Lubricants</a></li>
            <li><a class="dropdown-item" href="#">Air</a></li>
            <li><a class="dropdown-item" href="#">Services</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Delivery
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Track the Delivery</a></li>
            </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping-fast"></i></a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </div>
  </div>
</nav>

<!----Second child---->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  
  <ul class="navbar-nav me-auto">

    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Login</a>
        </li>
  </ul>
</nav>

<!---Third child---->

<div class="row">

<div class="col-md-8">
  
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/c1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/c2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/c4.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="col-md-4">
  
  <form>
  <div class="mt-3">
    <label for="exampleInputEmail1" class="form-label">Login</label>
    <br><br>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>



<!----forth child--->


  <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<br><br>
<!-----Fifth child----->


  
  

<div class="container text-center">
  <div class="row align-items-start">

    <div class="col-md-10">

      <!----products---->
      
      <div class="row">
        
        <div class="col-md-4 mb-4">
          <div class="card">
  <img src="img/c5.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fuel Delivery</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
        </div>

        <div class="col-md-4">
          <div class="card">
  <img src="img/c12.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lubricant</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>
        </div>

        <div class="col-md-4">
           <div class="card">
  <img src="img/c7.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nitregen Air</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>

</div>


    <div class="col-md-4">
           <div class="card">
  <img src="img/c7.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nitregen Air</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>

</div>

<div class="col-md-4">
           <div class="card">
  <img src="img/c5.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nitregen Air</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>

</div>

<div class="col-md-4">
           <div class="card">
  <img src="img/c12.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nitregen Air</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View More</a>
  </div>
</div>

</div>
        </div>


      </div>

  

     <div class="col-md-2">

      <!---site nav--->

<h1>Hi</h1>

    </div>

    

    

    
    </div>

  </div>


<br><br>

<!--last child--->

<div class="bg-success p-2 text=center">

<center>
   <p>All Rights Reserved @ Designed by ASE Group</p>
</center>
 
  
</div>


    
<!--Bootstrap js link--->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>

</html>
