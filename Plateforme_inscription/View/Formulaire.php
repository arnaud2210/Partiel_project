<?php
    require('database/connexion.php');
    $serie = $db->query('select * from serie');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <title>Formulaire</title>
    </head>

    <body>
        <?php require_once('Navgen.php');?>
        <section>
        <div class="container">
                <div class="row justify-content-center py-5">
                    <div class="col-5 bg-light">
                      <hr>
                      <h3 align="center">Fiche d'inscription</h3>
                      <hr>
                        <form action="database/insertion.php" method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input 
                                  type="text" 
                                  class="form-control" 
                                  id="exampleFormControlInput1" 
                                  placeholder="Nom"
                                  name="nom"
                                  required   
                              >
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input 
                                  type="text" 
                                  class="form-control" 
                                  id="exampleFormControlInput1" 
                                  placeholder="Prenom"
                                  name="prenom"
                                  required
                              >
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <input 
                                  type="date" 
                                  class="form-control" 
                                  id="exampleFormControlInput1" 
                                  placeholder="Naissance"
                                  name="naissance"
                                  required
                              >
                          </div>
                          <div class="mb3">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" 
                                     type="radio" 
                                     name="sexe" 
                                     id="inlineRadio1" 
                                     value="M"
                                     required
                              >
                              <label class="form-check-label" for="inlineRadio1">Homme</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" 
                                     type="radio" 
                                     name="sexe" 
                                     id="inlineRadio2" 
                                     value="F"
                                     required
                              >
                              <label class="form-check-label" for="inlineRadio2">Femme</label>
                            </div>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-select" aria-label="Default select example" required name="nationnalité">
                                  <option>-- Votre nationalité --</option>
                                  <option value="Togo">Togo</option>
                                  <option value="Gabon">Gabon</option>
                                  <option value="Senegal">Senegal</option>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-select" aria-label="Default select example" required name="serie">
                                    <option value="">-- Votre série --</option>
                                    <?php while($series = $serie->fetch())
                                        {
                                    ?> 
                                            <option value="<?php echo $series["numserie"];?>"><?php echo $series['libserie'];?></option>                                    
                                    <?php  
                                        }
                                        $serie->closeCursor(); 
                                    ?>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-select" aria-label="Default select example" required name="bacsession">
                                  <option value="2018-2019">2018-2019</option>
                                  <option value="2019-2020">2019-2020</option>
                                  <option value="2020-2021">2020-2021</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Fiche d'attestation du BAC</label>
                            <input class="form-control" 
                                   type="file" 
                                   id="formFile"
                                   value=""
                                   accept=".pdf"
                                   data-error="File is required."
                                   name="file"
                                   required
                            > 
                            <br>
                            NB: <em class="text-danger">Veuillez choisir un fichier au format PDF. Tout autre format est refusé.</em>
                          </div><br>
                          <div class="mb-3">
                            <button type="reset" class=" btn btn-warning" >Annuler</button>
                            <button type="button" class=" btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Soumettre</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered text-dark">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="container">
                                                <p>Ces informations sont-ils correctes? Si oui, cliquer sur continuer</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger">Retour</button>
                                            <button type="submit" class="btn btn-success" >
                                                Continuer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="col-6">
                      <img id="r-7471291" data-claire-element-id="32137261" src="https://user.oc-static.com/upload/2021/09/30/16330109529464_P1C3%20Pre%CC%81parez%20votre%20environnement%20de%20travail.png" alt="">                                                 
                    </div>
                  </div>   
          </div>
        </section>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    </body>

</html>