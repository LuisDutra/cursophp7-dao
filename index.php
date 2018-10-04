<?php

require_once("config.php");
/* Carrega um usuario
$root = new Usuario();
$root->loadById(7);
echo $root;*/

/* Carrega uma lista de usuario
$lista = Usuario::getList();
echo json_encode($lista);*/

/* Carrega uma lista de usuarios usando o login 
$search = Usuario::search("s");
echo json_encode($search);*/

// Carrega um usuario usando o login e a senha 
$usuario = new Usuario();
$usuario->login("Luis","987654321");

echo $usuario;