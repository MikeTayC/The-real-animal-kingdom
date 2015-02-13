<?php
  include('Animal.class.php');
  
  $mittens = new Animal();
  $mittens->setPetName("Mr. Mittens");
  echo $mittens->getPetName();
  
?>
