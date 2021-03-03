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

  <!-- Main content -->
  <div class="main-content" id="panel">
    
    <?php
      $this->load->view('application/include/navbar');
    ?> 
    
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url()?>/app/booklist">Book List</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Delete Books</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus"></i>&nbsp;Add</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Delete Books</h3>
                </div>
                <div class="col-4 text-right">
                  <a class="btn btn-sm btn-primary text-white delete-btn">Confirm</a>
                </div>
              </div>
            </div>
            <?php
              foreach ($info as $data) {
            ?>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Book Information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-username">Book Name</label>
                        <input type="text" id="input-username" class="form-control book-name" disabled placeholder="Username" value="<?php echo $data->book?>">
                        <span><small class="book-error text-red">&nbsp;</small></span>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-first-name">Code</label>
                        <select class="form-control code" id="exampleFormControlSelect1">
                          <?php
                            if(intval($data->total)!=1){
                              echo '<option value="'.$data->code.'">All</option>';
                            }
                          ?>
                          
                            <?php

                              foreach ($status as $data) {
                                echo '<option value="'.$data->code_id.'">'.$data->code_id.'</option>';
                              }
                            ?>
                        </select>
                        <span><small class="code-error text-red">&nbsp;</small></span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
      

      <!-- <div class="col-md-4">
        <button button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>
        
      </div> -->

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

      <div class="modal fade" id="modal-notification-remind" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-warning modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-warning">

          <div class="modal-body">
              
              <div class="py-3 text-center">
                <i class="ni ni-notification-70 ni-3x"></i>
                <h4 class="heading mt-4">Reminder!</h4>
                <p>Are you sure you want to delete it? The data will never revert again</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white sure-btn" data-dismiss="modal">Ok, Got it</button>
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
                <p>Successfully Deleted</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white close-modal" data-dismiss="modal">Ok, Got it</button>
              <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
            </div>
              
          </div>
        </div>
      </div>

      <?php
        $this->load->view('application/include/footer');
      ?> 
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
  <script>
    $(document).ready(function(){

      $('.delete-btn').on('click', function(){
        $('#modal-notification-remind').modal('show')
      });

      $(document).on('click', '.sure-btn',function(){
        var code = $('.code').val();
        
        var data = new FormData();
      
        data.append('code', code);

        $.ajax({
          url: "<?php echo base_url()?>book/removebook",
          data: data,
          type: "POST",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);
            
            if(json.msg=='success'){
              $('#modal-notification-success').modal('show')
              // close-modal
              $(document).on('click', '.close-modal',function(){
                setTimeout(function(){ window.location.href = '<?php echo base_url()?>/app/booklist'; }, 500);
              })
              
            }
            else if(json.msg=='error'){
              $('#modal-notification-danger').modal('show')
            }
          }
        });

      });
    });
  </script>
</body>

</html>