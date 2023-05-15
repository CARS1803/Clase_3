<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

abstract class Transporte{
    protected $ruedas;
    public $capacidad;
    public static $color = "Verde";

    public function __construct($ruedas, $capacidad){
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }

    final public static function getColor(){
        echo "El transporte es de color " . self::$color;
    }

    public function getInfo() : void{
        echo "El transporte tiene $this->ruedas ruedas, y tiene capacidad de: $this->capacidad";
    }

    public function getRuedas(): void{
        echo "El transporte tiene $this->ruedas ruedas";
    }
}

class Carro extends Transporte{
    public $puertas;
    
    public function __construct($puertas = 0, $ruedas = 0, $capacidad = 0)
    {
        $this->puertas = $puertas;
        parent::__construct($ruedas, $capacidad);
    }
   
    public function getInfo() : void{
        echo "El carro tiene $this->ruedas ruedas, capacidad de: $this->capacidad y $this->puertas puertas, y el color es: " . parent::$color;
    }
}

class Bicicleta extends Transporte{
    public function getInfo() : void{
        echo "La bicicleta tiene $this->ruedas ruedas, capacidad de: $this->capacidad";
    }
}

$transporte = new Transporte(2,3);

$carroToyota = new Carro(2,4,5);
// $carroToyota->ruedas = 6;
$carroToyota->getInfo();
echo "<br>";
$bicicletaHaro = new Bicicleta(2,1);
$bicicletaHaro->getInfo();


// polimorfismo
// encapsulamiento
// herencia
// propiedades estaticas
// abstrac

// MODIFIACODRES DE ACCESO