<?php

/**
 * Description of Validacao
 *
 * @author Daniel
 */
namespace fanap\login\app\model\domain\common;
use Exception;

class Validacao {
    public static function TamanhoMinimo($stringValor, $tamanhoMinimo, $nomeDoCampo) {
        if (strlen($stringValor) < $tamanhoMinimo) {
            throw new Exception("$nomeDoCampo deve conter no mínimo três caracteres");
        }        
    }
}
