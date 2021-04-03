
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
                  <li class="breadcrumb-item active" aria-current="page">Issued Books</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a data-toggle="modal" data-target="#modal-form" class="btn btn-sm btn-neutral"><i class="ni ni-book-bookmark"></i>&nbsp;Issue</a>
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
              <h3 class="text-white mb-0">History: Issued Books</h3>
              <div class="form-group mb-0">
                <input class="form-control search-bar" type="search" placeholder="search" id="example-search-input" style="background-color: #172b4d; color: white">
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="budget">Book</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col">Date Issued</th>
                    <th scope="col" class="sort" data-sort="completion">Date Return</th>
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
                  <div class="text-muted text-center"><h2 class="mb-0">New Issue Book</h2></div>
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
                          <input class="form-control member" placeholder="Member ID" maxlength="8" type="text">
                        </div>
                      </div>
                      <span><small class="member-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <div class="input-group input-group-merge input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ni ni-books"></i></span>
                          </div>
                          <input class="form-control code" placeholder="Book Code" maxlength="5" type="text">
                        </div>
                      </div>
                      <span><small class="code-error text-red">&nbsp</small></span>
                    </div>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <input class="form-control issue" type="date" value="<?php echo date("Y-m-d")?>" id="example-date-input" disabled>
                      </div>
                      <span><small class="text-success">Date Issued</small></span>
                    </div>
                    <?php 
                      foreach ($info as $data) {
                    ?>
                    <div class="col-lg-6 mb-2">
                      <div class="form-group mb-0">
                        <input class="form-control return" type="date" value="<?php echo date('Y-m-d', strtotime(date("Y-m-d") . ' +'.$data->days_borrowed.' day'))?>" id="example-date-input" disabled>
                      </div>
                      <span><small class="text-success">Date Return</small></span>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary issue-btn">Issue</button>
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
                <p>Successfully Issue Book</p>
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
          url = '<?php echo base_url()?>issue/issuelist';
        }
        else{
          url = "<?php echo base_url()?>issue/issuelist/"+search;
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

                if(element.status=='Return'){
                  color = 'bg-success'; 
                }else{
                  color = 'bg-warning'; 
                }

                html += '<tr>'
                        +'<th scope="row">'
                          +'<div class="media align-items-center">'
                            +'<div class="media-body">'
                              +'<span class="name mb-0 text-sm">'+element.name+'</span>'
                            +'</div>'
                          +'</div>'
                        +'</th>'
                        +'<td class="budget">'
                          +element.book
                        +'</td>'
                        +'<td>'
                          +'<span class="badge badge-dot mr-4">'
                            +'<i class="'+ color +'"></i>'
                            +'<span class="status">'+ element.status +'</span>'
                          +'</span>'
                        +'</td>'
                        +'<td>'
                          +'<div class="d-flex align-items-center">'
                            +'<span class="completion mr-2">'+element.issued+'</span>'
                          +'</div>'
                        +'</td>'
                        +'<td>'
                          +'<div class="d-flex align-items-center">'
                            +'<span class="completion mr-2">'+element.return+'</span>'
                          +'</div>'
                        +'</td>'
                        +'<td class="text-center">'
                          +'<div class="dropdown">'
                            +'<a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
                              +'<i class="fas fa-ellipsis-v"></i>'
                            +'</a>'
                            +'<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">'
                              +'<a class="dropdown-item details-btn" id="'+element.id+'">Details</a>'
                              +'<a class="dropdown-item edit-btn" id="'+element.id+'">Edit</a>'
                              +'<a class="dropdown-item delete-btn" id="'+element.id+'" data-rel="'+element.code+'">Delete</a>'
                            +'</div>'
                          +'</div>'
                        +'</td>'
                      +'</tr>';
              });
            }else{
              html+='<tr><th style="text-align:center" colspan="6">No Issued Books Available</th></tr>'
            }

            html+='<tr><th></th><th></th><th></th><th></th><th></th><th></th></tr>'
            $('.list').html(html);
            
            query = '';
          }
        });
      }

      var query = '';
      list(query);
      
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

      var memberHasError = true;
      var codeHasError = true;

      $('.member').on('change',function(){
        var length = $(this).val().length;

        if(length=='8'){

          var data = new FormData();
        
          data.append('member', $(this).val());
          
          $.ajax({
            url: "<?php echo base_url()?>issue/user",
            type: "POST",
            data: data,
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);

              if(json.length==0){
                $('.member-error').attr('class', ' member-error text-danger')
                $('.member-error').text('Member ID Invalid*')
          
                $('.issue').val('');
                $('.expire').val('');

                memberHasError = true;
              }
              else{

                $('.member-error').attr('class', ' member-error text-success')
                $('.member-error').text('Member ID Valid')

                var member = $('.member').val();
                var code = $('.code').val();

                if(code!=''){
                  var data101 = new FormData();
                  data101.append('member', member);
                  data101.append('code', code);

                  $.ajax({
                    url: "<?php echo base_url()?>issue/retrieve",
                    type: "POST",
                    data: data101,
                    contentType:false,
                    processData:false,
                    success: function (data) {
                      
                      var json = JSON.parse(data);

                      if(json[0].status=='Pending'){
                        $('.code-error').attr('class', ' code-error text-danger')
                        $('.code-error').text('Book Code Invalid*')

                        codeHasError = true;
                      }
                      else{
                        $('.code-error').attr('class', 'text-success code-error')
                        $('.code-error').text('Book is Available*')

                        codeHasError = false;
                      }
                      
                    }
                  });
                }
              }

            }
          });
        }
      })

      $('.code').on('change',function(){
        var length = $(this).val().length;

        if(length=='5'){

          var data = new FormData();
        
          data.append('code', $(this).val());
          
          $.ajax({
            url: "<?php echo base_url()?>issue/code",
            type: "POST",
            data: data,
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);

              if(json.length==0){
                $('.code-error').attr('class', ' code-error text-danger')
                $('.code-error').text('Book Code Invalid*')

                codeHasError = true;
              }
              else{

                $('.code-error').attr('class', ' code-error text-success')
                $('.code-error').text('Book Code Valid')

                var member = $('.member').val();
                var code = $('.code').val();

                if(member!=''){
                  var data101 = new FormData();
                  data101.append('member', member);
                  data101.append('code', code);

                  $.ajax({
                    url: "<?php echo base_url()?>issue/retrieve",
                    type: "POST",
                    data: data101,
                    contentType:false,
                    processData:false,
                    success: function (data) {
                      
                      var json = JSON.parse(data);

                      console.log(json);

                      if(json[0].status=='Pending'){
                        $('.code-error').attr('class', ' code-error text-danger')
                        $('.code-error').text('Book Code Invalid*')

                        codeHasError = true;
                      }
                      else{
                        $('.code-error').attr('class', 'text-success code-error')
                        $('.code-error').text('Book is Available*')

                        codeHasError = false;
                      }
                      
                    }
                  });
                }

              }

            }
          });
        }
      })

      $('.issue-btn').on('click', function(){

        var member = $('.member').val();
        var code = $('.code').val();
        var issue = $('.issue').val();
        var rturn = $('.return').val();

        var hasError = null;
        if(member==''||memberHasError==true&&code==''||codeHasError==true){
          $('.member-error').text('Member ID*')
          $('.code-error').text('Book Code*')
          
          hasError = true;
        }else{
          hasError = false;
        }

        if(member==''&&memberHasError==true){
          $('.member-error').text('Member ID*')
          
          hasError = true;
        }
        if(code==''&&codeHasError==true){
          $('.code-error').text('Member ID*')
          
          hasError = true;
        }
        // if(rturn==''){
        //   $('.code-error').text('Book Code*')
          
        //   setTimeout(function(){
        //     $('.code-error').text('')
        //     $('.code-error').append('&nbsp;')
        //   }, 2000);
        //   hasError = true;
        // }

        if(hasError==false){
          var data = new FormData();
        
          data.append('member', member);
          data.append('code', code);
          data.append('issued', issue);
          data.append('return', rturn);

          $.ajax({
            url: "<?php echo base_url()?>issue/addissue",
            data: data,
            type: "POST",
            contentType:false,
            processData:false,
            success: function (data) {

              var json = JSON.parse(data);
              
              $('#modal-form').modal('hide')
              if(json.msg=='success'){
                $('#modal-notification-success').modal('show')
                $('.member').val('');
                $('.code').val('');
                list(query);
              }
              else if(json.msg=='error'){
                $('#modal-notification-danger').modal('show')
              }
            }
          });
        }
      });

      $(document).on('click','.details-btn', function(){
        window.location.href = '<?php echo base_url()?>issue/detailsissue/'+$(this).attr('id');
      });

      $(document).on('click','.edit-btn', function(){
        window.location.href = '<?php echo base_url()?>issue/editissue/'+$(this).attr('id');
      });

      $(document).on('click','.delete-btn', function(){
        $('#modal-notification-remind').modal('show');

        $('.sure-btn').attr('data-relay',$(this).attr('id'));
        $('.sure-btn').attr('data-code',$(this).attr('data-rel'));
      });

      $(document).on('click', '.sure-btn', function(){
        
        var data = new FormData();
        
        data.append('id', parseInt($(this).attr('data-relay')));
        data.append('code', $(this).attr('data-code'));

        $.ajax({
          url: "<?php echo base_url()?>issue/delete",
          data: data,
          type: "POST",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);
          // console.log(json);
            // return false;
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