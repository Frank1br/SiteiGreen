<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
if (isset($_POST['inicio'])) {
    header("Location:/back-end/admin/login_admin.php.");
    exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login_cliente.css">
    <title>Login</title>
</head>

<body>
    <div class="container-login">
        <div class="img-box">
            <img src="img/login_img.jpg">
        </div>
        <div class="content-box">
            <div class="form-box">
                <h2>Login</h2>
                <form action="/back-end/admin/login_admin.php." method ="POST">

                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" placeholder="E-mail">
                    </div>

                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" placeholder="Senha">
                    </div>

                    <div class="remember">
                        <label>
                            <input type="checkbox"> Lembre-me
                        </label>
                    </div>
                    <div class="input-box">
                            <input type="submit" name="inicio" value="Entrar">
                    </div>
    
                    <div class="input-box">
                       <p>Não Tem Uma Conta? <a href="cadastro_admin.php">Cadastre-se</a></p>
                        <a href="#">Esqueceu a Senha?</a>
                    </div>
                </form>
                <?php if(isset($_GET['Email ou senha inválidos'])):?>
                    <p style="color:red;"><?php  echo htmlspecialchars($GET_['Email ou senha inválidos'])?></p>
                <?php endif; ?>
                <ul class="ul">
                    <li><img src="img/icon_google.png"></li>
                    <li><img src="img/icon_linkedin.png"></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>