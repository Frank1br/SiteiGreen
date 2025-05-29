<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/blog.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="container my-5">
    <div class="row">
    <!-- POSTAGENS  -->
        <div class="col-md-8">
            <div class="post mb-4">
                <h2 class="text-success">Blog</h2>
                       <span class="data-post">27 de Maio de 2025</span>
                <img src="img/img_iGreen.jpg" class="img-fluid rounded" alt="Imagem do post">
                <p>A iGreen é uma empresa especializada em oferecer serviços para o gerenciamento de resíduos sólidos
                    de forma sustentável e econômica. Nosso objetivo principal é ajudar as empresas a lidar com seus
                    resíduos de maneira eficiente, reduzindo custos e impactos ambientais. Nós acreditamos que os resíduos
                    podem ser vistos como recursos valiosos, e é por isso que trabalhamos com o conceito de economia circular.
                </p> 
                <a href="#">Leia Mais...</a>
            </div>
        </div>
    <!-- BARRA LATERAL -->
        <div class="col-md-4">
            <div class="conteudo-lateral">
                <div class="lateral p-3  text-white rounded" style="background-color: #3b6d00;">
                <h3>DESTAQUE</h3>
                <div class="post-destaque">
                    <h4>titulo post</h4>
                    <p>A iGreen é uma empresa especializada em oferecer serviços para o gerenciamento de resíduos sólidos...
                </p> 
                <a href="#">Leia Mais</a>
                </div>
                <div class="post-destaque">
                    <h4>titulo post</h4>
                    <p>A iGreen é uma empresa especializada em oferecer serviços para o gerenciamento de resíduos sólidos...
                </p> 
                <a href="#">Leia Mais</a>
                </div>
                <div class="post-destaque">
                    <h4>titulo post</h4>
                    <p>A iGreen é uma empresa especializada em oferecer serviços para o gerenciamento de resíduos sólidos...
                </p> 
                </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
