<?php
$page_title = "Soft Stock Solo";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page_title ?></title>
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="icon" href="http://localhost/Soft_Stock_Solo_Web_App/New/soft-stock-solo-web-app/images/favicon.ico" type="image/x-icon">
</head>

<body>
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="text-black">
            <div class="p-md-5">
              <div class="row justify-content-center">
                <p class="text-center h1 fw-lighter mb-5 mx-1 mx-md-4 mt-4 text-secondary display-1">Soft Stock Solo</p>
                <div class="col d-flex justify-content-center align-items-center mt-5">
                  <button type="button" class="btn btn-outline-secondary btn-lg w-75" id="signUpButton">Sign Up</button>
                </div>
                <div class="col d-flex justify-content-center align-items-center mt-5">
                  <button type="button" class="btn btn-outline-secondary btn-lg w-75" id="signInButton">Sign In</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function redirectToSignUpPage() {
      window.location.href = '../soft-stock-solo-web-app/view/sign_up.php';
    }

    function redirectToSignInPage() {
      window.location.href = '../soft-stock-solo-web-app/view/sign_in.php';
    }

    document.getElementById('signUpButton').addEventListener('click', redirectToSignUpPage);
    document.getElementById('signInButton').addEventListener('click', redirectToSignInPage);
  </script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>