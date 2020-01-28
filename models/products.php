<?php
class Products extends DB 
{
  function get () 
  {
    return $this->fetch("SELECT * FROM `products`", null, "product_id");
  }
}
?>