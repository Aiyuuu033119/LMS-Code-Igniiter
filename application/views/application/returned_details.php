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
                  <li class="breadcrumb-item"><a href="<?php echo base_url()?>/app/issuebook">Returned Books</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Returned Details</li>
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
                  <h3 class="mb-0">Returned Details</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="<?php echo base_url()?>returned/editreturn/<?php echo $this->uri->segment(3)?>" class="btn btn-sm btn-primary">Edit</a>
                </div>
              </div>
            </div>
            <?php
              
              foreach ($info as $data) {

            ?>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Student Informatio</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Member ID</label>
                        <input type="text" id="input-username" class="form-control" disabled placeholder="Username" value="<?php echo $data->member?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Student Name</label>
                        <input type="text" id="input-email" class="form-control" disabled  placeholder="" value="<?php echo $data->name?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Section</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->section?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Contact Number</label>
                        <input type="text" id="input-last-name" class="form-control" disabled placeholder="Last name" value="<?php echo $data->contact?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Book Informatiom</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Book Code</label>
                        <input type="text" id="input-username" class="form-control" disabled placeholder="Username" value="<?php echo $data->code?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Book Name</label>
                        <input type="text" id="input-email" class="form-control" disabled  placeholder="" value="<?php echo $data->book?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Author</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->author?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Category</label>
                        <input type="text" id="input-last-name" class="form-control" disabled placeholder="Last name" value="<?php echo $data->class?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Rack</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->rack?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Price</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->price?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Date Arrival</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->arrival?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <h6 class="heading-small text-muted mb-4">Trasaction Informatiom</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Issued Date</label>
                        <input type="text" id="input-username" class="form-control" disabled placeholder="Username" value="<?php echo $data->release?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Expire Date</label>
                        <input type="text" id="input-email" class="form-control" disabled  placeholder="" value="<?php echo $data->expire?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Return Date</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->return?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Status</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->status?>">
                      </div>
                    </div>
                    <!-- <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Penalty</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php //echo $data->class?>">
                      </div>
                    </div> -->
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
              <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
            </div>
              
          </div>
        </div>
      </div>
      
      <?php
        $this->load->view('application/include/footer');
      ?> 
      
    </div>
  </div>
  <script src="<?php echo base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
 
</body>

</html>