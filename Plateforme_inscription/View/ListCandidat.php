<?php
require('database/connexion.php');
$req = $db->query('select* FROM v_candidature order by numcandidat desc');
/*$class = $_POST["trie"];
$type = substr($class, 0, 1);
$class = substr($class, 1);

if ($type == 'A') {
  $req = $db->prepare('select* FROM v_candidature where sexe = ?');
  $req->execute(array($class));
}*/

?>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<h2 align="center">LISTE DES CANDIDATURES</h2>
<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="form-check form-check-inline">
        <a href="assets/fpdf/printListe.php" class="btn btn-light btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                </svg>
                Voir liste à imprimer
        </a>
        <!--form action="ListCandidat.php" method="post">
          <select name="trie" class="form-select" aria-label="Default select example" required>
            <option value="">Classer</option>
            <option disabled>Par sexe</option>
            <option value="AM">Masculin</option>
            <option value="AF">Féminin</option>
            <option disabled>Par série</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select>
        </form-->
      </div>
    </div>
  </div>
  <section class="note py-5">
    <div class="container">
      <form method="POST" action="">
        <div class="row">
          <div class="col">
            <section class="">
              <div>
                <table class="table table-hover bg-light" style="">
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
                      <th class="bg-light" scope="col"></th>
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
                    while ($post = $req->fetch()) {
                    ?> <tr>
                        <!--th scope="row"><!--?php echo htmlspecialchars($post['matricule']); ?></th-->
                        <td scope="row"><strong><?php echo htmlspecialchars($post['numcandidat']); ?></strong></td>
                        <td><?php echo htmlspecialchars($post['nom']); ?></td>
                        <td><?php echo htmlspecialchars($post['prenom']); ?></td>
                        <td><?php echo htmlspecialchars($post['sexe']); ?></td>
                        <td><?php echo implode('/', array_reverse(explode('-', htmlspecialchars($post['naissance'])))); ?></td>
                        <td><?php echo htmlspecialchars($post['nationnalité']); ?></td>
                        <td><?php echo htmlspecialchars($post['libserie']); ?></td>
                        <td><?php echo htmlspecialchars($post['bacsession']); ?></td>
                        <td align="center">
                          <a class="btn btn-danger btn-sm" href="database/telecharger.php?num=<?php echo $post['numfic']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                              <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                              <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                            </svg>
                            Télécharger<?php echo htmlspecialchars($post['numfic']); ?>
                          </a>
                          <a href="assets/fpdf/print.php?num=<?php echo $post['numcandidat']; ?>" class="btn btn-secondary btn-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                              <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                              <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                            </svg>
                          </a>
                        </td>

                      </tr>
                    <?php
                    }
                    $req->closeCursor();
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