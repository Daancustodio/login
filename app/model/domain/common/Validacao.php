<?php
namespace fanap\login\app\model\domain\common;
use Exception;

/**
 * Description of Validacao
 *
 * @author Daniel
 */
class Validacao {
	/**
	 * Lança Exceção caso o a quantidade de caracteres do compo informado,
	 * for menor que a quantidade mínima.
	 * @param string Strinc a ser validada
	 * @param int Ex: 3 
	 * @param string Ex: O Login
	 * @return Throw Exception
	 */
    public static function TamanhoMinimo($stringValor, $tamanhoMinimo, $nomeDoCampo) {
        if (strlen($stringValor) < $tamanhoMinimo) {
            throw new Exception("$nomeDoCampo deve conter no mínimo três caracteres.");
        }        
    }
}
