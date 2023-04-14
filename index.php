<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOTING SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100 gradient-custom">
  <div class="container py-3 h-75">
    <div class="row d-flex justify-content-center align-items-center h-75">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-3 text-center">

            <div class="mb-md-3 mt-md-4 pb-1">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your details!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typetext" class="form-control form-control-lg" />
                <label class="form-label" for="typetext">Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="number" id="num" class="form-control form-control-lg" />
                <label class="form-label" for="num">Ph. No.</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <select class="list1 p-2" id=list>
                    <option>voter</option>
                    <option>party</option>
                </select>
              </div>

              <p class="small mb-4 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-4" type="submit">Login</button>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Register</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>