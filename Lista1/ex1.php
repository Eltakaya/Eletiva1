<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <form method="post">
        <div class="container mt-5">
                        <div class="row g-3"> 
                            <div class="col-md-4">
                                <label for="Primeiro nome"  class="form-label" >First name</label>
                                <input type="text" id="Primeiro nome" name="Primeiro nome" class="form-control" required="" placeholder="Mark">
                            </div>
                        
                            <div class="col-md-4">
                                <label for="Sobrenome" class="form-label">Last name</label>
                                <input type="text" id="Sobrenome" name="Sobrenome" class="form-control" required="" placeholder="Otto">
                            </div>
                        
                            <div class="col-md-4">
                                <label for="Username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="email" id="Username" name="Username" class="form-control" required="" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mt-3"> 
                            <div class="col-md-4">
                                <label for="City" class="form-label">City</label>
                                <input type="text" id="City" name="City" class="form-control" required="" placeholder="City">
                            </div>
                        
                            <div class="col-md-4">
                                <label for="State" class="form-label">State</label>
                                <input type="text" id="State" name="State" class="form-control" required="" placeholder="State">
                            </div>
                        
                            <div class="col-md-4">
                                <label for="Zip" class="form-label">Zip</label>
                                <input type="text" id="Zip" name="Zip" class="form-control" placeholder="Zip">
                            </div>
                        </div>
                        
                    
                        <div class="form-check mt-3"> 
                            <input type="checkbox" id="Agree to terms and conditions" name="Agree to terms and conditions" class="form-check-input">
                            <label for="Agree to terms and conditions" class="form-check-label">Agree to terms and conditions</label>
                        </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>