<?php 
include __DIR__ . "/function.php";
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  

    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-7">
            <div class="card p-3 bg-info-subtle">
                <form method="get" class="mb-3">
                    <label for="formGroupExampleInput" class="form-label fw-bold mb-3">Inserisci la lunghezza della password che vuoi generare</label>
                    <input type="number" min="1" max="12" step="1" name="length" value="<?= $last_input ?? '' ?>" class="form-control" id="formGroupExampleInput" placeholder="Inserisci lunghezza">
                    <button type="submit" class="btn btn-primary">Genera</button>
                    
                </form>
                
                <div class="password_generata">
                    <h5 class="d-inline-block">La password generata è:</h5>
                    <?= $password_generated  ?>
                </div>

    
            </div>
        </div>
    </div>
</div>
   
</body>
</html>