<!DOCTYPE html>
<html lang="en">

  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wedding Bells</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    
    
    
    
    
    <style>
    * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#dataTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#dataTable th, #dataTable td {
  text-align: left;
  padding: 12px;
}

#dataTable tr {
  border-bottom: 1px solid #ddd;
}

#dataTable tr.header, #dataTable tr:hover {
  background-color: #f1f1f1;
}
    
    
    
    
    </style>
    
    
    
    
    
    

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index1.php">Wedding Bells!</a>
        
      <!-- Navbar Search -->
     <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
        
          
    	
            </button>
          </div>
        </div>
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index1.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Approved Users</span>
          </a>
        </li>
        
        
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Pending Users</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="index2.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Add Request</span>
            </a>
            
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="index3.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Approved Request</span>
            </a>
            
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="index4.php">
                <i class="fas fa-fw fa-table">
                </i>
                <span>
                    Events
                </span>
            </a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
    
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Wedding Bells Users</div>
              <br>
            <b>Search:</b>  <input type="search" class="light-table-filter" data-table="order-table" placeholder="Search by name email dob or id" style="height:50%;">

            <div class="card-body">
              <div class="table-responsive">
                <table <table class="order-table table" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Last Name</th>
                      <th>Address</th>
                      <th>Date Of Birth</th>
                      <th>Approval</th>
                    </tr>
                  </thead>
    <?php
 $conn= $conn=mysqli_connect("localhost","u757577044_root","r00000t","u757577044_wb");
        
    $sql = "SELECT * FROM user_profile";
  
    $result = mysqli_query($conn, $sql);
                    
    while($row=mysqli_fetch_array($result))
    {

                 
                  echo "<tbody> <tr> <td>";
                  echo  $row['u_id'];  
                  echo "</td> <td>";
                  echo  $row['first_name'];  
                  echo "</td> <td>";
                  echo  $row['surname'];  
                  echo "</td>  <td>";
                  echo $row['addr'];  
                  echo "</td> <td>";
                  echo $row['dob'];  
                  echo "</td><td>";
                  echo "<form action= 'btn.php'> <button name='btn1' id = 'btn1' type ='submit' value=' ". $row['id']. " ' > Confirm </button> 
                  </form>";
                   echo "</td><td>";
                     echo "<form action= 'reject.php'> <button name='btn2' id = 'btn2' type ='submit' value=' ". $row['id']. " ' > Reject </button> 
                      </form>";
                  echo "</tbody>";
    
    }
            mysqli_close($conn);
                   
    ?>  
                    
                      
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More users coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Wedding Bells! 2018</span>
              <span>Developed by Mehul Kothari and Suhani Chacha</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
            <a class="btn btn-primary" href="../LogIn/ad_logIn.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
 
      <!-- confirm button script -->
      <script>
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
  
</script>


 
  </body>

</html>
