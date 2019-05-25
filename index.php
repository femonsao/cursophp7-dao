<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(4);
//echo $root;


//Carrega uma lista de usuários 
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login 
//$search = Usuario::search("c");
//echo json_encode($search);

//Carrega UmUsuario usando o login e a senha 
//$usuario = new Usuario();
///$usuario->login("jose","1234567890");

//echo $usuario;

/*
//Criando um novo usuario 

$aluno = new Usuario("aluno","acrro123");


$aluno->insert();

echo $aluno;
*/


//alterar um ususario
/*
$usuario = new Usuario();

$usuario->loadById(12);

$usuario->update("natalia", "649731");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(14);

$usuario->delete();

echo $usuario;

?>