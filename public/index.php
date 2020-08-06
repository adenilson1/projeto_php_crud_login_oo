<?php
require '../path.php';

use Slim\App;
use App\Controllers\ContatosController;
Use App\Controllers\UsuariosController;
Use App\Controllers\AuthController;

$app = new App;
$app->get('/', ContatosController::class . ':index');
$app->get('/contatos', ContatosController::class . ':index');
$app->get('/contatos/home', ContatosController::class . ':home');
$app->get('/contatos/info', ContatosController::class . ':info');
$app->get('/contatos/adicionar', ContatosController::class . ':adicionar');
$app->post('/contatos', ContatosController::class . ':salvar');
$app->get('/contatos/editar/{id}', ContatosController::class . ':editar');
$app->put('/contatos/{id}', ContatosController::class . ':atualizar');
$app->delete('/contatos/deletar/{id}', ContatosController::class . ':deletar');



$app->get('/usuarios', UsuariosController::class . ':index');
$app->get('/usuarios/detalhe/{id}', UsuariosController::class . ':detalhe');
$app->get('/usuarios/adicionar', UsuariosController::class . ':adicionar');
$app->post('/usuarios', UsuariosController::class . ':salvar');
$app->get('/usuarios/editar/{id}', UsuariosController::class . ':editar');
$app->put('/usuarios/{id}', UsuariosController::class . ':atualizar');
$app->delete('/usuarios/deletar/{id}', UsuariosController::class . ':deletar');


$app->get('/login', AuthController::class . ':index');
$app->post('/login', AuthController::class . ':entrar');
$app->get('/logout', AuthController::class . ':sair');

$app->run();

