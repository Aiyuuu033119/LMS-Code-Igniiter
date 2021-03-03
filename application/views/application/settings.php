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
                  <!-- <li class="breadcrumb-item"><a href="<?php // echo base_url()?>/app/booklist">Book List</a></li> -->
                  <li class="breadcrumb-item active" aria-current="page">Settings</li>
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
                  <h3 class="mb-0">Modify Settings</h3>
                </div>
                <div class="col-4 text-right">
                  <a class="btn btn-sm btn-primary text-white save-btn">Save</a>
                </div>
              </div>
            </div>
            <?php
              foreach ($info as $data) {
            ?>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">General Settings</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-username">Days Borrowed</label>
                        <input type="text" id="input-username" class="form-control days" placeholder="Username" value="<?php echo $data->days_borrowed?>">
                        <span><small class="days-error text-red">&nbsp;</small></span>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-email">Book Categories</label>
                        <input type="text" id="input-email" class="form-control class" placeholder="" value="<?php echo $data->book_categories?>" >
                        <span><small class="class-error text-red">&nbsp;</small></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group mb-2">
                        <label class="form-control-label" for="input-last-name">Admin Population</label>
                        <input type="text" id="input-last-name" class="form-control admin" placeholder="Last name" value="<?php echo $data->admin_population?>">
                        <span><small class="admin-error text-red">&nbsp;</small></span>
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

      <div class="modal fade" id="modal-notification-success" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-success">

          <div class="modal-body">
              
              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4">Success!</h4>
                <p>Successfully Update New Books</p>
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

      $('.save-btn').on('click', function(){
        var days = $('.days').val();
        var clss = $('.class').val();
        var admin = $('.admin').val();

        var hasError = null;

        if(days==''&&clss==''&&admin==''){
          $('.days-error').text('Days Borrowed*')
          $('.class-error').text('Book Categories*')
          $('.admin-error').text('Admin Population*')
          setTimeout(function(){
            $('.days-error').text('')
            $('.class-error').text('')
            $('.admin-error').text('')
            
            $('.days-error').append('&nbsp;')
            $('.class-error').append('&nbsp;')
            $('.admin-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }else{
          hasError = false;
        }

        if(days==''){
          $('.days-error').text('Days Borrowed*')
          setTimeout(function(){
            $('.days-error').text('')
            
            $('.days-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(clss==''){
          $('.class-error').text('Book Categories*')
          setTimeout(function(){
            $('.class-error').text('')
            
            $('.class-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(admin==''){
          $('.admin-error').text('Admin Population*')
          setTimeout(function(){
            $('.admin-error').text('')
            
            $('.admin-error').append('&nbsp;')
          }, 2000);
        }

        if(hasError==false){
          var data = new FormData();
        
          data.append('days', days);
          data.append('admin', admin);
          data.append('class', clss);

          $.ajax({
            url: "<?php echo base_url()?>setting/editsetting?>",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);
              
              if(json.msg=='success'){
                $('#modal-notification-success').modal('show')
              }
              else if(json.msg=='error'){
                $('#modal-notification-danger').modal('show')
              }
            }
          });
        }

      });
    });
  </script>
</body>

</html>