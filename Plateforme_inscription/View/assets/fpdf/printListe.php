<?php
require('../../database/connexion.php');
$req = $db->query('select* FROM v_candidature order by numcandidat asc');
?>

<body id="sectionAimprimer">
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <h2 align="center">LISTE DES CANDIDATURES</h2>
  <div class="container" name="liste">
    <div class="card">
      <div class="card-header">
        <div class="form-check form-check-inline">
          <button class="btn btn-primary" onClick="imprimer('sectionAimprimer')">Imprimer</button>
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
                        <!--th class="bg-light" scope="col"></th-->
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
    <script>
      function imprimer(liste) {
        var printContents = document.getElementById(liste).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
      }
    </script>
</body>