<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazzy - Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="Assets/img/logo-lazzy-icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="cabecalho">
        <div class="centro">
            <div class="logo">
                <a href="/tcc - new/index_teste.php"><img src="logo lazzy.png" alt=""></a>
            </div>
        </div>
    </header>
<div class="salvadora">
    <div class="container">
      <h1 class="form-title">Cadastro</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="name" id="name" placeholder="name" required>
           <label for="fname">Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" name="telefone" id="telefone" placeholder="" required>
            <label for="telefone">Telefone</label>
        </div>
        <div class="input-group">
            <i class="fa-solid fa-location-dot"></i>
            <input type="text" name="endereco" id="endereco" placeholder="Endereço" required>
            <label for="endereco">Endereço</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Cadastrar" name="cadastro">
      </form>
      <div class="links">
        <p>Já contem uma conta?</p>
        <button> <a href="index2.php">Login</a></button>
      </div>
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>
