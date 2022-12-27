<?php
require_once './required/db_conn.php';
require './required/function.php';
$App = new webxspark;
//redirecting to login form when user is not logged in
if(!$App->checkLoginStatus()){
    header('Location: ./login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
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
              <h2 class="text-center mb-4">Hello <?php echo $_SESSION['uname'] ?></h2>
              <p>Email: <a href="mailto:<?php echo $_SESSION['email'] ?>"><?php echo $_SESSION['email'] ?></a></p>
              <p><a href="javascript:;" id="logout">Logout</a></p>
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
  <script>
    $('#logout').click(() => {
        if(confirm("Are you sure to logout!?")){
            window.location.replace('./logout.php');
        }
    })
  </script>
</body>
</html>