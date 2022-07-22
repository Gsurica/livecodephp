<?php 

$PERSONS_ARRAY = [];

function registerPerson ($firstName, $lastName) {

  global $PERSONS_ARRAY;

  if (!is_string($firstName) && !is_string($lastName)) {

    echo "Um dado inválido foi inserido! (primeiro nome ou segundo nome), Por favor, considere consertar";

    return [];
  } 

  $fullName = $firstName . " " . $lastName;

  array_push($PERSONS_ARRAY, $fullName);

  return $PERSONS_ARRAY;

}

function personList ($arrayPersons) {

  if (count($arrayPersons) === 0) {

    echo "Pessoas não registradas, por favor, registre alguém para continuar! :)";

    return 0;

  }

  for ($i = 0; $i < count($arrayPersons); $i++) {

    $element = $arrayPersons[$i];

    echo $element;
    echo "<br>";
  }

}

personList($PERSONS_ARRAY);



