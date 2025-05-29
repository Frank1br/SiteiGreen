

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>iGreen</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="assets/css/index.css" />
  <script src="js/index.js" defer></script>
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <!-- Carousel -->
  <div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="img/img_slide1.jpg" class="d-block w-100" alt="img">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="img/img_slide2.jpg" class="d-block w-100" alt="img">
      </div>
      <div class="carousel-item">
        <img src="img/img_slide3.jpg" class="d-block w-100" alt="img">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
  <!-- /Carousel -->

  <div class="container my-5">
    <h2 class="text-success">O que é a iGreen?</h2>
    <div class="row align-items-center">
      <div class="img col-md-6">
        <img src="img/img_iGreen.jpg" class="img-fluid rounded" alt="imgiGreen" >
      </div>
      <div class="col-md-6">
        <p>A iGreen é uma empresa especializada em oferecer serviços para o gerenciamento de resíduos sólidos
            de forma sustentável e econômica. Nosso objetivo principal é ajudar as empresas a lidar com seus
            resíduos de maneira eficiente, reduzindo custos e impactos ambientais. Nós acreditamos que os resíduos
            podem ser vistos como recursos valiosos, e é por isso que trabalhamos com o conceito de economia circular.
        </p>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <h2 class="text-success">Serviços</h2>
    <div class="row text-center ">
      <div class="col-md-4">
        <div class="servico ">
          <a href="servico.php" target="_blank">
          <img src="img/img_pegada_servico.jpg" class="img-fluid rounded mb-2 pulse-hover" alt="Reciclagem">
          </a>
          <p>Calcule pegada de carbono</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="servico text-center">
          <a href="servico.php" target="_blank">
          <img src="img/img_coleta_servico.jpg" class="img-fluid rounded mb-2 pulse-hover" alt="Coleta">
          </a>
          <p>Coleta Seletiva</p>       
        </div>
      </div>
      <div class="col-md-4">
        <div class="servico">
          <a href="servico.php" target="_blank">
          <img src="img/img_residuos_servico.jpg" class="img-fluid rounded mb-2 pulse-hover" alt="Resíduos">
          </a>
          <p>Valorização de Resíduos</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5">
    <h2 class="text-success">Blog</h2>
    <div class="row text-center">
      <div class="col-md-6">
        <div class="blog">
          <img src="https://cdn.awsli.com.br/2500x2500/549/549871/produto/29108392/60cdfb3799.jpg" class="img-fluid rounded mb-2" alt="Carbono">
          <a href="#"  class="link-dark">Título Linkado</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="blog">
          <img src="https://cdn.awsli.com.br/2500x2500/549/549871/produto/29108392/60cdfb3799.jpg" class="img-fluid rounded mb-2" alt="Coleta">
          <a href="#"  class="link-dark">Título Linkado</a>
        </div>
      </div>
    </div>
  </div>

  <section class="ajude-nos-section py-5 text-white" style="background-color: #53993e;">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
      <div class="texto-ajude" style="max-width: 400px;">
        <p>"Pequenas atitudes constroem grandes transformações. Escolha ajudar e plante esperança onde falta chão."</p>
        <button class="btn btn-light text-success">Ajude-nos</button><br>
        <small>Apoie o iGreen Social</small>
      </div>
      <div class="img-ajude mt-3 mt-md-0">
        <img src="img/img_ajude.jpg" class="img-fluid rounded " alt="img">
      </div>
    </div>
  </section>

  <section class="material-section py-5 bg-light">
    <div class="container d-flex flex-wrap justify-content-between gap-4">
      <div class="material-imagem col-md-6">
        <img src="https://cdn.awsli.com.br/2500x2500/549/549871/produto/29108392/60cdfb3799.jpg" class="img-fluid rounded" alt="img">
      </div>
      
      <div class="formulario  text-white p-4 rounded col-md-4">
        <h6>Baixe nosso e-book</h6>
        <form>
          <input type="text" class="form-control mb-2" placeholder="Nome" required>
          <input type="email" class="form-control mb-2" placeholder="E-mail" required>
          <input type="text" class="form-control mb-2" placeholder="Telefone">
          <button type="submit" class="btn btn-light text-success w-100 fw-bold">Adquirir o material</button>
        </form>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

</body>
</html>
