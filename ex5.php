<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex align-items-center flex-column">
      <form class="mt-4">
      <h2 class="mt-4 col-md-8">Billing address</h2>
        <div class="mt-2 g-3 row">
            <div class="col-md-6">
                <label for="firstName">First name</label>
                <input type="text" class="form-control mt-2" id="firstName">
            </div>
            <div class="col-md-6">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control mt-2" id="lastName">
            </div>
        </div>
        <div class="mt-2 row">
            <label for="username">Username</label>
            <div class="input-group mt-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
        </div>
        <div class="mt-2 form-group">
            <label for="email">Email <span class="text-secondary">(Optional)</span> </label>
            <input type="email" class="form-control mt-2 pl-5" id="email" placeholder="you@example.com">
        </div>
        <div class=" mt-2 form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control mt-2" id="address" placeholder="1234 Main St">
        </div>
        <div class="mt-2 form-group">
            <label for="address2">Address 2 <span class="text-secondary">(Optional)</span></label>
            <input type="text" class="form-control mt-2" id="address2" placeholder="Apartment or suite">
        </div>
        <div class="row">
            <div class="form-group g-3 col-md-5">
                <label for="country">Country</label>
                <select class="form-control mt-2" id="country">
                    <option>Choose...</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>United Kingdom</option>
                </select>
            </div>
            <div class="form-group g-3 col-md-4">
                <label for="state">State</label>
                <select class="form-control mt-2" id="state">
                    <option>Choose...</option>
                    <option>California</option>
                    <option>New York</option>
                    <option>Texas</option>
                </select>
            </div>
            <div class="form-group g-3 col-md-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control mt-2" id="zip">
            </div>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>