<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Publication</title>
  </head>
  <body>
    <?php require_once("Navbar.php") ?>
    <section class="header py-5">
      <div class="container">
          <div class="row">
            <div class="col">
                <div class="card" >
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title">Ajouter une information</h5>
                        <hr>
                        <form action="database/poster.php?niveau=<?php echo $_SESSION['niv'];?>" method="post">
                          <div class="form-floating mb-3">                           
                            <input 
                                type="text" 
                                class="form-control" 
                                id="exampleFormControlInput1"
                                name="titre"
                                required 
                            >
                            <label for="exampleFormControlInput1" class="form-label">Titre du texte</label>
                          </div>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" style="height: 100px" name="description" required></textarea>
                            <label for="exampleFormControlTextarea1" class="form-label">Zone de texte</label>
                          </div>
                          <div class="mb-3">
                              <button type="reset" class="btn btn-outline-warning">Annuler</button>
                              <button type="submit" class="btn btn-outline-success">Poster</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
              <img id="r-7471311" data-claire-element-id="32137311" src="https://user.oc-static.com/upload/2021/09/30/16330109908118_P1C4%20E%CC%81crivez%20votre%20premier%20script.png" alt="">
            </div>
          </div>
      </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>