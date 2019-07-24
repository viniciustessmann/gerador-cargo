<?php 

namespace Gerador;

class GeradorCargo
{

    public function gerar()
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

        return $cargos[mt_rand(0, count($cargos) - 1)];
    }

    private function getTipo()
    {
        $tipos = [
            'Backend ',
            'Frontend '
        ];

        return $tipos[mt_rand(0, count($tipos) - 1)];
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

        return $nivel[mt_rand(0, count($nivel) - 1)];
    }
}