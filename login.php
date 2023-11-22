<?php
session_start();
require_once('connect.php');

if($_POST)
{
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    try{
        $sql = 'SELECT * FROM users WHERE cpf = :cpf AND senha = :senha LIMIT 1';

        $resultado = $connect
            ->prepare($sql);

        $resultado->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $resultado->bindParam(":senha", $senha, PDO::PARAM_STR);
        $resultado->execute();

        if($resultado->rowCount() > 0){
            foreach($resultado as $linha)
            {
                unset($linha['senha']);
                $_SESSION['user'] = $linha;

                print_r([
                    'status' => 'success',
                    'data' => 'Logado com sucesso',
                ]);
            }   
        }else{
            $_SESSION['alerta'] = 'CPF e/ou senha Incorreto(s).';

            print_r([
                'status' => 'error',
                'data' => 'CPF e/ou senha Incorreto(s).'
            ]);
        }

    } catch(PDOException $erro){
        echo $erro->getMessage();
    }

    header('Location:index.php');
    exit;
}
?>