<?php


use App\one\one;
use App\two\two;

require_once __DIR__ . '/vendor/autoload.php';

//Cat

$cat = new one();
$cat->setOwner('Kirill');
$cat->setLegs(900);
$cat->setAge(1);

$cat->render([
		'name' => $cat->name,
		'legs' => $cat->getLegs(),
		'owner' => $cat->getOwner(),
		'age' => $cat->getAge(),
		'weight' => $cat->weight(999),
		'data' =>$cat->data()
]);
dump($cat);
////
echo '--------------------------<br>';
///

//Fish

$fish = new two();
$name = $fish->name = 'РЫБКА';
$weight = $fish->weight(111);

$fish->render([
		'name' => $fish->tolower($name),
		'legs' => 'no lags',
		'owner' => $fish->getOwner()
]);


