<!--connect file-->
<?php
include('includes/connect.php');

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-commerce Website using PHP and Mysql</title>
  <!--Bootstrap CSS link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--css file-->
  <link rel="stylesheet" href="style.css">

<body>
  <!--navbar-->
  <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">

      <div class="container-fluid">
        <img src="./images/logo.png" alt="" class="logo">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total Price:100/-</a>
            </li>
            <!--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </li>
              </ul>  
                Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              -->
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
      </div>
    </nav>
    <!--Second child-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>

      </ul>
    </nav>

    <!--third child-->

    <div class="bg-light">
      <h3 class="text-center">Hidden Store</h3>
      <p class="text-center">Communications is at the heart of e-commerce and community

      </p>
    </div>
    <!--fourth child-->
    <div class="row">
      <div class="col-md-10">
        <!--products-->
        <div class="row">
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/apple.jpg" class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="./images/capcicum.jpg" class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img src="./images/dairy1.jpg" class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="./images/capcicum.jpg" class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="./images/capcicum.jpg" class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a<a href="#" class="btn btn-info">Add to cart</a>
                  <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="./images/capcicum.jpg" class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="#" class="btn btn-secondary">View more</a>
              </div>
            </div>
          </div>


        </div>
        <h1>Hello</h1>
      </div>
      <!--sidenav-->
      <div class="col-md-2 bg-secondary p-0">
        <!--brands to be displayed-->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">Brands</a>
          </li>
        <?php
$select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands))
{
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "
  <li class='nav-item'>
    <a href='index.php?brand=$brand_title' class='nav-link text-light'>$brand_title</a>
  </li>";
}
//echo $row_data['brand_title'];
        
        ?>
        </ul>
        <!--categories to be displayed-->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light">Categories</a>
          </li>
          <?php
$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories))
{
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "
  <li class='nav-item'>
    <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
  </li>";
}
//echo $row_data['category_title'];
        
        ?>
         
          
        </ul>

      </div>

    </div>

    <!--last child-->
    <div class="bg-info p-3 text-center">
      <p>All rights reserved @- Designed by Debdeep-2023

      </p>
    </div>




    <h1>Hello World</h1>
    <!--bootstarp jss link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>