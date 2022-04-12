<?php

require_once __DIR__.'/../vendor/autoload.php';

use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true);

foreach($list as $userItem){
    var_dump($userItem->data()); //data serve para mostrar os atributos top
    foreach($userItem->addresses as $address){
        var_dump($address->data());
    }
}

