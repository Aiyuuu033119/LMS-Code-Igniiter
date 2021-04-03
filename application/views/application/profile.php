<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
  $this->load->view('application/include/headers');
?> 
  <!-- Sidenav -->
  
  <?php
    $this->load->view('application/include/sidenav');
  ?> 

  <div class="main-content" id="panel">

    <?php
      $this->load->view('application/include/navbar');
    ?> 
    <?php 
        foreach ($info as $data ) {
    ?>
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-xl-12">
            <h1 class="display-2 text-white name1">Hello <?php echo $data->name?></h1>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../assets/img/theme/team-4.png" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <!-- <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div> -->
            </div>
            <div class="card-body pt-5">
              <div class="text-center">
                <h5 class="h3 name2">
                    <?php echo $data->name?>
                </h5>
                <div class="h5 font-weight-300">
                <?php echo $data->status?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a class="text-white btn btn-sm btn-primary save-btn" id="<?php echo $data->id?>">Save</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-username">Full Name</label>
                        <input type="text" id="input-username" class="form-control name" placeholder="Username" value="<?php echo $data->name?>">
                        <span><small class="name-error text-red">&nbsp</small></span>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control email" placeholder="Email" value="<?php echo $data->email?>">
                        <span><small class="email-error text-red">&nbsp</small></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text" style="padding-right:0px">
                                <div class="custom-control custom-checkbox" >
                                  <input type="checkbox" class="custom-control-input toogle-btn" id="customCheck1">
                                  <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                              </span>
                          </div>
                          <input style="padding-left:10px" class="form-control password" placeholder="" disabled type="password" value="admin123">
                        </div>
                        <span><small class="password-error text-red">&nbsp</small></span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
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
                <p>There is error on the server</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
              <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
            </div>
              
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-notification-success" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-success">

          <div class="modal-body">
              
              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4">Success!</h4>
                <p>Successfully Updated</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
              <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
            </div>
              
          </div>
        </div>
      </div>

      <!-- Footer -->
      <?php
        $this->load->view('application/include/footer');
      ?> 
    </div>
    <?php
        }
    ?>
  </div>
  <script src="<?php echo base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
  <script>
    $(document).ready(function(){
      $('.save-btn').on('click', function(){
        var name = $('.name').val();
        var email = $('.email').val();
        var pass = $('.password').val();

        var hasError;

        if(name==''&&email==''&&box==true&&pass==''){
          $('.name-error').text('Full Name*')
          $('.email-error').text('Email*')
          $('.password-error').text('Password*')

          setTimeout(function(){
            $('.name-error').text('')
            $('.email-error').text('')
            $('.name-error').append('&nbsp;')
            $('.email-error').append('&nbsp;')
            $('.password-error').text('')
            $('.password-error').append('&nbsp;')

          }, 2000);

          hasError = true;
        }
        else{
          hasError = false;
        }

        if(name==''){
            $('.name-error').text('Full Name*')
          
            setTimeout(function(){
                $('.name-error').text('')
                $('.name-error').append('&nbsp;')
            }, 2000);

            hasError = true;
        }
        if(email==''){
            $('.email-error').text('Email*')
          
            setTimeout(function(){
                $('.email-error').text('')
                $('.email-error').append('&nbsp;')
            }, 2000);

          hasError = true;
        }
        if(box==true&&pass==''){
            $('.password-error').text('Password*')
          
            setTimeout(function(){
              $('.password-error').text('')
              $('.password-error').append('&nbsp;')
            }, 2000);

          hasError = true;
        }

        var compareName = '<?php echo $data->name?>'; 
        var compareEmail = '<?php echo $data->email?>'; 

        if(name==compareName&&email==compareEmail&&pass=='admin123'&&box==false){
          return false;
        }

        if(hasError==false){
          var data = new FormData();
        
          data.append('name', name);
          data.append('email', email);
          data.append('box', box);
          data.append('id', $(this).attr('id'));
          data.append('password', pass);

          $.ajax({
            url: "<?php echo base_url()?>profile/editprofile",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);

              $('#modal-form-edit').modal('hide')

              if(json.msg=='success'){
                $('.name').val(name);
                $('.email').val(email);
                $('.name2').text(name);
                $('.name-3').text(name);
                $('.name1').text('Hello '+name);
                box = false;
                $('.password').attr('disabled',true)
                $('.password').val('**********');
                compareName = name;
                compareEmail = email;
                $('#modal-notification-success').modal('show')
              }
              else if(json.msg=='error'){
                $('#modal-notification-danger').modal('show')
              }
            }
          });
        }

      });

      var box = false;

      $(document).on('click', '.toogle-btn', function(){
        var val = $(this).is(":checked");
        box = val;
        if(val==true){
          $('.password').attr('disabled',false)
          $('.password').val('');
        }
        else{
          $('.password').attr('disabled',true)
          $('.password').val('**********');
        }
      });
    });
  </script>
</body>

</html>
