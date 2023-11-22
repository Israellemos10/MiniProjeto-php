<?php
session_start();
require_once('connect.php');

if($_POST)
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nei = $_POST['nei'];

    try{
        $sql_select = 'SELECT * FROM users WHERE cpf = :cpf LIMIT 1';

        $resultado = $connect
            ->prepare($sql_select);

        $resultado->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $resultado->execute();

        if($resultado->rowCount() > 0){
            print_r([
                'status' => 'error',
                'data' => 'CPF já Cadastrado'
            ]);
        }else{
            $sql_insert = 'INSERT INTO users (nome, cpf, telefone, email, nei, senha) VALUES (:nome, :cpf, :telefone, :email, :nei, :senha)';

            $novo_usuario = [
                'nome' => $nome,
                'cpf' => $cpf,
                'telefone' => $telefone,
                'email' => $email,
                'nei' => $nei,
                'senha' => $cpf
            ];

            $insere = $connect->prepare($sql_insert);
            $insere->execute($novo_usuario);

            print_r([
                'status' => 'success',
                'data' => 'Usuário cadastrado com sucesso'
            ]);
        }

    } catch(PDOException $erro){
        echo $erro->getMessage();
    }
}
?>