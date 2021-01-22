<?php
//recebendo dados do formulário e guardando em variáveis
$nome = $_POST['nome'];
$data = $_POST['data'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$genero = $_POST['sexo'];
$msg = $_POST['msg'];
//testando dados no formulário
// conexão com o banco de dados
$host = 'localhost'; // variável com nome do servidor
$user = 'root'; //variável com o nome do usuário do banco
$pass = ''; // variável com a senha do banco
$banco = 'formulario'; //variável com o nome do banco
$obj_mysqli = new mysqli("127.0.0.1", "root", "", "formulario");
if ($obj_mysqli->connect_errno) {
    echo "Ocorreu um erro na conexão com o banco de dados.";
}
$conexao = mysqli_connect("127.0.0.1", "root", "", "formulario");
if (!$conexao) {
    die("Ocorreu um erro na conexão com o banco de dados.");
}

// inserção dos dados no banco de dados

mysqli_query($conexao, "INSERT INTO contato (nome,data,cidade,estado,email,genero,mensagem)values ('$nome','$data','$cidade','$estado','$email','$genero','$msg')");


mysqli_close($conexao);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortout icon" href="favicon.ico.png"/>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="shortout icon" href="#"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">        
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="mensagemtrabalhe"
        <p>Mensagem enviada, obrigado por entrar em contato conosco!</p>
        </div>
           
        <?php      
        include_once './rodape.php';
        ?>
    </body>
</html>




