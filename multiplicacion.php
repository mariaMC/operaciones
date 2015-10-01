<?php
class Operaciones {
	public $num1;
	public $num2;
  public $resultado;
	
  public function numeros($a,$b){
    $this->num1 = $a;
    $this->num2 = $b;
    	
  }

  private function multiplica(){
  	$this->resultado = $this->num1 * $this->num2;

  }

  public function imprimirResultado(){
    $this->multiplica();
    return $this->resultado;
  }
  
}

$multiplicacion = new Operaciones;
$multiplicacion->numeros(2,5);
echo "El resultado es: ".$multiplicacion->imprimirResultado();


?>