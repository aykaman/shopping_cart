<?php
  require_once "config.php";
  include("./partials/header.php");
?>

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

<?php
  include("./partials/footer.php");
?>