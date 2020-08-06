<?php
/*Classe do metodo que vai lista todos os registros do modelo */
namespace App\Models;

class Auth extends Model{
    protected $table = "usuarios";
    protected $primary_key = "id";

    static public function login(string $email, string $senha):bool{
        $modelo = new static;
        $usuarios = $modelo::all();
        foreach($usuarios as $key=>$value){
            if($value['email'] == $email && $value['senha'] ==  ($senha)){

                session_start();
                $_SESSION['id'] = $value['id'];
                $_SESSION['nome'] = $value['nome'];
                $_SESSION['email'] = $value['email'];
                return true;
            }
        }
        return false;
    }
}