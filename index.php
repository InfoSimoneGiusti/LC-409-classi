<?php

require __DIR__ . '/Models/User.php';
require __DIR__ . '/Models/Address.php';
require __DIR__ . '/Models/Math.php';




$indirizzi = [
    'Ciao',
    new Address('Via Roma 1', 'Pistoia', 51100),
    new Address('Piazza Novara 1', 'Pistoia', 51100)
];

$simone = new User('Simone', 'Giusti', $indirizzi);
var_dump($simone);

/*
$indirizzoMario = new Address('Via Milano 2', 'Pistoia', 51100);
$mario = new User("Mario", "Rossi", $indirizzoMario);
var_dump($mario);
echo '<br />';
echo $mario->getFullName();
*/

echo $simone->getFullName();
echo $simone->getFullAddress();




echo User::getProvaFunzioneStatica();
echo User::$nazionalita; 

echo Math::getRand();