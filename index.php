<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOTING SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <section class="vh-100 gradient-custom bg-dark">
    <h1 class="bg-info text-white text-center p-3">Voting System</h1>
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-75">
      <div class="col-15 col-md-10 col-lg-8 col-xl-6">
        <div class="card bg-dark text-white" style="border-radius: 1rem; border-color: white;">
          <div class="card-body p-3 text-center">
            <div class="mb-md-3 mt-md-4 pb-1">
              <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
              <p class="fs-4 text-white-50 mb-5">Please enter your details!</p>
              <form action="">
              <div class="form-outline form-white mb-4">
                <input type="text" class="form-control w-5 m-auto" name="username" placeholder="Enter your username" required="required"/>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="text" class="form-control w-5 m-auto" name="mobile" placeholder="Enter your mobile number" required="required" maxlength="10" minlength="10" />
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" class="form-control w-5 m-auto" name="pwd" placeholder="Enter your password" required="required" />
              </div>
              <div class="form-outline form-white mb-4">
                <select name="std" class="form-select w-5 m-auto">
                  <option value="voter">Voter</option>
                  <option value="party">Party</option>
                </select>
              </div>
              <p class="small mb-4 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
              <button class="btn btn-outline-primary btn-lg px-4" type="submit">Login</button>
            </div>
            <div>
              <p class="mb-0">Don't have an account? <a href="./partials/newregister.php" class="text-white-50">Register here</a>
              </p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>