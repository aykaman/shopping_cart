<?php
  include("./partials/header.php");
?>

    <div class="container mt-3">
      <div class="row">
        
        <?php
          $productLib = new Products();
          $products = $productLib->get();
          if (count($products) > 0)
          {
            foreach ($products as $p)
            {
        ?>

                <div class="col-lg-3 text-center">
                  <div class="card h-100 bg-light">
                      <img src="images/<?= $p['image'] ?>" />
                      <div class="card-body">
                      <div class="cart-title">
                          <h4><?= $p['name'] ?></h4>
                          <h5>$<?= round($p['price'],2) ?></h5>
                          <small class="text-muted"
                          >&#9733; &#9733; &#9733; &#9733; &#9734;</small
                          >
                      </div>
                      </div>
                      <div class="card-footer">
                      <input type="button" class="btn btn-primary" onclick="cart.add(<?= $row['product_id'] ?>);" value="Add to cart">
                      </div>
                  </div>
                </div>
        
        <?php
            }
          }
        ?>
      </div>

      <div class="row">
        <div id="page-cart" class="ninja"></div>
      </div>
    </div>

<?php
  include("./partials/footer.php");
?>