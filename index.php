<?php

/*
*
* @author Rafael Amorim
* @link http://www.rafaelamorim.com.br
*
*/

require('functions.php');

$listaSorteio = sorteioAmigoSecreto(array("nome1", "nome2", "nome3", "nome4", "nome5","nome6", "nome7", "nome8", "nome9", "nome10"));

foreach ($listaSorteio as $s){
    echo $s[0] . " sorteou o amigo ". $s[1]."\n\r<br>";
}

?>
