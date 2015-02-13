<?php
  include('Animal.class.php');
  include('CatClass.php');
  
  $mittens = new Cat();
  $mittens->setPetName("Mr. Mittens");
  echo $mittens->getPetName();
  
?>
