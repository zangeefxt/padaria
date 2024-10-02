<?php
    require 'Banco.php';
    require 'Cliente.php';

    $banco = new Banco();
    $conexao = $banco->getConexao();

    $cliente = new Cliente($conexao);
    $cliente->setNome($_POST['nome']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->setEmail($_POST['email']);
    $cliente->setCpf($_POST['cpf']);

        if ($cliente->create()) {
            echo "Cliente cadastrado com sucesso!";
            header("Refresh:3;url=form_cadastroCliente.php");
        }else {
            echo "Erro ao cadastrar o cliente!";
        }