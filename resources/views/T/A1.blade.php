<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment I</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .header{
        height: 150px;
        background: #cd6155;
        border-bottom: 3px solid#454;
    }
    .navbar{
        font-size: 20px;
        text-decoration-color: black;
    }
    li a {
         display: block;
         }
li a:hover {
    background-color: green;
    width: 50px;
    height: 50px;
    }
  .carousel-indicators li {
    border-radius: 50%;
    width: 12px;
    height: 12px;
    background-color: #fff;
  }
.carousel,.paragraph,.paragraph2{
    margin-left: 200px;
    margin-right: 200px;
}
h5{
    color: #cd6155;
}
.paragraph,.paragraph2{
    font-size: 16px;
}
.carouselimg{
    height:350px;
    width:100%;
    background-size: cover;
}
.paragraph2{
    background: #ddd;
}
</style>
<body>

    {{-- Header --}}
    <div class="header ml-3 mr-3">
    <div class=" row">
<div class="col-8">
    <i class="fa fa-commenting pt-3 pl-5" style="font-size:36px"></i>
</div>
<div class="col-4">
<h3 class="pt-3 text-dark">Business Name Business Name</h3>
<p class="text-dark">your company slogan here</p>
</div>
    </div>
    <nav class="navbar navbar-expand-lg pl-5 pb-3 text-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav>
    </div>

    {{-- Carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide mt-3 carousel" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" >
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcShCU95eUTJhc7-xUA8Nkkarggmuork9HSqHA&usqp=CAU" alt="" class="carouselimg">
    </div>
    <div class="carousel-item">
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQapKb2el1b5poA1AYz535wD6G1ec8iTy541w&usqp=CAU" alt="" class="carouselimg">
    </div>
    <div class="carousel-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQEBVGA0UqE7jAC952zzXNzN50PJh5EkbJfig&usqp=CAU" alt="" class="carouselimg">
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>

{{-- Paragraph --}}
<div>
    <h5 class="mt-4 paragraph">Welcome to my New Comapny</h5>
    <p class="paragraph text-justify">Inle Lake is in the Shan Hills of Myanmar. At its southwestern edge, Phaung Daw Oo Paya is a tiered pagoda with gilded Buddha statues.
        In the hills, near the market town of Indein, the stupas of Shwe Inn Dein Pagoda resemble a field of gold spires.
        The ruined stupas at nearby Nyaung Ohak have been reclaimed by forest.</p>

    <p class="paragraph2 text-justify mt-2 pt-3 pb-3 pl-3 pr-3">Inle Lake is in the Shan Hills of Myanmar. At its southwestern edge, Phaung Daw Oo Paya is a tiered pagoda with gilded Buddha statues.
        In the hills, near the market town of Indein, the stupas of Shwe Inn Dein Pagoda resemble a field of gold spires.
        The ruined stupas at nearby Nyaung Ohak have been reclaimed by forest.</p>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
