<?php
/*Arquivo que controlar a entrad,saida e alteração de dados para o banco de dados. chamara o metodo 
correspondente ao modelo */

namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Models\Contato;


class ContatosController extends Controlle{

    public function __construct()
    {
        session_start();
        if(!isset($_SESSION['id'])){
            header("Location:/login");
            die();
        }
        
    }

   
    public function home(ServerRequestInterface $request, ResponseInterface $response){ // metodo principal, será ele solicitará a lista de dados
        
        
        return $this->view('contatos/home', $response);
    }

    public function info(ServerRequestInterface $request, ResponseInterface $response){ // metodo principal, será ele solicitará a lista de dados
        
        
        return $this->view('contatos/info', $response);
    }


    public function index(ServerRequestInterface $request, ResponseInterface $response){ // metodo principal, será ele solicitará a lista de dados

        $modelo = Contato::all();
        $this->modelo = $modelo;
        return $this->view('contatos/index', $response);
    }

 
     public function adicionar(ServerRequestInterface $request, ResponseInterface $response){
 
         return $this->view('contatos/create', $response);
     }
 
     public function salvar(ServerRequestInterface $request, ResponseInterface $response){
 
         $dados = $request->getParsedBody();
         $modelo = new Contato;
         $modelo->nome = $dados['nome'];
         $modelo->cargo = $dados['cargo'];
         $modelo->email = $dados['email'];
         $objModelo = $modelo->save();
 
        
         return $response->withRedirect('/contatos');
     }

     public function editar(ServerRequestInterface $request, ResponseInterface $response){

        
        $id = $request->getAttribute('id');
        $modelo = Contato::find($id);
        $this->modelo =$modelo;
         return $this->view('contatos/edit', $response);
     }
 
     public function atualizar(ServerRequestInterface $request, ResponseInterface $response){
 
         $dados = $request->getParsedBody();
         $id = $request->getAttribute('id');
         $modelo = Contato::find($id);
         //var_dump($modelo);exit;
         //$modelo = new Compra;
 
         $modelo->nome = $dados['nome'];
         $modelo->cargo = $dados['cargo'];
         $modelo->email = $dados['email'];
         $objModelo = $modelo->save();
         
         return $response->withRedirect('/contatos');
     }

     
    public function deletar(ServerRequestInterface $request, ResponseInterface $response){


        $id = $request->getAttribute('id');
        $modelo = Contato::find($id);
        $Ok = $modelo->delete();
        
        return $response->withRedirect('/contatos');
    }
        

}
