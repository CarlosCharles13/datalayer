<?php

require_once __DIR__."/../vendor/autoload.php";

use Source\Models\Address;
use Source\Models\User;

$user = (new User())->findById(29);
if($user){
    $address = (new Address())->find("user_id = {$user->id}")->fetch(false);
    $address->destroy();
    $user->destroy();
} else {
    var_dump($user);
}


?>