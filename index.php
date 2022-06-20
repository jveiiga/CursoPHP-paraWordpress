<?php
    /*
    CONTEÚDO AULA 13
    - Laços de repetição com for 
    */ 

    for( $i = 1; $i < 11; $i++ ) {
        if( $i == 2) {
            continue; //Elimina da contagem o elemento selecionado
        } else if( $i == 9 ) {
            break; //Para o processo no elemento selecionado
        }
        echo $i;
    }

?>