<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"  
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
          crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>Actualités de votre association</title>
</head>
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
            <a class="nav-link" href="activites.php">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pub Association sportive.pdf" target="_blank">Inscription</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <div class="actu">
      <h1 class="actuTitle">Championnat de France de Gymnastique</h1>
      <br>
      <!-- Div contenant l'image animée -->
      <div class="imgContainer">
        <img class="championnat" src="championnat.png" alt="Championnat de France">
      </div>
      <p style="text-align: center; margin-top: 20px;color: rgb(249, 95, 95);">Cette année, les <strong> championnats de france de Gymnastique UNSS </strong>se dérouleront du 7 au 10 juin 2022 au Gymnase Salvadore Allede de Combs la Ville.</p>
    </div>
    <!-- Scripts bootstrap, script Fontawesome et mon script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>