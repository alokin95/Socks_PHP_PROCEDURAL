<?php
  
  require_once 'classes/Product.php';

  $product = new Product();
  
  $result = $product->getProducts();

  $row = mysqli_fetch_object($result);

  require view('products', $result);

  // require 'views/products.template.php';