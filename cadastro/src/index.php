<?php
    include("conexao.php");

    $nome=$_POST['email'];
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO cadastro(email, usuario,  senha) 
    VALUES ('$email', '$usuario', '$senha')";
    
    if(mysqli_query($conexao, $sql)){
        echo "Cadastrado com sucesso! ";
    }
    else{
        echo "erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    
?>