<?php
  include("./partials/header.php");
?>

    <section class="shopping-cart dark">
      <div class="container">
        <div class="block-heading">
          <h2>Cart items:</h2>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="items">
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img
                        class="img-fluid mx-auto d-block image"
                        src="images/apples.jpg"
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Apples</a>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input
                              id="quantity"
                              type="number"
                              value="1"
                              min="1"
                              class="form-control quantity-input"
                            />
                          </div>
                          <div class="col-md-3 price">
                            <span>$0.30</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img
                        class="img-fluid mx-auto d-block image"
                        src="images/cheese.jpg"
                      />
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Cheese</a>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantity:</label>
                            <input
                              id="quantity"
                              type="number"
                              value="1"
                              min="1"
                              class="form-control quantity-input"
                            />
                          </div>
                          <div class="col-md-3 price">
                            <span>$3.74</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="summary">
                <h3>Summary</h3>
                <div class="summary-item">
                  <span class="text">Subtotal</span
                  ><span class="price">$360</span>
                </div>
                <div class="summary-item">
                  <span class="text">Discount</span
                  ><span class="price">$0</span>
                </div>
                <div class="summary-item">
                  <span class="text">Shipping</span
                  ><span class="price">$0</span>
                </div>
                <div class="summary-item">
                  <span class="text">Total</span><span class="price">$360</span>
                </div>
                <button type="button" class="btn btn-primary btn-lg btn-block">
                  Checkout
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
  include("./partials/footer.php");
?>