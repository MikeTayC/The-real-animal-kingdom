<?php

  class Animal
  {
    public $isAlive = true;
    
    private $petName;
    
    public function setPetName($newPetName)
    {
      $this->petName = $newPetName; 
    }
    
    public function getPetName()
    {
      return $this->petName;
    }
    
  }
    
  
  
?>
