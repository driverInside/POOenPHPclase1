<?php

/**
 * Clase User.php
 * curso POO con PHP
 * sábado 26 de febrero 2011
 *
 * @author driver
 */
class User {

    //////// Propiedades   ////////

  public $saludo = 'Mundo';

  /////// Metodos  //////

  public function setSaludo($name = 'Mundo'){
     $this->saludo = $name;
  }

  public function getSaludo(){
		return $this->saludo;
  }

  public function mensaje(){

			$name = $this->saludo;
			$msg = "hola ".$name;
    }

	public function html(){
		$render = '<h1>'.$this->saludo.'</h1>';
		$render .= '<hr />';
		return $render;
	}

	public function a(){
		return '<h1>hi</h1>';
	}
}


    $user = new user();    

    $a = $user->a();

    $user->setSaludo('Todos');

    echo $user->html();

    echo "$a";

?>
