<?php
$page_title = "Soft Stock Solo";
require "./includes/head.inc.php";
require "./includes/dbh.inc.php";
?>

<section class="vh-100">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="text-black">
                <div class="p-md-5">
                  <div class="row justify-content-center">
                    <p class="text-center h1 fw-lighter mb-5 mx-1 mx-md-4 mt-4 text-secondary display-1">Soft Stock Solo</p>
                    <div class="col d-flex justify-content-center align-items-center mt-5">
      
                      
      
                      <button type="button" class="btn btn-outline-secondary btn-lg w-75" onclick="sign_up.html" id="signUpButton">Sign Up</button>               
      
                    </div>
                    <div class="col d-flex justify-content-center align-items-center mt-5">
      
                      
                        <button type="button" class="btn btn-outline-secondary btn-lg w-75" onclick="sign_in.html" id="signInButton">Sign In</button> 
      
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
          window.location.href = 'sign_up.php';
        }

        function redirectToSignInPage() {
          window.location.href = 'sign_in.php';
        }
      
        document.getElementById('signUpButton').addEventListener('click', redirectToSignUpPage);
        document.getElementById('signInButton').addEventListener('click', redirectToSignInPage);
      </script>

<?php require "./includes/foot.inc.php" ?>