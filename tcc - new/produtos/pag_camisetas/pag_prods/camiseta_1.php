<?php
session_start();
include("/downloads/htdocs/tcc - new/login/connect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazzy - Camisetas</title>
    <link rel="shortcut icon" href="Assets/img/logo-lazzy-icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="/tcc - new/produtos/pg_prod.css">
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
  <link rel="stylesheet" href="style.css">
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
    <div class="cont-principal">
    <section class="foto-roupa">
        <div class="container">
            <div class="links">
                <p><a href="">Home</a> / <a href="">Roupas</a> / <a href="">Camisetas</a> / <a href="">Nome da Camiseta</a></p>
            </div>
            <div class="carousel">
                <input type="radio" name="slides" checked="checked" id="slide-1">
                <input type="radio" name="slides" id="slide-2">

                <ul class="carousel__slides">
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213317-removebg-preview.png" alt="">
                            </div>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="/tcc - new/Assets/img/atras12.png" alt="">
                            </div>
                        </figure>
                    </li>
                
                </ul>    
                <ul class="carousel__thumbnails">
                    <li>
                        <label for="slide-1"><img src="/tcc - new/Assets/img/Captura_de_tela_2024-03-11_213317-removebg-preview.png" alt=""></label>
                    </li>
                    <li>
                        <label for="slide-2"><img src="/tcc - new/Assets/img/atras12.png" alt=""></label>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <section class="conteudo-roupa">
    <h2>Nome da camiseta</h2>
    <h1><strong>R$245,99</strong></h1>
    </section>
    </div>
   
    <script src="/tcc - new/produtos/pg_prods.js">

</script>
</body>
</html>