<?php 

    $zmienna = $_GET['mojstan'];

    if($zmienna==1){
        echo("zmienna: ". $zmienna);
    }else if($zmienna == 2){
        echo("zmienna inna: ". $zmienna);
    }else{
        echo("brak danych do pobrania");
    };

?>
