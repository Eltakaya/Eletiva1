<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form method="post" class="container mt-5" action="4resp.php">
      <div class="mb-3 col-md-5">
          <label for="dia" class="form-label ">Dia: </label>
          <input type="number" id="dia" name="dia" class="form-control " required="">
      </div>
      <div class="mb-3 col-md-5">
          <label for="mes" class="form-label ">Mês: </label>
          <input type="number" id="mes" name="mes" min="1" max="12" class="form-control " required="">
      </div>
      <div class="mb-3 col-md-5">
          <label for="ano" class="form-label ">Ano: </label>
          <input type="number" id="ano" name="ano" class="form-control " required="">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>