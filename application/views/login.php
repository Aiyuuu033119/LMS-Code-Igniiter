<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>LMS - Login</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/toastr-master/build/toastr.css" type="text/css">
</head>

<body class="bg-default">
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container" style="display: flex;justify-content: center;">
      <a class="navbar-brand" href="dashboard.html">
        <img src="<?php echo base_url();?>assets/img/brand/white.png">
      </a>
    </div>
  </nav>

  <div class="main-content">
    <div class="header bg-gradient-primary py-7">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h3>Login</h3>
              </div>
                <div class="form-group mb-2">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" id="email" autocomplete="off">
                  </div>
                  <span class="text-danger email-error"><small>&nbsp;</small></span>
                </div>
                <div class="form-group mb-2">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" id="password" autocomplete="off">
                  </div>
                  <span class="text-danger pass-error"><small>&nbsp;</small></span>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4 signin__button">Sign in</button>
                </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-notification-danger" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-danger">

      <div class="modal-body">
          
          <div class="py-3 text-center">
            <i class="ni ni-fat-remove ni-3x"></i>
            <h4 class="heading mt-4">Error!</h4>
            <p>Invalid Account!! Check your email and password</p>
          </div>
            
        </div>
          
        <div class="modal-footer mt-0">
          <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
          <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
        </div>
          
      </div>
    </div>
  </div>

  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="<?php echo base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
  <script src="<?php echo base_url();?>assets/toastr-master/build/toastr.min.js"></script>
  <script>
    $(document).ready(function(){
      

      $('.signin__button' ).on( "click", function() {
        var getEmail = $('#email').val();
        var getPass = $('#password').val();
        var hasError;

        if(getEmail==''&&getPass==''){
          // toastr.error('Please enter your email!');
          // toastr.error('Please enter your password!');
          $('.email-error').text('Email*')
          $('.pass-error').text('Password*')

          hasError = true;
        }
        else if(getEmail==''){
          $('.email-error').text('Email*')
          // toastr.error('Please enter your email!');
          hasError = true;
        }
        else if(getPass==''){
          $('.pass-error').text('Password*')
          // toastr.error('Please enter your password!');
          hasError = true;
        }
        else{
          hasError = false;
        }

        if(hasError==false){
          var data = new FormData();
        
          data.append('email', getEmail);
          data.append('password', getPass);

          $.ajax({
            url: "<?php echo base_url()?>auth/loginProc",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);
              
              if(json.msg=='success'){
                window.top.location = "<?php echo base_url()?>app/dashboard";
              }
              else if(json.msg=='error'){
                $('#modal-notification-danger').modal('show');
              }
            }
          });
        }

      });

    });
  </script>
  
</body>

</html>