<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/Cadastro.css">
</head>
<body>
    <div class="container">
        <div class="photo"></div>
        <div class="form">
          <div class="logo">
            <img src="./Img/logo-vitoria.png" alt="Logo">
            <h1 class="logo h1">Vitória Esporte Clube</h1>
          </div>

          <p>Preencha os Campos Para Realizar o Cadastro</p>

          <form action="Cadastrar.php" method="POST">
          <input class="input" type="text" name="Nome" placeholder="Nome">
          <input class="input" type="text" name="Sexo" placeholder="Sexo">
          <input class="input" type="email" name="email" placeholder="E-mail">
          <input class="input" type="password" name="password" placeholder="Senha">
          <button class="button register" type="submit">Cadastrar</button>

          
          <a href="../Login/Login.html" class="a1"> Ir para Minha Conta</a>

          </form>
          
        </div>
      </div>

</body>
</html>