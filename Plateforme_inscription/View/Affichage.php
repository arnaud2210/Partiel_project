<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Affichage</title>
  </head>
  <body>
    <?php 
        require_once("Navbar.php");
    ?>
    <div class="container p-2" align="right">Mise à jour : <?php echo date('h:i') ?></div> 
  
    <section class="header">
          <?php require_once("ListCandidat.php") ?>
        </div>  
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>