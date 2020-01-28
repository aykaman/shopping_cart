<?php
  include("./partials/header.php");
?>

    <div class="container mt-3">
      <div class="row">
        
        <?php
          $result = mysql_query("select * from products order by id asc");
          if (mysql_num_rows($result) > 0)
          {
        ?>

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
        
        <?php
          }
        ?>
      </div>
    </div>

<?php
  include("./partials/footer.php");
?>