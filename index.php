<?php
  require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shopping cart</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav
      class="navbar navbar-dark bg-primary justify-content-between align-middle"
    >
      <a href="index.html" class="navbar-brand">Shopping cart</a>
      <form class="form-inline text-white">
        <span class="pr-2">Balance:</span>
        <span class="badge badge-danger mr-3">$100.00</span>
        <a href="myCart.html" class="btn btn-warning">
          My cart <i class="fa fa-shopping-cart"></i>
          <span class="cart-count badge badge-secondary">0</span>
        </a>
      </form>
    </nav>

    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 text-center">
          <div class="card h-100 bg-light">
            <img src="images/apples.jpg" />
            <div class="card-body">
              <div class="cart-title">
                <h4>Apples</h4>
                <h5>$0.30</h5>
                <small class="text-muted"
                  >&#9733; &#9733; &#9733; &#9733; &#9734;</small
                >
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card h-100 bg-light">
            <img src="images/beer.jpg" />
            <div class="card-body">
              <div class="cart-title">
                <h4>Beer</h4>
                <h5>$2.00</h5>
                <small class="text-muted"
                  >&#9733; &#9733; &#9733; &#9733; &#9734;</small
                >
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card h-100 bg-light">
            <img src="images/water.jpg" />
            <div class="card-body">
              <div class="cart-title">
                <h4>Water</h4>
                <h5>$1.00</h5>
                <small class="text-muted"
                  >&#9733; &#9733; &#9733; &#9733; &#9734;</small
                >
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Add to cart</button>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-center">
          <div class="card h-100 bg-light">
            <img src="images/cheese.jpg" />
            <div class="card-body">
              <div class="cart-title">
                <h4>Cheese</h4>
                <h5>$3.74</h5>
                <small class="text-muted"
                  >&#9733; &#9733; &#9733; &#9733; &#9734;</small
                >
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
