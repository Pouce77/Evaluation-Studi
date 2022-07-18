  <!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Le site internet de l'association sportive du collège G. Politzer présente l'ensemble de ses activités sportives ainsi que son actualité.">
    <title>Association sportive du Collège G.Politzer</title>
    <!-- balise Bootstrap -->
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"  
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
          crossorigin="anonymous">
    <!-- Mon style -->
    <link rel="stylesheet" href="styles.css">
  <body>
    <header>
      <!-- Barre de navigation bootstrap -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo">
        <a href="index.php">
          <img class="logoimg" src="logoAS.png" alt="Logo de l'association">
        </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarNavDropdown" 
                aria-controls="navbarNavDropdown" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actualites.php">Acualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Pub Association sportive.pdf" target="_blank">Inscription</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>
    <div><h1>Association sportive du collège Georges Politzer</h1></div>
    <!-- Carousel présentant les éléments du site -->
    <div class="container carouselboxstyle">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 imgsizecarousel carouselborder" src="photocross.png" alt="Actualités">
              <div class="carousel-caption d-md-block">
                <h5>Actualités</h5>
                <p>Toutes les actualités de votre association sportive !</p>
                <button type="button" id="boutonActu" class="btn btn-primary">J'y vais !</button>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 imgsizecarousel carouselborder" src="assos-sportives.jpeg" alt="Activités sportives">
              <div class="carousel-caption d-md-block">
                <h5>Activités sportives</h5>
                <p>Toutes les activités sportives de votre association !</p>
                <button type="button" id="boutonActivites" class="btn btn-primary" onclick="location.href='#activitesSportives'">J'y vais !</button>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <!-- Les différentes cards bootstrap représentant les activités -->
    <div><h2 id="activitesSportives">Les activités sportives</h2></div>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <div class="card">
             <img class="card-img-top" src="basket.jpg" alt="Basket">
              <div class="card-body">
                <h5 class="card-title">Basket</h5>
                <p class="card-text">Venez pratiquer le basket ball de 12 ans à 15 ans</p>
              </div>
            </div>
        </div>
        <div class="col mb-4">
          <div class="card">
             <img class="card-img-top" src="handball.jpg" alt="Handball">
              <div class="card-body">
                <h5 class="card-title">Handball</h5>
                <p class="card-text">Venez pratiquer le handball de 12 ans à 15 ans</p>
              </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
             <img class="card-img-top" src="gym.jpg" alt="Gymnastique">
              <div class="card-body">
                <h5 class="card-title">Gymnastique</h5>
                <p class="card-text">Venez pratiquer la gymnastique de 12 ans à 15 ans</p>
              </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
             <img class="card-img-top" src="tennisdetable.jpg" alt="Tennis de table">
              <div class="card-body">
                <h5 class="card-title">Tennis de table</h5>
                <p class="card-text">Venez pratiquer le tennis de table de 12 ans à 15 ans</p>
              </div>
          </div>
        </div>    
      </div>
    </div>
    <!-- Le footer -->
<footer>
  <a href="#" class="footButton"><i class="fa-solid fa-arrow-up" style="padding: 5px;"></i>Retour en haut de la page</a>
</footer>
    <!-- Scripts bootstrap, script Fontawesome et mon script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <script src="https://kit.fontawesome.com/015134f26b.js" crossorigin="anonymous"></script>
  </body>
  </html>