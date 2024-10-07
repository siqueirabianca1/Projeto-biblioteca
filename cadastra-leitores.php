<?php
include "config.php";
if (!$conn){
die ("Falha na conexão {mysqli_connect_error()}");

} 
//receber os dados do formulário
$nome = '';
$dtnasc = '';
$celular = '';
$email = '';
$ra = '';
$endereco = '';
$num_end = ''; 
$bairro = '';
$cidade = '';

// cria variável para inserir o registro
$sql = ''; 