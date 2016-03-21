<?php

/**
 * Cytonn Technologies
 *
 * @author: Ronnie Nyaga <rnyaga@cytonn.com>
 *
 * Project: php.app
 *
 */


  interface AreaInterface{
  		public function calculateArea();
  }
  class Square implements AreaInterface{
  	 public function calculateArea(){
  	   return $dimension * $dimension;
     }
  }
  class Circle implements AreaInterface{
  	  public function calculateArea(){
  	    return 3.14 * $dimension * $dimension;
      }
  }
  class SomeObject{
      private $dimension;
      public function setDimension(AreaInterface $dimension){
  	     $this->dimension = $dimension;
      }
      public function calculateObjectArea(){
  	     $this->dimension->calculateArea();
      }
  }
  $obj = new SomeObject();
  $obj->setDimension(new Square());
  $data = $obj->calculateArea();

  $obj->setDimension(new Circle());
  $data = $obj->calculateArea();

?>
