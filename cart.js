var cart = {
  ajax: function(opt) {
    var data = null;
    if (opt.data) {
      data = new FormData();
      for (var d in opt.data) {
        data.append(d, opt.data[d]);
      }
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", opt.url, true);
    xhr.onload = function() {
      if (xhr.status != 200) {
        console.log(xhr);
        alert(
          "AJAX error. Server responded with error code " +
            xhr.status +
            " " +
            xhr.statusText
        );
      } else {
        if (opt.target) {
          document.getElementById(opt.target).innerHTML = this.response;
        }
        if (typeof opt.load == "function") {
          opt.load(this.response);
        }
      }
    };
    xhr.send(data);
  },

  add: function(id) {
    cart.ajax({
      url: "cartRouter.php",
      data: {
        req: "add",
        product_id: id
      },
      load: function(res) {
        cart.count();
        alert(res);
      }
    });
  },

  count: function() {
    cart.ajax({
      url: "cartRouter.php",
      data: { req: "count" },
      target: "page-cart-count"
    });
  },

  toggle: function(reload) {
    var pgPdt = document.getElementById("page-products"),
      pgCart = document.getElementById("page-cart");

    if (reload || pgCart.classList.contains("cart")) {
      cart.ajax({
        url: "cartRouter.php",
        data: { req: "show" },
        target: "page-cart",
        load: function() {
          pgPdt.classList.add("cart");
          pgCart.classList.remove("cart");
        }
      });
    } else {
      pgPdt.classList.remove("cart");
      pgCart.classList.add("cart");
    }
  },

  change: function(id) {
    var qty = document.getElementById("qty_" + id).value;
    cart.ajax({
      url: "cartRouter.php",
      data: {
        req: "change",
        product_id: id,
        qty: qty
      },
      load: function(res) {
        cart.count();
        cart.toggle(1);
        alert(res);
      }
    });
  },

  remove: function(id) {
    document.getElementById("qty_" + id).value = 0;
    cart.change(id);
  },

  checkout: function() {
    cart.ajax({
      url: "cartRouter.php",
      data: {
        req: "checkout",
        name: document.getElementById("co_name").value,
        email: document.getElementById("co_email").value
      },
      load: function(res) {
        if (res == "OK") {
          window.location = "success.php";
        } else {
          gen.nShow(res);
        }
      }
    });
    return false;
  }
};

window.addEventListener("load", cart.count);
