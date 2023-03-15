<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>Ayto. Humilladero</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<!-- JQVMap -->
		<link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../dist/css/adminlte.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
		<!-- summernote -->
		<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
		<!-- fullCalendar -->
  		<link rel="stylesheet" href="../plugins/fullcalendar/main.css">
  		<!-- DataTables -->
		  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
		  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	</head>
	<body class="loggedin hold-transition sidebar-mini layout-fixed fixed" >
		<div class="wrapper">
		  </div>
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			  <!-- Left navbar links -->
			  <ul class="navbar-nav">
			    <li class="nav-item">
			      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			    </li>
			    <li class="nav-item d-none d-sm-inline-block">
			      <a href="home.php" class="nav-link">Inicio</a>
			    </li>
			    <li class="nav-item d-none d-sm-inline-block">
			      <a href="#" class="nav-link">Contactar</a>
			    </li>
			    <li class="nav-item dropdown">
			      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        Ayuda
			      </a>
			      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
			        <a class="dropdown-item" href="#">FAQ</a>
			        <a class="dropdown-item" href="#">Soporte</a>
			        <div class="dropdown-divider"></div>
			        <a class="dropdown-item" href="#">Contactar</a>
			      </div>
			    </li>
			  </ul>

			  <!-- SEARCH FORM -->
			  <form class="form-inline ml-3">
			    <div class="input-group input-group-sm">
			      <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
			      <div class="input-group-append">
			        <button class="btn btn-navbar" type="submit">
			          <i class="fas fa-search"></i>
			        </button>
			      </div>
			    </div>
			  </form>

			  <!-- Right navbar links -->
			  <ul class="navbar-nav ml-auto">
			    <!-- Messages Dropdown Menu -->
			    <li class="nav-item dropdown">
			      <a class="nav-link" data-toggle="dropdown" href="#">
			        <i class="far fa-comments"></i>
			        <span class="badge badge-danger navbar-badge">3</span>
			      </a>
			      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			        <a href="#" class="dropdown-item">
			          <!-- Message Start -->
			          <div class="media">
			            <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
			            <div class="media-body">
			              <h3 class="dropdown-item-title">
			                Brad Diesel
			                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
			              </h3>
			              <p class="text-sm">Call me whenever you can...</p>
			              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
			            </div>
			          </div>
			          <!-- Message End -->
			        </a>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item">
			          <!-- Message Start -->
			          <div class="media">
			            <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
			            <div class="media-body">
			              <h3 class="dropdown-item-title">
			                John Pierce
			                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
			              </h3>
			              <p class="text-sm">I got your message bro</p>
			              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
			            </div>
			          </div>
			          <!-- Message End -->
			        </a>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item">
			          <!-- Message Start -->
			          <div class="media">
			            <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
			            <div class="media-body">
			              <h3 class="dropdown-item-title">
			                Nora Silvester
			                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
			              </h3>
			              <p class="text-sm">The subject goes here</p>
			              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
			            </div>
			          </div>
			          <!-- Message End -->
			        </a>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
			      </div>
			    </li>
			    <!-- Notifications Dropdown Menu -->
			    <li class="nav-item dropdown">
			      <a class="nav-link" data-toggle="dropdown" href="#">
			        <i class="far fa-bell"></i>
			        <span class="badge badge-warning navbar-badge">15</span>
			      </a>
			      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			        <span class="dropdown-header">15 Notifications</span>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item">
			          <i class="fas fa-envelope mr-2"></i> 4 new messages
			          <span class="float-right text-muted text-sm">3 mins</span>
			        </a>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item">
			          <i class="fas fa-users mr-2"></i> 8 friend requests
			          <span class="float-right text-muted text-sm">12 hours</span>
			        </a>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item">
			          <i class="fas fa-file mr-2"></i> 3 new reports
			          <span class="float-right text-muted text-sm">2 days</span>
			        </a>
			        <div class="dropdown-divider"></div>
			        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
			      </div>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
			          class="fas fa-th-large"></i></a>
			    </li>
			  </ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
			  <!-- Brand Logo -->
			  <a href="home.php" class="brand-link">
			    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
			         style="opacity: .8">
			    <span class="brand-text font-weight-light">Ayto. Humilladero</span>
			  </a>

			  <!-- Sidebar -->
			  <div class="sidebar">
			    <!-- Sidebar user panel (optional) -->
			    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
			      <div class="image">
			        <img src="../imagenes/Escudo_humilladero.png"  alt="User Image" >
			      </div>
			      <div class="info">
			      	<a href="#" class="d-block"><?=$_SESSION['nombre']?></a>
			      </div>
			    </div>

			    <!-- Sidebar Menu -->
			    <nav class="mt-2">
			      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
			        <!-- Add icons to the links using the .nav-icon class
			             with font-awesome or any other icon font library -->
			        <li class="nav-item">
			          <a href="home.php" class="nav-link">
			            <i class="nav-icon fa-solid fa-house"></i>
			            <p>
			              Inicio
			            </p>
			          </a>
			        </li>
			        <?php
			         	if($_SESSION['acceso_agenda'] == 1 ){
			         ?>
			        <li class="nav-item">
			          <a href="agenda.php" class="nav-link">
			            <i class="nav-icon fa-solid fa-phone"></i>
			            <p>
			              Agenda Telefónica
			            </p>
			          </a>
			        </li>
			        <?php
			    		}
			         	if($_SESSION['acceso_archivo'] == 1 ){
			         ?>
			        <li class="nav-item">
			          <a href="archivo.php" class="nav-link active">
			            <i class="nav-icon fa-solid fa-box-archive"></i>
			            <p>
			              Archivo
			              <span class="right badge badge-danger">New</span>
			            </p>
			          </a>
			        </li>
			        <?php
			    		}
			         	if($_SESSION['acceso_urbanismo'] == 1 ){
			         ?>
			        <li class="nav-item">
			          <a href="#" class="nav-link">
			            <i class="nav-icon fa-solid fa-tree-city"></i>
			            <p>
			              Urbanismo
			              <i class="right fas fa-angle-left"></i>
			            </p>
			          </a>
			          <ul class="nav nav-treeview">
			            <li class="nav-item">
			              <a href="#" class="nav-link">
			                <i class="far fa-circle nav-icon"></i>
			                <p>Control de Expedientes</p>
			              </a>
			            </li>
			            <li class="nav-item">
			              <a href="#" class="nav-link">
			                <i class="far fa-circle nav-icon"></i>
			                <p>Control de Expedientes 2</p>
			              </a>
			            </li>
			          </ul>
			        </li>
			        <?php
			    		}
			    	if($_SESSION['acceso_personal'] == 1 ){
			         ?>
			        <li class="nav-item">
			          <a href="#" class="nav-link">
			            <i class="nav-icon fa-solid fa-people-group"></i>
			            <p>
			              Recursos Humanos
			              <i class="right fas fa-angle-left"></i>
			            </p>
			          </a>
			          <ul class="nav nav-treeview">
			            <li class="nav-item">
			              <a href="#" class="nav-link">
			                <i class="far fa-circle nav-icon"></i>
			                <p>Pickar</p>
			              </a>
			            </li>
			            <li class="nav-item">
			              <a href="#" class="nav-link">
			                <i class="far fa-circle nav-icon"></i>
			                <p>Nóminas</p>
			              </a>
			            </li>
			          </ul>
			        </li>
			        <?php
			    		}
			    	?>
			      </ul>
			    </nav>
			    <!-- /.sidebar-menu -->
			  </div>
			  <!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			  <div class="content-wrapper">
			    <!-- Content Header (Page header) -->
			    <section class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1>Agenda Telefónica</h1>
			          </div>
			          <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
			              <li class="breadcrumb-item active">Agenda Telefónica</li>
			            </ol>
			          </div>
			        </div>
			      </div><!-- /.container-fluid -->
			    </section>

			    <!-- Main content -->
			    <section class="content">
			      <div class="container-fluid">
			        <div class="row">
			          <div class="col-12">
			            <div class="card">
			              <div class="card-header">
			                <h3 class="card-title">Datos Agenda</h3>
			              </div>
			              <!-- /.card-header -->
			              <div class="card-body">
			                <table id="example1" class="table table-bordered table-striped">
			                  <thead>
			                  <tr>
			                    <th>Nombre</th>
			                    <th>Tema</th>
			                    <th>Contacto</th>
			                    <th>Tlfn 1</th>
			                    <th>Tlfn 2</th>
			                    <th>Tlfn 3</th>
			                    <th>Tlfn 4</th>
			                    <th>Fax</th>
			                    <th>Email</th>
			                    <th>Web</th>
			                    <th>Móvil 1</th>
			                    <th>Móvil 2</th>
			                    <th>Móvil 3</th>
			                    <th>Móvil 4</th>
			                    <th>Observaciones</th>
			                  </tr>
			                  </thead>
			                  <tbody>
			                  <?php
				                  $servername = "10.4.14.71";
								  $username = "mysql_user";
								  $password = "Hum1ll@d3r0";
								  $dbname = "humilladero";

								  // Conexión a la base de datos
								  $conn = mysqli_connect($servername, $username, $password, $dbname);

								  // Verificar la conexión
							      if (!$conn) {
							 	  die("Conexión fallida: " . mysqli_connect_error());
								  }

							      // Realizar la consulta
							      $sql = "SELECT * FROM tbl_agenda";
							      $resultado = mysqli_query($conn, $sql);

							      // Verificar si hay resultados
							      if (mysqli_num_rows($resultado) > 0) {
							        // Mostrar los resultados
							        while($fila = mysqli_fetch_assoc($resultado)) {
							          echo "<tr>";
							          echo "<td>" . $fila["agd_nombre"] . "</td>";
							          echo "<td>" . $fila["agd_tema"] . "</td>";
							          echo "<td>" . $fila["agd_contacto"] . "</td>";
							          echo "<td>" . $fila["agd_telefono_1"] . "</td>";
							          echo "<td>" . $fila["agd_telefono_2"] . "</td>";
							          echo "<td>" . $fila["agd_telefono_3"] . "</td>";
							          echo "<td>" . $fila["agd_telefono_4"] . "</td>";
							          echo "<td>" . $fila["agd_fax"] . "</td>";
							          echo "<td>" . $fila["agd_email"] . "</td>";
							          echo "<td>" . $fila["agd_web"] . "</td>";
							          echo "<td>" . $fila["agd_movil_1"] . "</td>";
							          echo "<td>" . $fila["agd_movil_2"] . "</td>";
							          echo "<td>" . $fila["agd_movil_3"] . "</td>";
							          echo "<td>" . $fila["agd_movil_4"] . "</td>";
							          echo "<td>" . $fila["agd_observaciones"] . "</td>";
							          echo "</tr>";
							        }
							      } else {
							        echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
							      }

							      // Cerrar la conexión
							      mysqli_close($conn);
							      ?>
			                  </tbody>
			                  <tfoot>
			                  <tr>
			                    <th>Nombre</th>
			                    <th>Tema</th>
			                    <th>Contacto</th>
			                    <th>Tlfn 1</th>
			                    <th>Tlfn 2</th>
			                    <th>Tlfn 3</th>
			                    <th>Tlfn 4</th>
			                    <th>Fax</th>
			                    <th>Email</th>
			                    <th>Web</th>
			                    <th>Móvil 1</th>
			                    <th>Móvil 2</th>
			                    <th>Móvil 3</th>
			                    <th>Móvil 4</th>
			                    <th>Observaciones</th>
			                  </tr>
			                  </tfoot>
			                </table>
			              </div>
			              <!-- /.card-body -->
			            </div>
			            <!-- /.card -->
			          </div>
			          <!-- /.col -->
			        </div>
			        <!-- /.row -->
			      </div>
			      <!-- /.container-fluid -->
			    </section>
			    <!-- /.content -->
			  </div>
			  <!-- /.content-wrapper -->
			  <footer class="main-footer">
			    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
			    All rights reserved.
			    <div class="float-right d-none d-sm-inline-block">
			      <b>Version</b> 3.2.0
			    </div>
			  </footer>

			  <!-- Control Sidebar -->
			  <aside class="control-sidebar control-sidebar-dark">
			    <!-- Control sidebar content goes here -->
			  </aside>
			  <!-- /.control-sidebar -->

		</div>
		<!-- jQuery -->
		<script src="../plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="../plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="../plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="../plugins/moment/moment.min.js"></script>
		<script src="../plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="../plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="../dist/js/adminlte.js"></script>
		<script src="https://kit.fontawesome.com/f132c0ab17.js" crossorigin="anonymous"></script>
		<!-- fullCalendar 2.2.5 -->
		<script src="../plugins/moment/moment.min.js"></script>
		<script src="../plugins/fullcalendar/main.js"></script>
		<!-- DataTables  & Plugins -->
		<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="../plugins/jszip/jszip.min.js"></script>
		<script src="../plugins/pdfmake/pdfmake.min.js"></script>
		<script src="../plugins/pdfmake/vfs_fonts.js"></script>
		<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
		<script>
		  $(function () {
		    $("#example1").DataTable({
		      "responsive": true, "lengthChange": false, "autoWidth": false,
		      "buttons": ["copy", "csv", "excel", "print"]
		    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		    $('#example2').DataTable({
		      "paging": true,
		      "lengthChange": false,
		      "searching": false,
		      "ordering": true,
		      "info": true,
		      "autoWidth": false,
		      "responsive": true,
		    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		  });
		</script>
	</body>
</html>