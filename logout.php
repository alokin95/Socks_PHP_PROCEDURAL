<?php
  session_start();
  unset($_SESSION["email"]); 
  unset($_SESSION["role"]);  
  unset($_SESSION["cart"]);  
  header("Location: index");