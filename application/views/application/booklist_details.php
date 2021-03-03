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
                  <li class="breadcrumb-item active" aria-current="page">Book Details</li>
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
                  <h3 class="mb-0">Book Details</h3>
                </div>
                <div class="col-4 text-right">
                  <a class="btn btn-sm btn-primary text-white" data-toggle="modal" data-target="#modal-form">Add</a>
                  <a href="<?php echo base_url()?>book/editbook/<?php echo $this->uri->segment(3)?>" class="btn btn-sm btn-primary">Edit</a>
                  <a href="<?php echo base_url()?>book/deletebook/<?php echo $this->uri->segment(3)?>" class="btn btn-sm btn-primary">Delete</a>
                </div>
              </div>
            </div>
            <?php
              $book = '';
              $author = '';
              $class = '';
              $date = '';
              $rack = '';
              $price = '';
              $total = '';
              $code = '';

              foreach ($info as $data) {
                $book = $data->book;
                $author = $data->author;
                $class = $data->class;
                $date = $data->arrival;
                $rack = $data->rack;
                $price = $data->price;
                $total = $data->total;
                $code = $data->code;

            ?>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Book Information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Book Name</label>
                        <input type="text" id="input-username" class="form-control" disabled placeholder="Username" value="<?php echo $data->book?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Author</label>
                        <input type="text" id="input-email" class="form-control" disabled  placeholder="" value="<?php echo $data->author?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Categories</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->class?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Date Arrival</label>
                        <input type="text" id="input-last-name" class="form-control" disabled placeholder="Last name" value="<?php echo $data->arrival?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Total No.</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->total?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Rack No.</label>
                        <input type="text" id="input-last-name" class="form-control" disabled placeholder="Last name" value="<?php echo $data->rack?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Price</label>
                        <input type="text" id="input-first-name" class="form-control" disabled placeholder="First name" value="<?php echo $data->price?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Book Status</h6>
                <div class="pl-lg-4">
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="">
                        <tr>
                          <th class="text-center" scope="col" class="sort" data-sort="name">Book Code</th>
                          <th class="text-center" scope="col" class="sort" data-sort="budget">Status</th>
                          <!-- <th scope="col" class="sort" data-sort="status">Class</th> -->
                          <!-- <th scope="col" class="sort" data-sort="status">Status</th>
                          <th scope="col" class="sort" data-sort="completion">Rack No</th>
                          <th scope="col">Action</th> -->
                        </tr>
                      </thead>
                      <tbody class="list">
                        <?php
                          foreach ($status as $data) {
                        ?>
                          <tr>
                            <th scope="row" class="text-center">
                              <?php echo $data->code_id?>
                            </th>
                            <td class="budget text-center"><?php echo $data->status?></td>
                          </tr>
                        <?php
                          }
                        ?>
                        <tr><th></th><th></th></tr>
                      </tbody>
                    </table>
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
      
      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" style="z-index:10001">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                <div class="card-header bg-transparent" style="display: flex;justify-content: space-between;align-items: center;">
                  <div class="text-muted text-center"><h2 class="mb-0">Add New Book</h2></div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="card-body px-lg-5 pt-4 pb-4">
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-chart-bar-32"></i></span>
                          </div>
                          <input class="form-control count" placeholder="Count" type="text">
                        </div>
                      </div>
                      <span><small class="count-error text-red">&nbsp</small></span>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary add-btn">Add</button>
                  </div>
                </div>
              </div>
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
                <p>Successfully Added New Books</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
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
      $('.add-btn').on('click', function(){
        var count = $('.count').val();

        var hasError = null;

        if(count==''){
          $('.count-error').text('Count*')
          setTimeout(function(){
            $('.count-error').text('')
            $('.count-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        else{
          hasError = false;
        }

        if(hasError==false){
          var data = new FormData();
        
          data.append('book', "<?php echo $book?>");
          data.append('author', '<?php echo $author?>');
          data.append('class', '<?php echo $class?>');
          data.append('price', '<?php echo $price?>');
          data.append('count', count);
          data.append('rack', '<?php echo $rack?>');
          data.append('date', '<?php echo $date?>');
          data.append('total', '<?php echo $total?>');
          data.append('code', '<?php echo $code?>');

          $.ajax({
            url: "<?php echo base_url()?>book/addsubbook",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);
              
              var html = '';

              json.forEach(element => {
                html += '<tr>'
                          +'<th scope="row" class="text-center">'
                            +element.code_id
                          +'</th>'
                          +'<td class="budget text-center">'+element.status+'</td>'
                        +'</tr>';
              });

              $('#modal-form').modal('hide')
              html+='<tr><th></th></tr>'
              $('.list').html(html);
              $('#modal-notification-success').modal('show')
              
            }
          });

        }

      });

    });
  </script>
</body>

</html>