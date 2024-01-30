<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuário</title>
    <link rel="stylesheet" href="usuario.css">
</head>

<body>
    <header>
        <nav>
            <h1>Perfil de Usuário</h1>
            <ul>
                <li><a href="entrada.html">Início</a></li>
                <li><a href="tarefas.html">Tarefas</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="entrada.html">Sair</a></li>
            </ul>
        </nav>
    </header>

    <?php 

    $n = $_POST["nome"];
    $e = $_POST["email"];
    
    echo 
    "
    
    <section class=container>
    <h2>Informações do Perfil</h2>

    <div class=our_team>
        <div class=team_member>
            <div class=member_img>
                <img class=img-1 src=user.png alt=our_team>
                <div class=social_media>
                    <a class=instagram item><img src=edit.png><i
                            class=fab fa-instagram></i></a>
                </div>
            </div>
            <h3>$n</h3>
            <p>$e</p>
        </div>
    </div>
</section>
    
    "

    ?>

    <section class="container">
        <h2>Tarefas Pendentes </h2>
        <h4><a href="tarefas.html">Adicionar Tarefas</a></h4>
        <ul>
            <li>
                <span class="task-text">Tarefa 1</span>
                <button class="delete-button">Excluir</button>
            </li>
            <li>
                <span class="task-text">Tarefa 2</span>
                <button class="delete-button">Excluir</button>
            </li>
            <!-- Adicione mais tarefas aqui -->
        </ul>
    </section>

    <footer>
        <p>&copy; 2023 Gerenciador de Tarefas</p>
    </footer>
</body>

</html>