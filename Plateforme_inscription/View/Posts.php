<?php session_start(); 
    require('database/connexion.php');
    $table = $db->query('select* FROM contenu order by idcontent desc');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <title>Posts</title>
  </head>
  <body class="bg-light">
    <?php require_once("Navbar.php") ?>
    <section class="header py-5">
      <div class="container">
          <div class="row">
            <div class="col">
                <img id="r-7471346" data-claire-element-id="32137401" src="https://user.oc-static.com/upload/2021/09/30/16330111195175_P3C3%20Activez%20le%20partage%20de%20fichiers.png" alt="">
            </div>
            <div class="col">
            <?php 
                while ($post = $table->fetch())
                { 
            ?>
                <div class="card bg-light" >
                    <div class="card-body">
                    
                        <h5 class="card-title text-primary" align="center"><?php echo $post['titre']?></h5>
                        <hr>
                        <p class="card-text"><?php echo $post['description']?></p>
                        <div class="mb-3" align="right">
                            <a class="btn btn-warning" href="Edition.php?idcontent=<?php echo $post['idcontent'];?>" id="edition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                                
                            </a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" id="suppression">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                
                            </a>
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered text-dark">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container">
                                                <p align="center"><strong>Etes-vous sûr de vouloir supprimer cette carte?</strong></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="close" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                            <a type="button" class="btn btn-warning" href="database/supprimer.php?idcontent=<?php echo $post['idcontent'];?>">
                                                Oui
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br>
            <?php
                }  
                $table->closeCursor();
            ?>
            </div>
          </div>
      </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>