<?php

/*
*
* @author Rafael Amorim
* @link http://www.rafaelamorim.com.br
*
*/

function sorteioAmigoSecreto(array $listaAmigos) {
    
    $listaAleatoria = $listaAmigos;
    
    $saida = array();
    
    shuffle($listaAleatoria);
    
    for($i=0;$i<count($listaAmigos);$i++){
        
        if($listaAmigos[$i]==$listaAleatoria[count($listaAleatoria)-1]){
            //2 nomes iguais. Fazendo novo sorteio
            $saida = array();
            $i=0; 
            $listaAleatoria = $listaAmigos;
            shuffle($listaAleatoria);
        } 
        array_push($saida, array($listaAmigos[$i], $listaAleatoria[count($listaAleatoria)-1]));
        unset($listaAleatoria[count($listaAleatoria)-1]);
    }
    
    return $saida;

}

?>
