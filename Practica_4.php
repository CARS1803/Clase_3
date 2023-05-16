<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Cliente{
    private static $Datos_clientes = "<b>Obtener informacion del cliente</b>";
    public $nombre;
    protected $DPI;
    public $telefono;
    public $producto;

    public function __construct($nombre, $DPI, $telefono, $producto){
        $this->nombre = $nombre;
        $this->DPI = $DPI;
        $this->telefono = $telefono;
        $this->producto = $producto;

    }

    final public static function Datos_clientes(){
        echo self::$Datos_clientes;
    }

    public function nombre(): void{
        echo " El nombre del Cliente es: $this->nombre";
    }

    public function getDPI() : void{
        echo " El DPI es: $this->DPI";
    }
 
    public function setDPI(string $DPI){
        $this->DPI = $DPI;
    }

    public function gettelefono(): void{
        echo "La telefono del cliente es: $this->telefono";
    }

    public function getproducto(): void{
        echo "El producto del cliente es: $this->producto";
    }
}

class Cliente_mayorista extends Cliente{
    public $cantidad_compra;

    public function __construct($nombre = " ", $DPI = " ", $telefono = " ", $producto = " ", $cantidad_compra = " ") {
        parent::__construct($nombre, $DPI, $telefono, $producto);
        $this->cantidad_compra = $cantidad_compra;
    }

    public function getcantidad_compra() : void{
        echo"La cantidad de compra del producto es: $this->cantidad_compra";
    }

    public function nombre(): void{
        echo " El nombre del Cliente mayorista es: $this->nombre";
    }
    
}


class Cliente_comun extends Cliente{

    public function nombre(): void{
        echo " El nombre del Cliente_comun es: $this->nombre";
    }

}


$Cliente_mayorista1 = new Cliente_mayorista('Pedro Jose Perez', '123456789999', 12345678, 'Mesas', 100);
$Cliente_mayorista1->Datos_clientes();
echo "<br>";
$Cliente_mayorista1->nombre();
echo "<br>";
$Cliente_mayorista1->getDPI();
echo "<br>";
$Cliente_mayorista1->gettelefono();
echo "<br>";
$Cliente_mayorista1->getproducto();
echo "<br>";
$Cliente_mayorista1->getcantidad_compra();

echo"<hr>";

$Cliente_comun1 = new Cliente_comun('Jouse Garcia', '123456789999', 12345678, 'Silla');
$Cliente_comun1->Datos_clientes();
echo "<br>";
$Cliente_comun1->nombre();
echo "<br>";
$Cliente_comun1->getDPI();
echo "<br>";
$Cliente_comun1->gettelefono();
echo "<br>";
$Cliente_comun1->getproducto();
