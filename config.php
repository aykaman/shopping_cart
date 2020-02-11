<?php
  die('config');
  define('DB_HOST', 'srv-pleskdb33.ps.kz:3306');
  define('DB_NAME', 'nemonsco_shopping_cart');
  define('DB_CHARSET', 'utf8');
  define('DB_USER', 'nemon_shop');
  define('DB_PASSWORD', 'L@r@vel123');

  define('PATH_MOD', __DIR__ . '/models');

  session_start();
  if (!is_array($_SESSION['cart'])) 
  { 
    $_SESSION['cart'] = []; 
  }
  if (!isset($_SESSION["balance"])) 
  {
    $_SESSION["balance"] = 100.00;
  }
?>