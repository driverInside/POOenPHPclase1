<?php

/**
 * Clase alumno.php
 * curso POO con PHP
 * sábado 26 de febrero 2011
 *
 * @author driver
 */
class alumno {

  private $id;
  private $alumno;
  private $edad;
  private $clase;
  private $parcial1;
  private $parcial2;
  private $parcial3;
  private $extras = 0;
  private $promedio;

  public function setData($datos = array()){

    //if(count($datos) == 7){
      $this->id = $datos['id'];
      $this->alumno = $datos['alumno'];
      $this->edad = $datos['edad'];
      $this->clase = $datos['clases'];
      $this->parcial1 = $datos['parcial1'];
      $this->parcial2 = $datos['parcial2'];
      $this->parcial3 = $datos['parcial3'];
    //}
   if(isset($datos['extras']) && !empty($datos['extras'])){
    $this->extras = $this->_extras($datos['extras']);
   }
  }


  private function _extras($puntuacionExtra = 0){ // todos los metodos privados deben empezar con un guion bajo.

    $extras = $puntuacionExtra/10;
    return $extras;
  }

  public function promedio(){
    $this->promedio = $this->parcial1 + $this->parcial2 + $this->parcial3;
    $this->promedio = $this->promedio/3;
    $this->promedio += $this->extras;
    return $this->promedio;
  }
}

$datos = array('id' => 1,
                'alumno' => 'Rasmus',
                'edad' => 30,
                'clases' => 'php',
                'parcial1' => 10,
                'parcial2' => 5,
                'parcial3' => 10,
                'extras' => 8);

$alumno1 = new alumno();
$alumno1->setData($datos);
echo $alumno1->promedio();
echo "\n"
?>
