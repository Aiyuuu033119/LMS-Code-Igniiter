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
  

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">

            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
            
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <h4 class="card-title text-uppercase text-muted mb-0">Total Books</h4>
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0"><?php echo $books?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-books"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <h4 class="card-title text-uppercase text-muted mb-0">Issued Books</h4>
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0"><?php echo $issue?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-book-bookmark"></i>
                      </div>
                    </div>
                  </div>
                  <!-- <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p> -->
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <h4 class="card-title text-uppercase text-muted mb-0">Returned Books</h4>
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0"><?php echo $return?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-curved-next"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <div class="card-body">
                  <h4 class="card-title text-uppercase text-muted mb-0">Total Categories</h4>
                  <div class="row">
                    <div class="col">
                      <span class="h2 font-weight-bold mb-0"><?php echo $class?><nnng/span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-bullet-list-67"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New Books</h3>
                </div>
                <div class="col text-right">
                  <a href="<?php echo base_url()?>app/booklist" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Category</th>
                    <th scope="col">Rack</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody class="book">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New Students</h3>
                </div>
                <div class="col text-right">
                  <a href="<?php echo base_url()?>app/students" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Member ID</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody class="student">

                </tbody>
              </table>
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
  <script src="<?php echo base_url();?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?php echo base_url();?>assets/js/argon.js?v=1.2.0"></script>
  <script>
    $(document).ready(function(){

      books();
      student();

      function books(){
        $.ajax({
          url: '<?php echo base_url()?>dashboard/books',
          type: "GET",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);
            
            var html = '';
            
            if(json!=''){

              json.forEach(element => {

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
                        +'<td class="budget">'
                          +element.class
                        +'</td>'
                        +'<td class="budget">'
                          +element.rack
                        +'</td>'
                        +'<td class="budget">'
                          +element.price
                        +'</td>'
                      +'</tr>';
              });
            }else{
              html+='<tr><th style="text-align:center" colspan="4">No Issued Books Available</th></tr>'
            }

            html+='<tr><th></th><th></th><th></th><th></th><th></th></tr>'
            $('.book').html(html);
            
          }
        });
      }

      function student(){
        $.ajax({
          url: '<?php echo base_url()?>dashboard/student',
          type: "GET",
          contentType:false,
          processData:false,
          success: function (data) {

            var json = JSON.parse(data);
            
            var html = '';
            
            if(json!=''){

              json.forEach(element => {

                html += '<tr>'
                        +'<th scope="row">'
                          +'<div class="media align-items-center">'
                            +'<div class="media-body">'
                              +'<span class="name mb-0 text-sm">'+element.member_id+'</span>'
                            +'</div>'
                          +'</div>'
                        +'</th>'
                        +'<td class="budget">'
                          +element.name
                        +'</td>'
                      +'</tr>';
              });
            }else{
              html+='<tr><th style="text-align:center" colspan="2">No Issued Books Available</th></tr>'
            }

            html+='<tr><th></th><th></th></tr>'
            $('.student').html(html);
            
          }
        });
      }

    });
  </script>
</body>

</html>
