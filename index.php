<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select('SELECT * FROM tb_usuarios');

echo json_encode($usuarios);
*/


//Carrega um usuário
/*
$root = new Usuario();

$root->loadById(7);

echo $root;
*/


/*Carrega uma lista de usuario
$lista = Usuario::getList();

echo json_encode($lista);
*/


/*Carrega uma lista de usuario buscando pelo login
$search = Usuario::search("Ag");

echo json_encode($search);
*/


//Carrega um usuario usando o login e a senha

/*
$usuario = new Usuario();
$usuario->login(
    "Agnaldo",
    "123453"
);

echo $usuario;
*/


//Cadastra novo usuario
/*
$aluno = new Usuario("Agnaldo", "5544690");
$aluno->insert();
echo $aluno;
*/


//Update Usuario
/*
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("Professor", "Aga");
echo $usuario;
*/


$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
?>