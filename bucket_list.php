<?php
$hoeveel = readline("hoe veel dingen wil je toevoegen?");
$bucketlist= [];



if(is_numeric($hoeveel)){
    for($x=0;$x<$hoeveel;$x++){
        $wat = readline("Wat wil je toevoegen?");
        array_push($bucketlist, $wat);
    }
    echo("Op jouw bucketlist staan:").PHP_EOL;
    
    for($x=0;$x<$hoeveel;$x++){
        echo($bucketlist[$x]).PHP_EOL;
    }
}
else{
    echo($hoeveel."Is geen getal");
}
