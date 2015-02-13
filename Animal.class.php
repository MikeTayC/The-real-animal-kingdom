<?php

  class Animal
  {
    public $isAlive = true;
    
    protected $petName;
    protected $DOB;
    
    public function setPetName($newPetName)
    {
      $this->petName = $newPetName; 
    }
    
    public function getPetName()
    {
      return $this->petName;
    }

    public function __construct($name)
    {
      $this->petName = $name;
      $this->DOB = time();
    }
    
  }
    
  
  
?>
