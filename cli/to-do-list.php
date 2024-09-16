<?php
$vards = readline("Ievadi savu vardu: ");
echo "Tavs vārds ir $vards\n";

do {
    $x = readline("Ievadi skaitli vai N lai apstatos: ");

    if ($x === 'N') {
        echo "Iziet no cikla...\n";
        break;
    }

    $x = (int)$x;
    
    do {
        echo "sveiki: $x\n";
        $x++;
    } while ($x <= 5);

} while (true);

$ievade = readline("Ievadi komandu (start/stop/exit): ");

switch ($ievade) {
    case 'start':
        echo "Sistēma tiek palaista...\n";
        break;
    case 'stop':
        echo "Sistēma tiek aptureta...\n";
        break;
    case 'exit':
        echo "Programma tiek izslegta...\n";
        break;
    default:
        echo "error: $ievade\n";
        break;
}
