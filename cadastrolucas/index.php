<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastramentoPHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&display=swap" rel="stylesheet">
</head>
<body>

<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastramentopp";

//criar a conexão//

$conn = new mysqli( $servername, $username, $password, $dbname);
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuariospp (nome, amail, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE){
        echo "Novo registro criado com sucesso";
    }
        else{
            echo "Erro:" . $sql . "<br>" . $conn->error;
        }
    }
$conn->close();


?>


<div class="ab">

<h1>RREGISTRO DE USUARIO</h1>

<form action="" method="post">

Nome: <input type="text" name="nome" id="" required autocomplete="off">
E-mail: <input type="email" name="email" id="" required autocomplete="off">
Senha: <input type="password" name="senha"id="" required>


<label for="nome" name="nome"></label>





<input type="submit" value="Cadastrar">

</div>


<h2>sou programador do IOS</h2>

<footer>Desenvolvido por: Lucas 06/06/2024</footer>


</form>
    
</body>
</html>