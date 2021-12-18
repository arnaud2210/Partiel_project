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
        <?php require_once('Navbar.php');?>
        <section>
        <div class="container">
                <div class="row justify-content-center py-5">
                    <div class="col-5 bg-light">
                      <hr>
                      <h3 align="center">Fiche d'inscription</h3>
                      <hr>
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
                                  name=""
                                  required
                              >
                          </div>
                          <div class="mb3">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" 
                                     type="radio" 
                                     name="inlineRadioOptions" 
                                     id="inlineRadio1" 
                                     value="option1"
                              >
                              <label class="form-check-label" for="inlineRadio1">Homme</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" 
                                     type="radio" 
                                     name="inlineRadioOptions" 
                                     id="inlineRadio2" 
                                     value="option2"
                              >
                              <label class="form-check-label" for="inlineRadio2">Femme</label>
                            </div>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-select" aria-label="Default select example" required name="">
                                  <option>Votre nationalité</option>
                                  <option value="1"></option>
                                  <option value="2"></option>
                                  <option value="3"></option>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-select" aria-label="Default select example" required name="">
                                  <option>Série</option>
                                  <option value="1"></option>
                                  <option value="2"></option>
                                  <option value="3"></option>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label"></label>
                              <select class="form-select" aria-label="Default select example" required name="">
                                  <option>Session BAC</option>
                                  <option value="1"></option>
                                  <option value="2"></option>
                                  <option value="3"></option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Fiche d'attestation du BAC</label>
                            <input class="form-control" 
                                   type="file" 
                                   id="formFile"
                                   name=""       
                            > <br>
                            NB: <em class="text-danger">Veuillez choisir un fichier au format PDF. Tout autre format est refusé.</em>
                          </div><br>
                          <div class="mb-3">
                            <button type="reset" class=" btn btn-warning" id="liveToastBtn">Annuler</button>
                            <button type="submit" class=" btn btn-success" id="liveToastBtn">Soumettre</button>
                          </div>
                    </div>
                    <div class="col-6">
                      <img id="r-7471291" data-claire-element-id="32137261" src="https://user.oc-static.com/upload/2021/09/30/16330109529464_P1C3%20Pre%CC%81parez%20votre%20environnement%20de%20travail.png" alt="">                                                 
                    </div>
                  </div>
            </form>
          </div>
        </section>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>

</html>