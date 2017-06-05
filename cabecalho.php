<!DOCTYPE html>
<?php
    require_once "Pessoa.php";
    $clientes = array(new Pessoa("Fabio","123456789","Rua X, 10"),new Pessoa("Jose","786423165","Rua Y, 20"), new Pessoa("Elaine","451789245","Rua X, 10"),
        new Pessoa("Christopher","897613254","Rua A, 18"), new Pessoa("Elias","894516754","Rua F, 156"), new Pessoa("Xilovaldo","651497856","Rua H, 8"),
        new Pessoa("Marcella","123459746","Rua F, 156"), new Pessoa("Melisandra","004879542","Rua X, 10"),new Pessoa("Antonio","78945613x","Rua T, 789"),
        new Pessoa("Erick","782364722","Rua A, 18"));
?>
<html>
    <head>
        <title>Projeto PHP - Tabela de Clientes</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/estilo.css"
    </head>
    <body>

