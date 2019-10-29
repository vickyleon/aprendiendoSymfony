<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class MiFiltroExtension extends AbstractExtension
{
    public function getFilters(){
        return [
           
            new TwigFilter('multiplicar', [$this, 'multiplicar']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('mutiplicar', [$this, 'multiplicar']),
        ];
    }

    public function multiplicar($numero)
    {
        // ...
        $tabla = "<h1> Tabla del $numero </h1>";
        for($i = 0; $i <= 10; $i++){
            $tabla .= "$i x $numero = ".($i * $numero)."</br>";
        }

        return $tabla;
      
    
    }
}
