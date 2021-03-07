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
                  <li class="breadcrumb-item"><a href="<?php echo base_url()?>/app/issuebook">Issued Books</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Issued Details</li>
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
                  <h3 class="mb-0">Edit Issued Details</h3>
                </div>
                <div class="col-4 text-right">
                  <a class="btn btn-sm btn-primary text-white save-btn">Save</a>
                </div>
              </div>
            </div>
            <?php
              $old = '';
              foreach ($info as $data) {
                $old = $data->code;
                $memberold = $data->member;
            ?>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Trasaction Informatiom</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Member ID</label>
                        <input type="text" id="input-username" class="form-control member" placeholder="Username" value="<?php echo $data->member?>">
                        <span><small class="member-error text-red">&nbsp;</small></span>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Book Code</label>
                        <input type="text" id="input-email" class="form-control code" placeholder="" value="<?php echo $data->code?>" >
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
      
      <div class="modal fade" id="modal-notification-success" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-success">

          <div class="modal-body">
              
              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4">Success!</h4>
                <p>Successfully Added New Books</p>
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
  var member = $('.member').val();
  var code = $('.code').val();

  var hasError = null;

  if(member==''&&code==''){
    $('.member-error').text('Member ID*')
    $('.code-error').text('Book Code*')
    
    setTimeout(function(){
      $('.member-error').text('')
      $('.code-error').text('')
      
      $('.member-error').append('&nbsp;')
      $('.code-error').append('&nbsp;')
    }, 2000);
    hasError = true;
  }else{
    hasError = false;
  }

  if(member==''){
    $('.member-error').text('Member ID*')
    setTimeout(function(){
      $('.member-error').text('')
      $('.member-error').append('&nbsp;')
    }, 2000);
    hasError = true;
  }
  if(code==''){
    $('.code-error').text('Book Code*')
    setTimeout(function(){
      $('.code-error').text('')
      $('.code-error').append('&nbsp;')
    }, 2000);
    hasError = true;
  }

  if(hasError==false){
    var data = new FormData();
  
    data.append('member', member);
    data.append('code', code);
    data.append('old_code', '<?php echo $old ?>');
    data.append('old_member', '<?php echo $memberold?>');

    $.ajax({
      url: "<?php echo base_url()?>issue/updateissue/<?php echo $this->uri->segment(3);?>",
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
            setTimeout(function(){ window.location.href = '<?php echo base_url()?>/app/issuebook'; }, 500);
          })
          
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