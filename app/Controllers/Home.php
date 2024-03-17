<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function valid()
    {
        $userModel = new UserModel();

        $existingUser = $userModel->where('name', $_POST['name'])->first();
        if ($existingUser !== null) {
            echo "Este usuário já está registrado";
            header("Refresh: 3; URL=/");
        } else {
            $userModel->save($_POST);
            echo "Usuário registrado com sucesso";
            header("Refresh: 3; URL=/");
            exit();
        }
    }

}
