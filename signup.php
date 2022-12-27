<?php
require './required/function.php';
$App = new webxspark;

//redirecting to homepage when user is logged in
if($App->checkLoginStatus()){
  header('Location: ./');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container pb-12 pt-lg-5 pt-md-3 pt-4">
    <div class="row">
      <div class="col-lg-6 offset-lg-2 col-xl-6 offset-xl-3" id="form">
        <div class="card">
          <div class="card-body p-11 text-center">
            <div class="form-elements">
              <h2 class="text-center mb-4">Create an Account</h2>
              <div id="messages"></div>
              <form id="signup" autocomplete="off" action="#" class="text-start mb-3 pt-3">
                <div class="form-floating mb-4">
                  <input type="text" class="form-control shadow-none" id="formName" name="name" placeholder="Name">
                  <label for="formName">Name</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="email" class="form-control shadow-none" id="formEmail" name="email"
                    placeholder="Email Address">
                  <label for="formEmail">Email Address</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" class="form-control shadow-none" id="formPass" name="password"
                    placeholder="Password">
                  <label for="formPass">Password</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" class="form-control shadow-none" id="formCPass" name="cPassword"
                    placeholder="Confirm Password">
                  <label for="formCPass">Confirm Password</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" value="accepted" name="t_n_c" id="t_n_c" class="form-check-input shadow-none">&nbsp;
                  <label for="form-check-label" for="t_n_c">I agree to the <a href="#"
                      class="text-decoration-none">Terms of Service</a> and <a href="#"
                      class="text-decoration-none">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary w-100 mb-2">Create account</button>
                </div>
              </form>
              <p class="mb-0">Already have an account? <a href="./login.php" class="text-decoration-none">Sign in</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JQuery Plugin -->
  <script src="https://cdn.webxspark.com/plugins/js/query.min.js"></script>
  <!-- Wxp.js Plugin -->
  <script src="https://cdn.webxspark.com/libraries/dev/wxp.js"></script>
  <!-- Custom Javascript -->
  <script src="./js/app.js"></script>
</body>

</html>