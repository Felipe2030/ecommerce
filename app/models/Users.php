<?php

namespace app\models;

use CoffeeCode\DataLayer\DataLayer;

class Users extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["nm_email", "profile_id", "nm_password"], "id", false);
    }

    public function findByEmail($email)
    {
        return $this->find("nm_email = :email", "email={$email}")->fetch();
    }

    public function verifyPassword($inputPassword, $storedPasswordHash): bool
    {
        return ($inputPassword === $storedPasswordHash);
    }
}
