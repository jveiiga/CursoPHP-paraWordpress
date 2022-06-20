<?php
    /*
    CONTEÚDO AULA 10
    - Operadores de comparaçã0
        AND e OR ou && e ||
    */ 

    $nome1 = 'Jeferson';
    $nome2 = 'jeferson';
    $nome3 = 'Jeferson jeferson';

    var_dump( $nome1 && $nome2 === $nome3 );
    var_dump( $nome1 || $nome2 === $nome3 );

    var_dump( $nome1 AND $nome2 === $nome3 );
    var_dump( $nome1 OR $nome2 === $nome3 );
?>