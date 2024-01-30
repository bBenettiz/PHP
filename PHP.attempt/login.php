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
    <title>Login</title>
</head>

<body>
    <div class="container-login">
        <div class="area-login">
            <div class="logotipo-login">
                <img src="../images/logo.svg" alt="">
            </div>
            <form action="login.php" method="post">

                <label for="user">Usuário:</label>
                <input type="text" id="user" name="usuario" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <div class="forgot-password">
                    <a href="cadastro.php">Cadastrar</a>
                </div>
                <div class="forgot-password">
                    <a href="#">Esqueci minha senha</a>
                </div>
                <div class="buttom-form">
                    <button type="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Consulta SQL para verificar as credenciais
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = mysqli_query($conexao, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Login bem-sucedido
            $_SESSION['usuario'] = $usuario;
            header("Location: usuario.php"); // Redireciona para a página do painel
        } else {
            echo "<script>
        window.alert('Nome de usuário ou senha incorretos.');
        </script>";
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($conexao);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>


?>