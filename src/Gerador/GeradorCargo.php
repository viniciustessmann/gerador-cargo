<?php 

namespace Gerador;

class GeradorCargo
{

    public static function gerar()
    {
        return $this->getCargo() . $this->getTipo() . $this->getNivel();   
    }

    private function getCargo()
    {
        $cargos = [
            'Programador ',
            'Desenvolvedor ',
            'Analista ',
            'Tester '        
        ];

        return array_rand($cargos, 1);
    }

    private function getTipo()
    {
        $tipos = [
            'Backend ',
            'Frontend ',
        ];

        return array_rand($tipos, 1);
    }

    private function getNivel()
    {
        $nivel = [
            'Master',
            'Sênior',
            'Pleno',
            'Junior',
            'jr'
        ];
    }
}