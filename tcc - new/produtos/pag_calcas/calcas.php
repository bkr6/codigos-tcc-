<?php
session_start();
include("/downloads/htdocs/tcc - new/login/connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazzy - Shorts</title>
    <link rel="shortcut icon" href="Assets/img/logo-lazzy-icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="/tcc - new/produtos/pag_prods.css">
</head>
<body>
<header class="cabecalho">
        <div class="esquerda">
                <tr class="barras">
                    <aside id="menuoculto" class="menuoculto">
                        <span href="" class="btn-fechar" onclick="fechar()" style="margin: 10px; cursor: pointer;">&times;
                        </span>
                        <a href="/tcc - new/index_teste.php">Home</a>
                        <a href="/tcc - new/produtos/pag_camisetas/camisetas.php">Camiseta</a>
                        <a href="/tcc - new/produtos/pag_blusas/blusa.php">Blusa</a>
                        <a href="/tcc - new/produtos/pag_shorts/shorts.php">Shorts</a>
                        <a href="/tcc - new/produtos/pag_calcas/calcas.php">Calças</a>
                        <a href="/tcc - new/produtos/pag_acessorios/acessorios.php">Acessórios</a>
                    </aside>
                    <div class="principal" id="principal">
                        <span style="font-size: 30px;cursor: pointer;" onclick="abrir()">&#9776;</span>
                    </div>
                </tr>
                <tr class="login">
                    <td>
                        <div class="img-log">
                            <img src="/tcc - new/Assets/img/icon login.png" alt="">
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">
                            <?php 
                                    if(isset($_SESSION['email'])){
                                        $email=$_SESSION['email'];
                                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                                        while($row=mysqli_fetch_array($query)){
                                            $nome = $row['name'];
                                            $nome2 = strstr($nome, " ", true);
                                            echo $nome2;
                                        }
                                    } else {
                                        echo 'Conta';
                                    }
                                ?>
                            </button>
                            <div class="dropdown-content">
                              <?php 
                                    if(isset($_SESSION['email'])){
                                        $email=$_SESSION['email'];
                                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                                        while($row=mysqli_fetch_array($query)){
                                            $nome = $row['name'];
                                            echo '<a href=""> Sua conta </a>';
                                        }
                                    } else {
                                        echo '<a href="/tcc - new/login/index.php"> Cadastrar </a>';
                                    }
                                ?>
                                <?php 
                                    if(isset($_SESSION['email'])){
                                        $email=$_SESSION['email'];
                                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                                        while($row=mysqli_fetch_array($query)){
                                            $nome = $row['name'];
                                            echo '<a href="/tcc - new/login/logout.php">Sair</a>';
                                        }
                                    } else {
                                        echo '<a href="/tcc - new/login/index2.php">Entrar</a>';
                                    }
                                ?>
                            </div>
                          </div>
                    </td>
                </tr>
        </div>
        <div class="centro">
            <div class="logo">
                <a href="/tcc - new/index_teste.php"><img class="logo2" src="/tcc - new/Assets/img/logo lazzy.png" alt=""></a>
            </div>
        </div>
        <div class="log-lista-carrinho">
            <div class="carrinho_favoritos">
                <td class="img-log1 lista">
                    <button id="offcanvas" class="lista-desejo" style="border: none; background-color: white;"><a href=""><img src="/tcc - new/Assets/img/icon lista de desejos.png" alt=""></a></button>
                        <div id="desejos">0</div>
                </td>
                <td class="img-log1 carrinho">
                    <a href=""><img src="/tcc - new/Assets/img/icon carrinho.png" alt=""></a>
                    <div id="carrinho">0</div>
                </td>
            </div>
        </div>
    </header>
    <nav class="container-links">
        <div class="link-com-hover">
            <a href="/tcc - new/index_teste.php"><div><p>Home</p></div></a>
        </div>
        <div class="dropdown2">
            <button class="dropbtn2">Roupas</button>
                <div class="dropdown-content2">
                <a href="/tcc - new/produtos/pag_camisetas/camisetas.php">Camisetas</a>
                    <a href="/tcc - new/produtos/pag_blusas/blusa.php">Blusa</a>
                    <a href="/tcc - new/produtos/pag_calcas/calcas.php">Calças</a>
                    <a href="/tcc - new/produtos/pag_shorts/shorts.php">Shorts</a>
                </div>
        </div>
        <div class="link-com-hover">
            <a href="/tcc - new/pag_prod/acessorios.php"><div><p>Acessórios</p></div></a>
        </div>
    </nav>
    <div class="banner-camiseta">
        <img src="/tcc - new/Assets/img/LAZZY (2).png" alt="">
    </div>
    <div class="container-maisvendidos">
        <div class="produtos-mv">
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213234-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras4.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213254-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras3.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213305-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras2.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
        </div>
    </div>
    <div class="container-maisvendidos">
        <div class="produtos-mv">
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213234-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras4.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213254-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras3.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213305-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras2.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
        </div>
    </div>
    <div class="container-maisvendidos">
        <div class="produtos-mv">
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213234-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras4.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213254-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras3.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213305-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras2.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
        </div>
    </div>
    <div class="container-maisvendidos">
        <div class="produtos-mv">
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213234-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras4.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213254-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras3.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
            <div class="produto">
                <a href="">
                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213305-removebg-preview.png" alt="" class="img1">
                <img src="/tcc - new/Assets/img/atras2.png" alt="" class="img2">
                <h3>Camiseta Lazzy</h3>
                <h4>R$89,99</h4>
                <p>ou 3x de R$ 63,30 Sem juros</p>
            </a>
            </div>
        </div>
    </div>
    <footer>
        <div class="ft-conteudo">
            <div class="img-links">
                <img src="/tcc - new/Assets/img/logo lazzy branca.png" alt=""><br>
                <a href="">Quem somos</a><br>
                <a href="">Política de Privacidade</a><br>
                <a href="">Termos de uso</a><br>
                <a href="">Política de Trocas e Devoluções</a><br>
                <a href="">Politica de Entrega</a><br>
                <a href="">Formas de Pagamento</a>
            </div>
            <div class="contato">
                <h2>Fale Conosco</h2>
                <small>Telefone:</small>
                <p>(11) 2157-7899</p>
                <small>Horários de Funcionamento:</small>
                <p>Seg. a Sexta das 9h as 18h</p>
                <small>E-mail:</small>
                <p>contato@lazzycom</p>
            </div>
            <div class="selo">
                <div class="pagamento">
                    <h2>FORMA DE PAGAMENTO</h2>
                    <img src="/tcc - new/Assets/img/selos de pagamento.png" alt="">
                </div>
                <div class="seguranca">
                    <h2>COMPRE COM SEGURANÇA</h2>
                    <img src="/tcc - new/Assets/img/selos de segurança.png" alt="">
                </div>
            </div>
        </div>
        <div class="social">
            <div class="redes">
                <a href=""><img src="/tcc - new/Assets/img/ttwiter.png" alt=""></a>
                <a href=""><img src="/tcc - new/Assets/img/instagram.png" alt=""></a>
                <a href=""><img src="/tcc - new/Assets/img/Pinterest.png" alt=""></a>
                <a href=""><img class="cm4" src="/tcc - new/Assets/img/icone-tiktok.png" alt=""></a>
            </div>
        </div>
    </footer>
    

    <script src="/tcc - new/index_teste.js">

    </script>
</body>
</html>