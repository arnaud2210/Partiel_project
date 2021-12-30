<?php
    require_once("database/rechercher.php");
?>
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
        require_once("Navbar1.php"); 
    ?>
   
    <section class="header">
        <div class="container">
        <section class="note py-5">
            <div class="container">
             <caption align="center">RECHERCHER UNE CANDIDATURE</caption>
            <hr>
            <form method="POST" action="">
                <div class="row">
                    <div class="col">
                        <section class="">
                            <div>
                    <table class="table table-hover">
                    <thead>
                        <tr class="bg-warning">
                        <th scope="col">N°</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Sexe</th>
                        <th scope="col">Naissance</th>
                        <th scope="col">Nationnalité</th>
                        <th scope="col">Série</th>
                        <th scope="col">Session</th>
                        <th class="bg-secondary" align="center" scope="col"></th>
                        <!--?php if ($_SESSION['niv'] == 0) 
                            {
                        ?-->
                        <!--th scope="col" class="bg-secondary"></th-->
                        <!--th scope="col" class="bg-success"></th-->
                        <!--?php 
                            }
                        ?-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while ($post = $search->fetch())
                            { 
                        ?>  <tr>
                                <!--th scope="row"><!--?php echo htmlspecialchars($post['matricule']); ?></th-->
                                <td scope="row"><strong><?php echo htmlspecialchars($post['numcandidat']); ?></strong></td>
                                <td><?php echo htmlspecialchars($post['nom']); ?></td>
                                <td><?php echo htmlspecialchars($post['prenom']); ?></td>
                                <td><?php echo htmlspecialchars($post['sexe']); ?></td>
                                <td><?php echo htmlspecialchars($post['naissance']); ?></td>
                                <td><?php echo htmlspecialchars($post['nationnalité']); ?></td>
                                <td><?php echo htmlspecialchars($post['libserie']); ?></td>
                                <td><?php echo htmlspecialchars($post['bacsession']); ?></td>
                                <td align="center">
                                <a class="btn btn-outline-danger" href="database/telecharger.php?num=<?php echo $post['numfic'];?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    Télécharger Att-n°<?php echo htmlspecialchars($post['numfic']); ?>
                                </a>
                                </td>
                                
                            </tr>
                        <?php
                            }  
                            $search->closeCursor();
                        ?>  
                    </tbody>
                    </table>
                </div>
              </section>
            </div>
          </div>
        </div>
      </form>
    </section>
        </div>  
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>