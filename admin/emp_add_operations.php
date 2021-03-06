<?php
include('includes/emp_header.php');
include('includes/emp_nav.php');
?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Employee</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">&nbsp<i class="fas fa-fw fa-plus">&nbsp</i>Add Operations
          </h1><hr>
        </div>
        <!-- /.container-fluid -->
       <form class="user form-group" method="post" action="connection.php" style="padding: 20px;" enctype="multipart/form-data">
        <h3>Patient Details:</h3><br>
        <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Upload Patient's Photo:</label><br>
                    <input type="file" name="image" required>
                  </div>
        </div>

        <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>First Name</label>
                    <input type="text" class="form-control form-control-user" name="fname" placeholder="First Name" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Middle Name</label>
                    <input type="text" class="form-control form-control-user" name="mname" placeholder="Middle Name">
                  </div>
                  <div class="col-sm-4">
                    <label>Last Name</label>
                    <input type="text" class="form-control form-control-user" name="lname" placeholder="Last Name" required>
                  </div>
        </div>
        <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Father's Name</label>
                    <input type="text" class="form-control form-control-user" name="fatname" placeholder="Father's Name" required>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Address</label>
                    <input type="text" class="form-control form-control-user" name="add" placeholder="Address" required>
                  </div>
                  <div class="col-sm-4">
                    <label>Contact</label>
                    <input type="text" class="form-control form-control-user" name="con" placeholder="Contact No." required>
                  </div>
        </div>
        <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Operation Date</label>
                    <input type="date" class="form-control form-control-user" name="opdate" placeholder="Collection Date" required>
                  </div>
                  <div class="col-sm-4">
                    <label>Time</label>
                    <input type="time" class="form-control form-control-user" name="time" placeholder="Time" required>
                  </div>
        </div>
        <hr>
<!-- test deatils Ashish -->
<h3 class="m-0 font-weight-bold text-primary">Operation Details:</h3><br>
      <div class="row">
        <div class="col-sm-4">
          <label>Operation:</label>
          <select class="form-control" style="color: blue;" name="opname" required>
            <option value="NULL">--Select--</option>
            <option value="Intestine Surgery">Intestine Surgery</option>
            <option value="Ortho Surgery">Ortho Surgery</option>
            <option value="Cancer Surgery">Cancer Surgery</option>
            <option value="Neural Surgery">Neural Surgery</option>
            <option value="Uro Surgery">Uro Surgery</option>
            <option value="Open Heart Surgery">Open Heart Surgery</option>
            <option value="Burn Surgery">Burn Surgery</option>
            <option value="Contaract Surgery">Contaract Surgery</option>
            <option value="Needle Biosopy">Needle Biosopy</option>
            <option value="Skin Sparsing Mastectomy">Skin Sparsing Mastectomy</option>
          </select>
        </div>

        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <label>Doctor's Name:</label>
            <select class="form-control" style="color: blue;" name="docname" required>
              <option value="NULL">--Select--</option>
              <option value="Dr.Rajiv Kumar Gupta">Dr. Rajiv Kumar Gupta</option>
              <option value="Dr.Harshit Agrahari">Dr. Harshit Agrahari</option>
              <option value="Dr.Vivek Das">Dr. Vivek Das</option>
              <option value="Dr.Pooja Verma">Dr. Pooja Verma</option>
              <option value="Dr.S.K.Sarraf">Dr. S.K.Sarraf</option>
              <option value="Dr.C Rameshwar">Dr. C Rameshwar</option>
              <option value="Dr.Vijay Singh">Dr. Vijay Singh</option>
              <option value="Dr.Ashish Sehgal">Dr. Ashish Sehgal</option>
              <option value="Dr.Neha Kapoor">Dr. Neha Kapoor</option>
              <option value="Dr.Rohit Tondon">Dr. Rohit Tondon</option>
            </select>
        </div>
      </div><br><br>

     

<!-- button -->
        <div class="row">
          <div class="col-sm-5"></div>
          <div class="col-sm-2">
             <input type="submit" name="operation_btn" value="Submit" class="btn btn-success btn-user btn-block" style="margin-top: 20px;">
          </div>
        </div>
               
          </form>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Techniqa Solution</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
