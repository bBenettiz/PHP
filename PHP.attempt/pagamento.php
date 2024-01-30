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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logo-2.svg" type="image/x-icon">
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <title>Pagamento</title>
</head>

<body>
    <header class="header-pagamentos">
        <div class="container-pagamentos">
            <div class="logo-pagamentos">
                <img src="../images/logo-2.svg" alt="">
            </div>
            <div class="area-info-pagamento">
                <div class="desc-pagamentos">Seja Membro</div>
                <div class="valor-pagamentos">R$49,99</div>
            </div>
        </div>
    </header>

    <!-- <section class="pagamentos">
        <div class="container-pagamentos">
            <form action="" class="dados">
                <label for="">Nome Completo</label>
                <input type="text">
                <label for="">Seu Email</label>
                <input type="email" name="" id="">
                <label for="">Confirme seu Email</label>
                <input type="email">
                <label for="">CPF</label>
                <input type="text" placeholder="000.000.000-00">
            </form>
        </div>
    </section> -->

    <section class="pagamentos" id="pg">
        <div class="container-pagamentos">
            <div class="container-forma-pagamento">
                <div class="box-forma-pagamento">
                    <div class="forma-pagamento">
                        <a href="#" onclick="toggleFormulario('cartao-credito')">Cartão de Crédito</a>
                        <a href="#" onclick="toggleFormulario('cartao-debito')">Cartão de Débito</a>
                        <a href="#" onclick="toggleFormulario('pix-section')">Pix</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pagamentos">
        <div class="container-pagamentos">
            <form action="pagamento.php" method="post">
                <div id="cartao-credito" class="hidden">
                    <div class="campos-cartao">
                        <label for="nome-cartao">Nome do Cartão</label>
                        <input type="text" id="nome-cartao" name="nomeC">

                        <label for="nome-titular">Nome do Titular</label>
                        <input type="text" id="nome-titular" name="nomeT">

                        <label for="mes-ano">Mês/Ano</label>
                        <input type="text" id="mes-ano" name="venc">

                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv">

                        <label for="parcelas">Selecione o Número de Parcelas</label>
                        <select onclick="Values()" id="parcelas" name="parcelas">
                            <option value="1">1x de R$ 49,99</option>
                            <option value="2">2x de R$ 24,99</option>
                            <option value="3">3x de R$ 16,66</option>
                        </select>
                    </div>

                    <section class="pagamentos">
                        <div class="container-pagamentos">
                            <div class="botao-compra">
                                <button type="submit" id="enviar" name="submit">Enviar</button>
                            </div>
                        </div>
                    </section>

                </div>
            </form>

            <form action="pagamento.php" method="post">
                <div id="cartao-debito" class="hidden">
                    <div class="campos-cartao">
                        <label for="nome-cartao-debito">Número do Cartão</label>
                        <input type="text" id="nome-cartao-debito" name="nomeCD">

                        <label for="nome-titular-debito">Nome do Titular </label>
                        <input type="text" id="nome-titular-debito" name="nomeTD">

                        <label for="mes-ano-debito">Mês/Ano</label>
                        <input type="text" id="mes-ano-debito" name="vencD">

                        <label for="cvv-debito">CVV</label>
                        <input type="text" id="cvv-debito" name="cvvD">
                    </div>
                    <section class="pagamentos">
                        <div class="container-pagamentos">
                            <div class="botao-compra">
                                <button type="submit" id="enviar" name="submit">Enviar</button>
                            </div>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </section>



    <section class="pagamentos">
        <div class="container-pagamentos">
            <div id="pix-section" class="hidden">
                <h1>Escaneie seu Qr Code Pix</h1>
                <img id="pix-qrcode" src="" alt="QR Code Pix">
            </div>
        </div>
    </section>

    <section class="pagamentos">
        <div class="container-pagamentos">
            <div class="compra-final">
                <div class="detalhes-compra">Detalhes da compra</div>
                <hr>
                <div class="container-compra-final">
                    <div class="assinatura">Assinatura membro NutriPlus</div>
                    <div class="valor">R$ 49,99</div>
                </div>

                <div class="container-compra-final">
                    <div class="total">Total</div>
                    <div class="valor-total">R$ 49,99</div>
                </div>

            </div>
        </div>
    </section>





    <script>
        // function values(){
        //     var Par =document.getElementById(parcelas);

        // }

        function toggleFormulario(formularioId) {
            var formularioDiv = document.getElementById(formularioId);
            formularioDiv.classList.toggle('hidden');


            // Adicione a lógica para mostrar o QR code quando a opção "Pix" for clicada
            if (formularioId === 'pix-section') {
                var pixQRCode = document.getElementById('pix-qrcode');
                if (!formularioDiv.classList.contains('hidden')) {
                    // Simule a geração do QR code (substitua por sua lógica real)
                    var pixURL = "https://exemplo.com/pix"; // Substitua pela URL real do Pix
                    pixQRCode.src = "https://api.qrserver.com/v1/create-qr-code/?data=" + encodeURIComponent(pixURL);
                }
            }
        }
    </script>

    <style>
        button {
            background-color: #5ECB79;
            width: 1100px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        button:hover {
        background-color: #307f44;
        cursor: pointer;
        }
    </style>

</body>

</html>



<?php
    if (isset($_POST["submit"])) {

        $nomeC = $_POST['nomeC'];
        $nomeT = $_POST['nomeT'];
        $venc = $_POST['venc'];
        $cvv = $_POST['cvv'];

        $result = mysqli_query($conexao, "INSERT INTO cartaoc(nomeC,nomeT, venc, cvv) VALUES ('$nomeC', '$nomeT',' $venc', '$cvv')");
    } else if (isset($_POST["submit2"])) {

        $nomeCD = $_POST['nomeCD'];
        $nomeTD = $_POST['nomeTD'];
        $vencD = $_POST['vencD'];
        $cvvD = $_POST['cvvD'];

        $result = mysqli_query($conexao, "INSERT INTO cartaoD(nomeCD, nomeTD, vencD, cvvD) VALUES ('$nomeCD', '$nomeTD',' $vencD', '$cvvD')");
    }

    ?>