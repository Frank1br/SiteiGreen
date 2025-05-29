<!-- redirecionando o botão -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
if (isset($_POST['login'])) {
    header("Location: login_admin.php");
    exit;
    }
}
?>


<link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <nav>
      <div class="container">
            <ul>
            </li>
            <li class="dropdown">
                <a href="#">Nossa Missão</a>

                <div class="dropdown-menu">
                    <a href="">Pesquisa</a>
                    <a href="blog.php">Blog</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="servico.php">Nossos Serviços</a>

                <div class="dropdown-menu">
                    <a href="">Calcule Pegada de Carbono</a>
                    <a href="">Coleta Seletiva</a>
                    <a href="">Valorização de Resíduos</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="sobre.php">Quem somos?</a>

                <div class="dropdown-menu">
                    <a href="">Contato</a>
                    <a href="sobre.php">Equipe</a>
                    <a href="">iGreen Social</a>
                </div>
            </li>
            </ul>
        </div>
        <div class="btn-login">
             <form method="POST">
                <input type="submit" name="login" value="Entrar">
            </form>
        </div>
    </nav>
      