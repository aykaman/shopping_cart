<?php
  include(__DIR__ . "/config.php");
  require PATH_MOD . "db.php";
  require PATH_MOD . "products.php";
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
        <span class="badge badge-danger mr-3"><?= $_SESSION["balance"] ?></span>
        <a href="myCart.html" class="btn btn-warning">
          My cart <i class="fa fa-shopping-cart"></i>
          <span class="cart-count badge badge-secondary">0</span>
        </a>
      </form>
    </nav>
