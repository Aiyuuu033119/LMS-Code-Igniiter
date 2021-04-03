<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main" style="z-index:1">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url();?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php echo $title == 'Dashboard' ? 'active' : '' ?>"
                <?php 
                  echo $title != 'Dashboard' ? "href=".base_url()."app/dashboard" : '';
                ?>>
                <i class="ni ni-app text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $title == 'Book List'||$title == 'Book Details'||$title == 'Edit Books'||$title == 'Delete Books' ? 'active' : '' ?>"
                <?php 
                  echo $title != 'Book List' ? "href=".base_url()."app/booklist" : '';
                ?>>
                <i class="ni ni-books text-orange"></i>
                <span class="nav-link-text">Book List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $title == 'Issued Books'||$title == 'Issued Details'||$title == 'Edit Issued Details' ? 'active' : '' ?>" 
                <?php 
                  echo $title != 'Issued Books' ? "href=".base_url()."app/issuebook" : '';
                ?>>
                <i class="ni ni-book-bookmark text-success"></i>
                <span class="nav-link-text">Issued Books</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $title == 'Returned Books'||$title == 'Edit Return Details'||$title == 'Returned Details' ? 'active' : '' ?>"
                <?php 
                  echo $title != 'Returned Books' ? "href=".base_url()."app/returnbook" : '';
                    
                ?>>
                <i class="ni ni-curved-next text-red"></i>
                <span class="nav-link-text">Returned Books</span>
              </a>
            </li>
            <?php
              if($_SESSION['status']!='Librarian Assistant'){
            ?>
              <li class="nav-item">
                <a class="nav-link <?php echo $title == 'Categories' ? 'active' : '' ?>"
                  <?php 
                    echo $title != 'Categories' ? "href=".base_url()."app/categories" : '';
                  ?>>
                  <i class="ni ni-bullet-list-67 text-pink"></i>
                  <span class="nav-link-text">Categories</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $title == 'Generate Reports' ? 'active' : '' ?>"
                  <?php 
                    echo $title != 'Generate Reports' ? "href=".base_url()."app/generatereports" : '';
                  ?>>
                  <i class="ni ni-chart-pie-35 text-default"></i>
                  <span class="nav-link-text">Generate Reports</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $title == 'Students' ? 'active' : '' ?>"  
                  <?php 
                    echo $title != 'Students' ? "href=".base_url()."app/students" : '';
                  ?>>
                  <i class="ni ni-badge text-pink"></i>
                  <span class="nav-link-text">Students</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $title == 'Administrator' ? 'active' : '' ?>"  
                  <?php 
                    echo $title != 'Administrator' ? "href=".base_url()."app/administrator" : '';
                  ?>>
                  <i class="ni ni-circle-08 text-yellow"></i>
                  <span class="nav-link-text">Administrator</span>
                </a>
              </li>
            <?php 
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>