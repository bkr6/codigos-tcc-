<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazzy - Login</title>
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
      <div class="container" id="login">
        <h1 class="form-title">Login</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recuperar senha</a>
          </p>
         <input type="submit" class="btn" value="Login" name="login">
        </form>
        <div class="links">
          <p>Não contem uma conta?</p>
          <button id="signUpButton"><a href="index.php">Cadastre-se</a></button>
        </div>
      </div>
</div>
      <script src="script.js"></script>
</body>
</html>