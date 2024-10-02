<?php
    require 'Banco.php';
    require 'Cliente.php';

$banco = new Banco();
$conexao = $banco->getConexao();

$cliente = new Cliente($conexao);
$stmt = $cliente->read($conexao);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);