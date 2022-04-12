<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer{
    public function __construct(){
        parent::__construct("users", ["first_name", "last_name"]); //nome tabela, valores not null, chave primaria que não é A.I, se tem timestamp / timestamp->marca a data de quando um comando sql é executado
    }
    public function addresses(){
        return (new Address())->find("user_id = :uid", ":uid={$this->id}")->fetch(true);
    }
}