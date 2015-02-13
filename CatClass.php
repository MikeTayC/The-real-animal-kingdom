<?php

class Cat extends Animal
{
  public function setPetName($newName)
  {
    $this->petName = str_replace('r','s', $newName);
  }
}

?>
