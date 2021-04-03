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
                  <li class="breadcrumb-item active" aria-current="page">Book List</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <?php if($_SESSION['status']!='Librarian Assistant'){
              ?>
              <a class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus"></i>&nbsp;Add</a>
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0" style="display:flex; justify-content: space-between; align-items: center">
              <h3 class="text-white mb-0">Book List</h3>
              <div class="form-group mb-0">
                <input class="form-control search-bar" type="search" placeholder="search" id="example-search-input" style="background-color: #172b4d; color: white">
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Book</th>
                    <th scope="col" class="sort" data-sort="budget">Author</th>
                    <th scope="col" class="sort" data-sort="status">Class</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="completion">Rack No</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                  
                </tbody>
              </table>
            </div>
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
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-books"></i></span>
                          </div>
                          <input class="form-control book-name" placeholder="Book Name" type="text">
                        </div>
                      </div>
                      <span><small class="book-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                          </div>
                          <input class="form-control author" placeholder="Author" type="text">
                        </div>
                      </div>
                      <span><small class="author-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                          </div>
                          <select class="form-control class" id="select1">
                            <?php
                              foreach ($categories as $key => $data) {
                                echo '<option value="'.$data->code.'">'.$data->categories.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                      </div>
                      <span><small class="class-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control price" placeholder="Price" type="text">
                        </div>
                      </div>
                      <span><small class="price-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
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
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-archive-2"></i></span>
                          </div>
                          <input class="form-control rack" placeholder="Rack No" type="email">
                        </div>
                      </div>
                      <span><small class="rack-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <input class="form-control date" type="date" value="<?php echo date("Y-m-d")?>" id="example-date-input">
                      </div>
                      <span><small >&nbsp</small></span>
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
  <script src="<?php echo base_url()?>assets/vendor/select2/dist/js/select2.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
  <script>
    $(document).ready(function(){

      function books(search){
        var url = '';
        if(search==''){
          url = '<?php echo base_url()?>book/booklist';
        }
        else{
          url = "<?php echo base_url()?>book/booklist/"+search;
        }

        $.ajax({
          url: url,
          type: "GET",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);
            
            var html = '';
            var color = '';
            var status = '';

            if(json!=''){
              json.forEach(element => {

                if(parseInt(element.count)!=0){
                  color = 'bg-success'; 
                  status = 'Available'; 
                }else{
                  color = 'bg-warning'; 
                  status = 'Pending'; 
                }

                html += '<tr>'
                        +'<th scope="row">'
                          +'<div class="media align-items-center">'
                            +'<div class="media-body">'
                              +'<span class="name mb-0 text-sm">'+element.book+'</span>'
                            +'</div>'
                          +'</div>'
                        +'</th>'
                        +'<td class="budget">'
                          +element.author
                        +'</td>'
                        +'<td>'
                          +'<span class="status">'+element.class+'</span>'
                        +'</td>'
                        +'<td>'
                          +'<span class="badge badge-dot mr-4">'
                            +'<i class="'+ color +'"></i>'
                            +'<span class="status">'+ status +' '+element.count+' / '+element.total+'</span>'
                          +'</span>'
                        +'</td>'
                        +'<td>'
                          +'<div class="d-flex align-items-center">'
                            +'<span class="completion mr-2">'+element.rack+'</span>'
                          +'</div>'
                        +'</td>'
                        +'<td class="text-center">'
                          +'<div class="dropdown">'
                            +'<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                              +'<i class="fas fa-ellipsis-v"></i>'
                            +'</a>'
                            +'<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">'
                              +'<a class="dropdown-item details-btn" id="'+element.code+'">Details</a>'
                              +'<a style="display:<?php if($_SESSION['status']=='Librarian Assistant'){echo 'none';}?>" class="dropdown-item edit-btn" id="'+element.code+'">Edit</a>'
                              +'<a style="display:<?php if($_SESSION['status']=='Librarian Assistant'){echo 'none';}?>" class="dropdown-item delete-btn" id="'+element.code+'">Delete</a>'
                            +'</div>'
                          +'</div>'
                        +'</td>'
                      +'</tr>';
              });
            }else{
              html+='<tr><th style="text-align:center" colspan="6">No Books Available</th></tr>'
            }

            html+='<tr><th></th></tr>'
            $('.list').html(html);
            
            query = '';
          }
        });
      }

      var query = '';
      books(query);
      
      $('.search-bar').on('keypress', function (e) {
        if(e.which === 13){

            //Disable textbox to prevent multiple submit
            $(this).attr("disabled", "disabled");
            query = $(this).val();

            books(query);

            //Enable the textbox again if needed.
            $(this).removeAttr("disabled");
        }
      })
      
      $(".add-btn").on('click', function(){

        var book = $('.book-name').val();
        var author = $('.author').val();
        var clss = $('.class').val();
        var price = $('.price').val();
        var count = $('.count').val();
        var rack = $('.rack').val();
        var date = $('.date').val();
        var hasError = null;

        if(book==''&&author==''&&price==''&&count==''&&rack==''){
          $('.book-error').text('Book Name*')
          $('.author-error').text('Author*')
          $('.price-error').text('Price*')
          $('.count-error').text('Count*')
          $('.rack-error').text('Rack No*')
          setTimeout(function(){
            $('.book-error').text('')
            $('.author-error').text('')
            $('.price-error').text('')
            $('.count-error').text('')
            $('.rack-error').text('')
            
            $('.book-error').append('&nbsp;')
            $('.author-error').append('&nbsp;')
            $('.price-error').append('&nbsp;')
            $('.count-error').append('&nbsp;')
            $('.rack-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }else{
          hasError = false;
        }

        if(book==''){
          $('.book-error').text('Book Name*')
          setTimeout(function(){
            $('.book-error').text('')
            $('.book-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(author==''){
          $('.author-error').text('Author*')
          setTimeout(function(){
            $('.author-error').text('')
            $('.author-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(price==''){
          $('.price-error').text('Price*')
          setTimeout(function(){
            $('.price-error').text('')
            $('.price-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(clss==null){
          $('.class-error').text('Categories*')
          setTimeout(function(){
            $('.class-error').text('')
            $('.class-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(count==''){
          $('.count-error').text('Count*')
          setTimeout(function(){
            $('.count-error').text('')
            $('.count-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        if(rack==''){
          $('.rack-error').text('Rack No*')
          setTimeout(function(){
            $('.rack-error').text('')
            $('.rack-error').append('&nbsp;')
          }, 2000);
          hasError = true;
        }
        
        if(hasError==false){
          var data = new FormData();
        
          data.append('book', book);
          data.append('author', author);
          data.append('class', clss);
          data.append('price', price);
          data.append('count', count);
          data.append('rack', rack);
          data.append('date', date);

          $.ajax({
            url: "<?php echo base_url()?>book/addbook",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);
              
              $('#modal-form').modal('hide')
              if(json.msg=='success'){
                $('#modal-notification-success').modal('show')
                $('.book-name').val('');
                $('.author').val('');
                $('.class').val('');
                $('.class option:nth-child(1)').attr('selected', 'true');
                $('.price').val('');
                $('.count').val('');
                $('.rack').val('');
                books(query);
              }
              else if(json.msg=='error'){
                $('#modal-notification-danger').modal('show')
              }
            }
          });
        }
      });
      
      $(document).on('click', ".details-btn", function(){
        window.location.href = '<?php echo base_url()?>book/detailsbook/'+$(this).attr('id');
      });

      $(document).on('click', '.edit-btn', function () {
        window.location.href = '<?php echo base_url()?>book/editbook/'+$(this).attr('id');
      });

      $(document).on('click', '.delete-btn',function () {
        window.location.href = '<?php echo base_url()?>book/deletebook/'+$(this).attr('id');
      });

    });
  </script>
</body>

</html>