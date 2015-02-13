<?php

class Cat extends Animal
{
  public function setPetName($newName)
  {
    $this->petName = $this->checkPetName($newName);
  }
  
  private function checkPetName($petNameToCheck)
  {
    return str_replace('r','s', $petNameToCheck);
  }
  
}

?>
