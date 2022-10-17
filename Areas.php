<?php
    class Area{
        public function CalcularRectangulo($base,$altura){
            $resultado=$base*$altura;
            return $resultado;
        }
        public function CalcularTriangulo($base,$altura){
            $resultado=($base*$altura)/2;
            return $resultado;
        }
    }
?>