<?php
$page_title = "Sign Up - Soft Stock Solo Web Application";
require "../includes/dbh.inc.php";
require "../includes/head.inc.php";
?>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>
  <section class="vh-100" style="background-color: #EDEDED;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4 needs-validation" action="../includes/sign_up.inc.php" method="post" novalidate>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <!-- <i class="fas fa-envelope fa-lg me-3 fa-fw"></i> -->
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="input-sign-up-email">Your Email</label>
                        <input type="email" id="input-sign-up-email" name="input-sign-up-email" class="form-control" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please enter your email.
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="input-sign-up-password">Password</label>
                        <input type="password" id="input-sign-up-password" name="input-sign-up-password" class="form-control" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please enter a password.
                        </div>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <!-- <i class="fas fa-key fa-lg me-3 fa-fw"></i> -->
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="input-sign-up-password-confirm">Repeat your password</label>
                        <input type="password" id="input-sign-up-password-confirm" name="input-sign-up-password-confirm" class="form-control" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please enter the password again.
                        </div>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="true" id="check-box-sign-up-agree" name="check-box-sign-up-agree" required />
                      <label class="form-check-label" for="check-box-sign-up-agree">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" id="" class="btn btn-secondary btn-lg" name="sign_up_submit">Sign Up</button>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                      <p>Have an account? <a href="../view/sign_in.php">Sign In</a></p>
                    </div>

                  </form>

                  <?php

                  if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyInputs") {
                  ?>
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                          <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                          Empty inputs cannot be accepted.
                        </div>
                      </div>
                    <?php
                    } else if ($_GET["error"] == "invalidEmail") {
                    ?>
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                          <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                          You have entered an invalid email address.
                        </div>
                      </div>
                    <?php
                    } else if ($_GET["error"] == "passwordsDonNotMatch") {
                    ?>
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                          <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                          Password and Confirm Password must be same.
                        </div>
                      </div>
                    <?php
                    } else if ($_GET["error"] == "emailExist") {
                    ?>
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                          <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                          You have already registered. Please <a href="../view/sign_in.php">Sign In</a> here.
                        </div>
                      </div>
                    <?php
                    } else if ($_GET["error"] == "none") {
                    ?>
                      <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                          <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                          You registered successfully. Please <a href="../view/sign_in.php">Sign In</a> here.
                        </div>
                      </div>
                  <?php
                    }
                  }

                  ?>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="../images/signup.jpg" class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    (function() {
      "use strict";

      var forms = document.querySelectorAll(".needs-validation");

      Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener(
          "submit",
          function(event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    })();
  </script>

  <?php require "../includes/foot.inc.php"; ?>