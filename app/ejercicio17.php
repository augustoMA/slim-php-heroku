<?php
    class Auto
    {
        private $_color; 
        private $_precio;
        private $_marca;
        private $_fecha;

        public function __construct($color, $marca, $precio=0, $fecha=null)
        {
            $this->_color=$color;
            $this->_marca=$marca;
            
            if($precio != 0)
            {
                $this->_precio=$precio;
            }

            if($fecha != null)
            {
                $this->_fecha=$fecha;
            }
        }

        public function AgregarImpuesto($impuesto){
            $this->_precio+=$impuesto;
        }

        public static function MostrarAuto($auto){
            echo "Color: ".$auto->_color." Marca: ".$auto->_marca." Precio: ".$auto->_precio." Fecha: ".$auto->_fecha."<br>";
        }

        public function Equals($auto){
            $retorno=false;

            if($auto->_marca == $this->_marca)
            {
                $retorno=true;
            }
            return $retorno;
        }

        public static function Add($auto1, $auto2){
            $retorno = 0;

            if($auto1->_marca == $auto2->_marca  && $auto1->_color == $auto2->_color)
            {
                $retorno = $auto1->_precio+$auto2->_precio;
            }
            else{
                echo "Los autos son distintos, no se pueden sumar los precios. Valor:";
            }

            return $retorno;
        }
    }

    $autoAux = new Auto("Negro", "Audi");
    $autoAux2 = new Auto("Blanco", "Audi");
    
    $autoAux3 = new Auto("Naranja", "Audi", 10);
    $autoAux4 = new Auto("Naranja", "Audi", 20);
    
    $autoAux5 = new Auto("Rojo", "Ford", 50, date('c'));

    $autoAux3->AgregarImpuesto(1500);
    $autoAux4->AgregarImpuesto(1500);
    $autoAux5->AgregarImpuesto(1500);

    echo Auto::Add($autoAux, $autoAux2)."<br>";

    if($autoAux->Equals($autoAux2))
    {
        echo "Los autos son iguales<br>";
    }
    else
    {
        echo "Los autos NO son iguales<br>";
    }

    Auto::MostrarAuto($autoAux);
    Auto::MostrarAuto($autoAux3);
    Auto::MostrarAuto($autoAux5);
?>