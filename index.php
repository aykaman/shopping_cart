<?php
  include("./partials/header.php");
?>

    <div class="container mt-3">
      <div class="row">
        
        <?php
          $productLib = new Product();
          $products = $productLib->get();
          if (count($products) > 0)
          {
            echo count($products);
            foreach ($products as $pid->$p)
            {
        ?>

                <div class="col-lg-3 text-center">
                <div class="card h-100 bg-light">
                    <img src="images/<?= $p['image'] ?>" />
                    <div class="card-body">
                    <div class="cart-title">
                        <h4><?= $p['name'] ?></h4>
                        <h5>$<?= $p['price'] ?></h5>
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
          }
        ?>
      </div>
    </div>

<?php
  include("./partials/footer.php");
?>