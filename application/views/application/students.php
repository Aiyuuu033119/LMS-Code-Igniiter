
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
  $this->load->view('application/include/headers');
?> 
  <?php
    $this->load->view('application/include/sidenav');
  ?> 

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
                  <li class="breadcrumb-item active" aria-current="page">Students</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a data-toggle="modal" data-target="#modal-form" class="btn btn-sm btn-neutral"><i class="fas fa-plus"></i>&nbsp;Add</a>
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
              <h3 class="text-white mb-0">Students Lists</h3>
              <div class="form-group mb-0">
                <input class="form-control search-bar" type="search" placeholder="search" id="example-search-input" style="background-color: #172b4d; color: white">
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Members ID</th>
                    <th scope="col" class="sort" data-sort="budget">Student</th>
                    <th scope="col" class="sort" data-sort="name">Grade & Section</th>
                    <th scope="col" class="sort" data-sort="name">Contact #</th>
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
                  <div class="text-muted text-center"><h2 class="mb-0">New Students</h2></div>
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
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                          </div>
                          <input class="form-control name" placeholder="Student Name" type="text">
                        </div>
                      </div>
                      <span><small class="name-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                          </div>
                          <input class="form-control section" placeholder="Grade & Section" type="text">
                        </div>
                      </div>
                      <span><small class="section-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                          </div>
                          <input class="form-control contact" placeholder="Contact Number" type="text">
                        </div>
                      </div>
                      <span><small class="contact-error text-red">&nbsp</small></span>
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

      <div class="modal fade" id="modal-form-edit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true" style="z-index:10001">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                <div class="card-header bg-transparent" style="display: flex;justify-content: space-between;align-items: center;">
                  <div class="text-muted text-center"><h2 class="mb-0">Edit Categories</h2></div>
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
                              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                          </div>
                          <input class="form-control name-edit" placeholder="Student Name" type="text">
                        </div>
                      </div>
                      <span><small class="name-edit-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                          </div>
                          <input class="form-control section-edit" placeholder="Grade & Section" type="text">
                        </div>
                      </div>
                      <span><small class="section-edit-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                          </div>
                          <input class="form-control contact-edit" placeholder="Contact Number" type="text">
                        </div>
                      </div>
                      <span><small class="contact-edit-error text-red">&nbsp</small></span>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary update-btn">Edit</button>
                  </div>
                </div>
              </div>
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
      
      <div class="modal fade" id="modal-notification-danger" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-danger">

          <div class="modal-body">
              
              <div class="py-3 text-center">
                <i class="ni ni-fat-remove ni-3x"></i>
                <h4 class="heading mt-4">Error!</h4>
                <p class="modal-text-error">There is error on the server</p>
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
                <p>Successfully Added New Student</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
              <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
            </div>
              
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-notification-success-edit" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-success">

          <div class="modal-body">
              
              <div class="py-3 text-center">
                <i class="ni ni-bell-55 ni-3x"></i>
                <h4 class="heading mt-4">Success!</h4>
                <p>Successfully Updated Student</p>
              </div>
                
            </div>
              
            <div class="modal-footer mt-0">
              <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
              <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> -->
            </div>
              
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-notification-success-delete" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
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
  <script src="<?php echo base_url()?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url()?>assets/js/argon.js?v=1.2.0"></script>
  <script>
    $(document).ready(function(){
      function list(search){
        var url = '';
        if(search==''){
          url = '<?php echo base_url()?>students/studentlist';
        }
        else{
          url = "<?php echo base_url()?>students/studentlist/"+search;
        }

        $.ajax({
          url: url,
          type: "GET",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);
            
            var html = '';

            if(json!=''){
              json.forEach(element => {

                html += '<tr>'
                    +'<th scope="col" class="sort" data-sort="budget">'+element.member_id+'</th>'
                    +'<td scope="col" class="sort" data-sort="budget">'+element.name+'</td>'
                    +'<td scope="col" class="sort" data-sort="name">'+element.section+'</td>'
                    +'<td scope="col" class="sort" data-sort="name">'+element.contact+'</td>'
                    +'<td class="text-center">'
                        +'<div class="dropdown">'
                          +'<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                            +'<i class="fas fa-ellipsis-v"></i>'
                          +'</a>'
                          +'<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">'
                            +'<a class="dropdown-item edit-btn" id="'+element.id+'" >Edit</a>'
                            +'<a class="dropdown-item delete-btn" id="'+element.id+'">Delete</a>'
                          +'</div>'
                        +'</div>'
                      +'</td>'
                  +'</tr>';
              });
            }else{
              html+='<tr><th style="text-align:center" colspan="5">No Students Available</th></tr>'
            }

            html+='<tr><th></th><th></th><th></th></tr>'
            $('.list').html(html);
            
            query = '';
          }
        });
      }

      var query = '';
      list(query);

      $(document).on('click', '.add-btn', function(){
        var name = $('.name').val();
        var section = $('.section').val();
        var contact = $('.contact').val();

        var hasError;
        if(name==''&&section==''&&contact==''){
          $('.name-error').text('Student Name*')
          $('.section-error').text('Grade & Section*')
          $('.contact-error').text('Contact Number*')
          
          setTimeout(function(){
            $('.name-error').text('')
            $('.section-error').text('')
            $('.contact-error').text('')
            $('.name-error').append('&nbsp;')
            $('.section-error').append('&nbsp;')
            $('.contact-error').append('&nbsp;')
          }, 2000);

          hasError = true;
        }
        else{
          hasError = false;
        }

        if(name==''){
            $('.name-error').text('Student Name*')
          
            setTimeout(function(){
                $('.name-error').text('')
                $('.name-error').append('&nbsp;')
            }, 2000);

            hasError = true;
        }
        if(section==''){
            $('.section-error').text('Grade & Section*')
          
            setTimeout(function(){
                $('.section-error').text('')
                $('.section-error').append('&nbsp;')
            }, 2000);

          hasError = true;
        }
        if(contact==''){
            $('.contact-error').text('Contact Number*')
          
            setTimeout(function(){
                $('.contact-error').text('')
                $('.contact-error').append('&nbsp;')
            }, 2000);

          hasError = true;
        }

        if(hasError==false){
          var data = new FormData();
        
          data.append('name', name);
          data.append('section', section);
          data.append('contact', contact);

          $.ajax({
            url: "<?php echo base_url()?>students/addstudent",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

                var json = JSON.parse(data);
                
                $('#modal-form').modal('hide')

                if(json.msg=='success'){
                    list(query);
                    $('.name').val('');
                    $('.section').val('');
                    $('.contact').val('');
                    $('#modal-notification-success').modal('show')
                }
                else if(json.msg=='error'){
                    $('.modal-text-error').text('The category name and code are invalid!');
                    $('#modal-notification-danger').modal('show')
                }
            }
          });
        }
      });

      $(document).on('click','.edit-btn', function(){
        var currentRow=$(this).closest("tr"); 
         
        var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
        var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        var col3=currentRow.find("td:eq(2)").text(); // get current row 2nd TD

        $('.name-edit').val(col1);
        $('.section-edit').val(col2);
        $('.contact-edit').val(col3);
        $('.update-btn').attr('id', $(this).attr('id'))
        $('#modal-form-edit').modal('show');
      });

      $(document).on('click', '.update-btn', function(){
        var name = $('.name-edit').val();
        var section = $('.section-edit').val();
        var contact = $('.contact-edit').val();

        var hasError;
        if(name==''&&section==''&&contact==''){
          $('.name-edit-error').text('Student Name*')
          $('.section-edit-error').text('Grade & Section*')
          $('.contact-edit-error').text('Contact Number*')
          
          setTimeout(function(){
            $('.name-edit-error').text('')
            $('.section-edit-error').text('')
            $('.contact-edit-error').text('')
            $('.name-edit-error').append('&nbsp;')
            $('.section-edit-error').append('&nbsp;')
            $('.contact-edit-error').append('&nbsp;')
          }, 2000);

          hasError = true;
        }
        else{
          hasError = false;
        }

        if(name==''){
            $('.name-edit-error').text('Student Name*')
          
            setTimeout(function(){
                $('.name-edit-error').text('')
                $('.name-edit-error').append('&nbsp;')
            }, 2000);

            hasError = true;
        }
        if(section==''){
            $('.section-edit-error').text('Grade & Section*')
          
            setTimeout(function(){
                $('.section-edit-error').text('')
                $('.section-edit-error').append('&nbsp;')
            }, 2000);

          hasError = true;
        }
        if(contact==''){
            $('.contact-edit-error').text('Contact Number*')
          
            setTimeout(function(){
                $('.contact-edit-error').text('')
                $('.contact-edit-error').append('&nbsp;')
            }, 2000);

          hasError = true;
        }

        if(hasError==false){
          var data = new FormData();
        
          data.append('name', name);
          data.append('section', section);
          data.append('contact', contact);
          data.append('id', $(this).attr('id'));

          $.ajax({
            url: "<?php echo base_url()?>students/editstudent",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);

              $('#modal-form-edit').modal('hide')

              if(json.msg=='success'){
                list(query);
                $('#modal-notification-success-edit').modal('show')
              }
              else if(json.msg=='error'){
                $('#modal-notification-danger').modal('show')
              }
            }
          });
        }
      });

    

      $('.search-bar').on('keypress', function (e) {
        if(e.which === 13){

            //Disable textbox to prevent multiple submit
            $(this).attr("disabled", "disabled");
            query = $(this).val();

            list(query);

            //Enable the textbox again if needed.
            $(this).removeAttr("disabled");
        }
      })

      $(document).on('click','.delete-btn', function(){
        $('.sure-btn').attr('id', $(this).attr('id'));
        $('#modal-notification-remind').modal('show');
      });

      $(document).on('click', '.sure-btn', function(){
        
        var data = new FormData();
        
        data.append('id', $(this).attr('id'));

        $.ajax({
          url: "<?php echo base_url()?>students/deletestudent",
          data: data,
          type: "POST",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);

            if(json.msg=='success'){
              $('#modal-notification-success-delete').modal('show')
              list(query);
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