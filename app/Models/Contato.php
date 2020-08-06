<?php
/*Classe do metodo que vai lista todos os registros do modelo */
namespace App\Models;

class Contato extends Model{
    protected $table = "contatos";
    protected $primary_key = "id";
}