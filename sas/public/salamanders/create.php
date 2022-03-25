<?php

require_once('../../private/initialize.php');

if(is_post_request()) {
  // Handle form values sent by new.php
  
  $menu_name = $_POST['salamander_name'] ?? '';
  
  echo "Salamander Name: " . $menu_name . "<br>";
  
} else {
  redirect_to(url_for('/salamanders/new.php'));
}

?>