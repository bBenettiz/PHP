<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '12345678';
$dbName = 'nutri';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_error) {
//     echo "erro";
// } else {
//     echo "Conectado";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logo-2.svg" type="image/x-icon">
    <title>Cadastro</title>
</head>

<body>
    <div class="container-login">
        <div class="area-login">
            <div class="logotipo-login">
                <img src="../images/logo.svg" alt="">
            </div>
            <form method="post" action="cadastro.php">

                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="user">Usuário:</label>
                <input type="text" id="user" name="usuario" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <label for="senhaConf">Confimar senha:</label>
                <input type="password" id="senha" name="senhaC" required>

                <div class="buttom-form">
                    <button type="submit" name="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<?php

if (isset($_POST["submit"])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senhaC = $_POST['senhaC'];

    if ($senha == $senhaC) {
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, usuario, senha, email) VALUES ('$nome', '$usuario', '$senha', '$email')");

        header("Location: /NutriPlus-main/");
        exit();

    } else {
        echo "<script>
        window.alert('As senhas devem ser iguais');
        </script>";
    }
}


?>