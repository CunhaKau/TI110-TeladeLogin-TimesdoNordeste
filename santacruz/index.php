<?php
    session_start();
    include_once('models/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./CSS/cadastro.css" class="rel"> <!-- Link da folha de estilos da página de cadastro -->
    <link rel="stylesheet" href="./CSS/estrutura.css" class="rel"> <!-- Link da folha de estilos da estrutura geral das páginas web -->
</head>

<body>
    <main> <!-- Tag utilizada para definir onde se concentrará todo o conteúdo da página dentro do body -->
        <div class="estrutura"> <!-- Div criada para a organização de toda a estrutura da página -->
            <div class="cabecalho"> <!-- Div criada para a organização de todo o cabeçalho de cores e escudo utilizado no site -->
                <img id="escudo" src="./IMG/Logo.png" alt="Escudo"> <!-- Imagem do escudo do time -->
                <div class="cores"> <!-- Div criada para a organização das cores do time dentro da div cabeçalho -->
                    <div id="preto"></div> <!-- Div feita para criar uma linha de cor preta -->
                    <div id="branco"></div> <!-- Div feita para criar uma linha de cor branca -->
                    <div id="vermelho"></div> <!-- Div feita para criar uma linha de cor vermelha -->
                </div>
            </div>
            <h1 class="sub-title">Cadastre-se</h1> <!-- Título da página -->
            <p class="cc">Já possui uma conta? <a class="ancora" href="./login.html">Entrar</a></p> <!-- Parágrafo utilizado para guiar o usuário caso ele já possua uma conta -->
            <form action="./controllers/cadastrar.php" method="POST"> <!-- Tag utilizada para dar início ao formulário de cadastro -->
                <input class="a" type="text" placeholder="Nome" name="nome" required autofocus> <!-- Input utilizado no formulário para solicitar ao usuário que preencha com seu nome -->
                <input class="b" type="email" placeholder="E-mail" name="email" required> <!-- Input utilizado no formulário para solicitar ao usuário que preencha com seu e-mail -->
                <input class="c" id="senha" type="password" placeholder="Senha" name="senha" required> <!-- Input utilizado no formulário para solicitar ao usuário que preencha com sua senha -->
                <input class="d" id="senha2" type="password" placeholder="Confirme sua senha" name="senha2" required> <!-- Input utilizado no formulário para solicitar ao usuário que confirme a senha que ele preencheu anteriormente -->
                <button class="btn-cadastro"id="btn" type="submit" name="submit" onclick="validarSenha()">Cadastrar</button> <!-- Botão criado para que o usuário confirme seu cadastro -->
            </form>
        </div>
    </main>
    <footer>
        <div class="footer">
            <p class="p-footer">Design by Jefferson, Mateus e Rodrigo - 2024 &copy;</p> <!-- Footer com as informações de quem desenvolveu o site -->
        </div>
    </footer>
        <!-- Mensagens de alertas -->
                    <?php
                        if (isset($_SESSION['sucesso'])) 
                        {
                            echo '<input type="hidden" id="successo" value="' . $_SESSION['sucesso'] . '">';
                            unset($_SESSION['sucesso']); 
                        }
                        
                        if (isset($_SESSION['erro-email'])) 
                        {
                            echo '<input type="hidden" id="erro_email" value="' . $_SESSION['erro-email'] . '">';
                            unset($_SESSION['erro-email']); 
                        }

                        if (isset($_SESSION['erro-senha'])) 
                        {
                            echo '<input type="hidden" id="erro_senha" value="' . $_SESSION['erro-senha'] . '">';
                            unset($_SESSION['erro-senha']); 
                        }
                    ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
