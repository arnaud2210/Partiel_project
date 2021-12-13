<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>AdminConnexion</title>
  </head>
  <body>
    <?php require_once("Navbar.php") ?>
    <section class="header py-5">
      <div class="container">
        <form method="POST" action="">
          <div class="row">
            <div class="col"></div>
            <div class="col bg-light">
              <hr>
              <h2 align="center">Espace Administrateur</h2>
              <hr>
              <div class="mb-3 py-5">
                <label for="1" class="form-label"></label>
                <input type="text" 
                       class="form-control" 
                       id="1"
                       placeholder="Login" 
                       name="login"
                       required 
                >
              </div>
              <div class="mb-3">
                <label for="2" class="form-label"></label>
                <input type="password" 
                       class="form-control" 
                       id="2"
                       placeholder="Mot de phrase"
                       name="password"
                       required 
                >
              </div>
              <div class="mb-3 py-5">
                <button type="submit" class="form-control btn btn-success" formaction="Accueil.php">Se connecter</button>
              </div>
            </div>
            <div class="col"></div>
          </div>      
        </form>
      </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>