<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <title>Accueil</title>
    </head>

    <body>
        <?php require_once('Navgen.php');?>
        <section class="header text-center p-5">
            <div class="container">
                <span>
                    <h1>Institut Africain d'Informatique</h1>
                    <h2>Etablissement Inter-Etats d'Enseignement Supérieur <br> Représentation du Togo <strong>(IAI-TOGO)</strong> </h2>
                </span>
                <button type="button" class="btn btn-outline-light"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Contact</button>
                <div class="modal fade" id="exampleModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog text-dark">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Contact Administration</h5>
                                <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Fermer le
                                    popop"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="">
                                        <div class="">
                                            <p align="center">
                                                07 <strong>BP </strong>12456 Lomé 07,<strong> Tél. </strong>: (+228) 22.20.47.00 <strong>/</strong> 22.21.27.06 <br>
                                                <strong>E-mail : </strong><em><a class="link-success" href="mailto:iaitogo@iai-togo.tg">iaitogo@iai-togo.tg</a>/<a class="link-success" href="mailto:iaitogo@yahoo.fr">iaitogo@yahoo.fr</a></em>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Quitter</button>
                                <!--button type="submit" class="btn btn-success">
                                    </button-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-page p-5 bg-light">
                <div class="container">
                    <div class="row h-100 justify-content-center
                        align-items-center">
                        <div class="col-lg-6">
                            <img src="assets/img/logo.png" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="p-2 text-primary">Présentation de l'IAI-TOGO</h1>
                            <p class="p-2">L'<strong>Institut Africain d'Informatique (IAI)</strong> est une institution internationale,
                                créée en 1971 à Fort-Lamy actuelle N'Djamena, capitale de la Répbublique du Tchad par (11)
                                pays à savoir, le Bénin, le Burkina-Faso, le Cameroun, la Côte d'Ivoire, la Centrafique, la
                                Répbublique du Congo, le Gabon, le Niger, le Sénégal, le Tcha et le Togo. Son siège se trouve
                                à Libreville au Gabon. L'IAI forme des ingénieurs informaticiens à Libreville et des ingénieurs
                                des travaux informatiques dans ses représentations.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-page bg-success">
                <div class="container">
                    <div class="row h-100 justify-content-center
                        align-items-center">
                        <div class="col-lg-6">
                            <h1 class="p-2 text-dark">Formation IAI-TOGO</h1>
                            <p class="p-2 text-light">
                                L'<strong>IAI-TOGO</strong> est ouvert depuis 2002 et forme en trois (3) ans des ingénieurs des travaux informatiques
                                dans trois filières: <strong>Génie Logiciel et Système d'Information (GLSI)</strong>, <strong>l'Administration Système & Réseaux (ASR)</strong> et 
                                <strong>Multimédia Technologie Web et Infographie (MTWI)</strong>. Il intègre à la troisième année de cette formation, un stage de trois (3) mois en
                                entreprise. L'objectif de ce stage est de permettre aux étudiants de mettre en pratique les connaissances 
                                acquises au cours des trois années de la formation et aussi d'approfondir les connaissances du monde 
                                professionnel lors du stage de deuxième année.
                            </p>
                        </div>
                        <div class="col-lg-6">
                        <img id="r-7317321" data-claire-element-id="31793701" src="https://user.oc-static.com/upload/2021/06/30/1625047097001_P1C3-1%20code%20modulaire%20avec%20les%20composants%20JSX%20%282%29.png" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="main-page bg-dark">
                <div class="container">
                    <div class="row h-100 justify-content-center
                        align-items-center">
                        <div class="col-lg-6">
                            <h1 class="p-2 text-light">S'incrire à l'Institut</h1>
                            <p class="p-2 text-light">
                              L'inscription à l'institut est conditionnée. Le candidat est soumis à un concours et doit être titulaire d'un
                              <strong>BAC</strong> série <strong>C, D, E, F2</strong>. A la réussite de ce concours, le candidat peut s'inscrire
                              alors en 1ère année. La durée de formation est de 3 ans. Veuillez cliquez <a class="link-warning" href="http://"><strong><em>ici</em></strong></a> pour plus
                                d'informations sur le concours.
                            </p>
                            <form class="p-3">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control"
                                        placeholder="Adresse email"
                                        aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                    <button class="input-group-text btn
                                        btn-primary" formaction="Formulaire.php">S'inscrire</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
                crossorigin="anonymous"></script>

            <script type="text/javascript">
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
        </body>

    </body>

</html>