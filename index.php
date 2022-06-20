<?php
    /*
    CONTEÚDO AULA 14
    - Laços de repetição com forEach
    */ 

    $array = [
        1 => 1,
        2 => 2,
        3 => 3
    ];

    foreach( $array as $key => $value ) {
        echo 'É ' .$value. ' ';
    }

?>