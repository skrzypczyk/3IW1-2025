<?php
namespace App\Controllers;

use App\Helpers\Clean;

class Auth
{
    public function login(): void
    {
        $lastname = "SKrzypCZYk   ";
        $clean = new Clean();
        $lastname = $clean->lastname($lastname);

        echo "Auth login";
    }

    public function register(): void
    {
        echo "Auth register";
    }

    public function logout(): void
    {
        echo "Auth logout";
    }

}