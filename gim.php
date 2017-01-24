<?php

/**
 *
 */
class Gym
{
  //creamos los dos arrays vacios tanto mujeres y hombres
  private $hombres=[];
  private $mujeres=[];

// la funcion para almacenar  el numero de Hombres;
  public function almacenarH($hombre){
    if ($hombre>0) {
        $this->hombres[]=$hombre;
    }
    }
// la funcion para almacenar  el numero de Mujeres;
    public function almacenarM($mujer){
      if ($mujer>0) {
          $this->mujeres[]=$mujer;
      }
      }
//las dos funciones para calcular las medias y con el foreach para poder recorrer los valores y el total va acumulando y sumando los valores
      public function MediaHombres(){
   $total=0;
   foreach ($this->hombres as $key => $value) {
   $total=$total+$value;
   }
   return $total/count($this->hombres);
 }

  public function MediaMujeres(){
    $total=0;
    foreach ($this->mujeres as $key => $value) {
      $total=$total+$value;
  }
  return $total/count($this->mujeres);
  }

}



 ?>
