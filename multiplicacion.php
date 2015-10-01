<?php
class Operaciones {

	public $num1;
	public $num2;
  public $resultado;

  function __construct($a,$b){
    $this->num1 = $a;
    $this->num2 = $b;
  }
	
   public function sumar(){
    $this->resultado = $this->num1 + $this->num2;
    return $this->resultado;

  }

   public function restar(){
    $this->resultado = $this->num1 - $this->num2;

  }

  public function multiplicar(){
  	$this->resultado = $this->num1 * $this->num2;

  }

  public function imprimirResultado(){
    return $this->resultado;
  }
  
}

$suma = new Operaciones(3,3);
$suma->sumar();
echo "La suma es: ".$suma->imprimirResultado();
echo "<br>";

$resta = new Operaciones(10,3);
$resta->restar();
echo "La resta es: ".$resta->imprimirResultado();
echo "<br>";

$multiplicacion = new Operaciones(5,3);
$multiplicacion->multiplicar();
echo "\nLa multiplicacion es: ".$multiplicacion->imprimirResultado();



?>