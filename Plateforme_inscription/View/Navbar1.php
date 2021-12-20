<?php  
    require_once('database/rechercher.php');   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex" method="POST" action="Classement.php">
          <input class="form-control me-2" 
                 type="Search" 
                 placeholder="Rechercher" 
                 aria-label="Search"
                 name="mot"
                 value="<?php echo $motRechercher; ?>" 
          >
          <button class="btn btn-warning me-2" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
          <button class="btn btn-outline-secondary me-2" type="submit" formaction="">
            Série
          </button>
          <button class="btn btn-outline-success" type="submit">
            Sexe
          </button>
        </form>
      </div>
    </nav>
</body>
</html>