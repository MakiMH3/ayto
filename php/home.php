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
			          <a href="home.php" class="nav-link active">
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
			          <a href="archivo.php" class="nav-link">
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
			    <div class="content-header">
			      <div class="container-fluid">
			        <div class="row mb-2">
			          <div class="col-sm-6">
			            <h1 class="m-0">Inicio</h1>
			          </div><!-- /.col -->
			          <div class="col-sm-6">
			            <ol class="breadcrumb float-sm-right">
			              <li class="breadcrumb-item active">Inicio</li>
			            </ol>
			          </div><!-- /.col -->
			        </div><!-- /.row -->
			      </div><!-- /.container-fluid -->
			    </div>
			    <!-- /.content-header -->

			    <!-- Main content -->
			    <section class="content">
			        <div class="container-fluid">
			        <!-- /.row -->
				        <!-- Main row -->
				        <div class="row">
				          <!-- Left col -->
				          <section class="col-lg-7 connectedSortable">
				            <!-- Custom tabs (Charts with tabs)-->
				            
				            <!-- Calendar -->
				            <div class="card card-success">
				              <div class="card-header">
				              	<h3 class="card-title">
				                  <i class="far fa-calendar-alt"></i>
				                  Calendario
				                </h3>
				              </div>
				              <div class="card-body">
				              	<!-- Main content -->
								    <section class="content">
								      <div class="container-fluid">
								        <div class="row">
								          <div class="col-md-3">
								            <div class="sticky-top mb-3">
								              <div class="card">
								                <div class="card-header">
								                  <h4 class="card-title">Eventos</h4>
								                </div>
								                <div class="card-body">
								                  <!-- the events -->
								                  <div id="external-events">
								                    <div class="external-event bg-success">Lunch</div>
								                    <div class="external-event bg-warning">Go home</div>
								                    <div class="external-event bg-info">Do homework</div>
								                    <div class="external-event bg-primary">Work on UI design</div>
								                    <div class="external-event bg-danger">Sleep tight</div>
								                    <div class="checkbox">
								                      <label for="drop-remove">
								                        <input type="checkbox" id="drop-remove">
								                        Eliminar al soltar
								                      </label>
								                    </div>
								                  </div>
								                </div>
								                <!-- /.card-body -->
								              </div>
								              <!-- /.card -->
								              <div class="card">
								                <div class="card-header">
								                  <h3 class="card-title">Crear Evento</h3>
								                </div>
								                <div class="card-body">
								                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
								                    <ul class="fc-color-picker" id="color-chooser">
								                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
								                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
								                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
								                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
								                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
								                    </ul>
								                  </div>
								                  <!-- /btn-group -->
								                  <div class="input-group">
								                    <input id="new-event" type="text" class="form-control" placeholder="Nombre">

								                    <div class="input-group-append">
								                      <button id="add-new-event" type="button" class="btn btn-primary">Añadir</button>
								                    </div>
								                    <!-- /btn-group -->
								                  </div>
								                  <!-- /input-group -->
								                </div>
								              </div>
								            </div>
								          </div>
								          <!-- /.col -->
								          <div class="col-md-9">
								            <div class="card card-primary">
								              <div class="card-body p-0">
								                <!-- THE CALENDAR -->
								                <div id="calendar"></div>
								              </div>
								              <!-- /.card-body -->
								            </div>
								            <!-- /.card -->
								          </div>
								          <!-- /.col -->
								        </div>
								        <!-- /.row -->
								      </div><!-- /.container-fluid -->
								    </section>
								    <!-- /.content -->
				              </div>
				              <!-- /.card-header -->
				                <!--The calendar -->
				                <div id="calendar" style="width: 100%"></div>
				            </div>
				        	</section>
				        	<!-- right col (We are only adding the ID to make the widgets sortable)-->
				          <section class="col-lg-5 connectedSortable">
				          <!-- TO DO List -->
				            <div class="card" >
				              <div class="card-header">
				                <h3 class="card-title">
				                  <i class="ion ion-clipboard mr-1"></i>
				                  Cosas que hacer
				                </h3>

				                <div class="card-tools">
				                  <ul class="pagination pagination-sm">
				                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
				                    <li class="page-item"><a href="#" class="page-link">1</a></li>
				                    <li class="page-item"><a href="#" class="page-link">2</a></li>
				                    <li class="page-item"><a href="#" class="page-link">3</a></li>
				                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
				                  </ul>
				                </div>
				              </div>
				              <!-- /.card-header -->
				              <div class="card-body">
				                <ul class="todo-list" data-widget="todo-list">
				                  <li>
				                    <!-- drag handle -->
				                    <span class="handle">
				                      <i class="fas fa-ellipsis-v"></i>
				                      <i class="fas fa-ellipsis-v"></i>
				                    </span>
				                    <!-- checkbox -->
				                    <div  class="icheck-primary d-inline ml-2">
				                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
				                      <label for="todoCheck1"></label>
				                    </div>
				                    <!-- todo text -->
				                    <span class="text">Design a nice theme</span>
				                    <!-- Emphasis label -->
				                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
				                    <!-- General tools such as edit or delete-->
				                    <div class="tools">
				                      <i class="fas fa-edit"></i>
				                      <i class="fas fa-trash-o"></i>
				                    </div>
				                  </li>
				                  <li>
				                    <span class="handle">
				                      <i class="fas fa-ellipsis-v"></i>
				                      <i class="fas fa-ellipsis-v"></i>
				                    </span>
				                    <div  class="icheck-primary d-inline ml-2">
				                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
				                      <label for="todoCheck2"></label>
				                    </div>
				                    <span class="text">Make the theme responsive</span>
				                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
				                    <div class="tools">
				                      <i class="fas fa-edit"></i>
				                      <i class="fas fa-trash-o"></i>
				                    </div>
				                  </li>
				                  <li>
				                    <span class="handle">
				                      <i class="fas fa-ellipsis-v"></i>
				                      <i class="fas fa-ellipsis-v"></i>
				                    </span>
				                    <div  class="icheck-primary d-inline ml-2">
				                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
				                      <label for="todoCheck3"></label>
				                    </div>
				                    <span class="text">Let theme shine like a star</span>
				                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
				                    <div class="tools">
				                      <i class="fas fa-edit"></i>
				                      <i class="fas fa-trash-o"></i>
				                    </div>
				                  </li>
				                  <li>
				                    <span class="handle">
				                      <i class="fas fa-ellipsis-v"></i>
				                      <i class="fas fa-ellipsis-v"></i>
				                    </span>
				                    <div  class="icheck-primary d-inline ml-2">
				                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
				                      <label for="todoCheck4"></label>
				                    </div>
				                    <span class="text">Let theme shine like a star</span>
				                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
				                    <div class="tools">
				                      <i class="fas fa-edit"></i>
				                      <i class="fas fa-trash-o"></i>
				                    </div>
				                  </li>
				                  <li>
				                    <span class="handle">
				                      <i class="fas fa-ellipsis-v"></i>
				                      <i class="fas fa-ellipsis-v"></i>
				                    </span>
				                    <div  class="icheck-primary d-inline ml-2">
				                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
				                      <label for="todoCheck5"></label>
				                    </div>
				                    <span class="text">Check your messages and notifications</span>
				                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
				                    <div class="tools">
				                      <i class="fas fa-edit"></i>
				                      <i class="fas fa-trash-o"></i>
				                    </div>
				                  </li>
				                  <li>
				                    <span class="handle">
				                      <i class="fas fa-ellipsis-v"></i>
				                      <i class="fas fa-ellipsis-v"></i>
				                    </span>
				                    <div  class="icheck-primary d-inline ml-2">
				                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
				                      <label for="todoCheck6"></label>
				                    </div>
				                    <span class="text">Let theme shine like a star</span>
				                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
				                    <div class="tools">
				                      <i class="fas fa-edit"></i>
				                      <i class="fas fa-trash-o"></i>
				                    </div>
				                  </li>
				                </ul>
				              </div>
				              <!-- /.card-body -->
				              <div class="card-footer clearfix">
				                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
				              </div>
				            </div>
				            <!-- /.card -->
				          </section>
				          <!-- right col -->
				              <!-- /.card-body -->
				        </div>
				            <!-- /.card -->
				          <!-- /.Left col -->
				          
				        </div>
				        <!-- /.row (main row) -->
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
		<script>
		  $(function () {

		    /* initialize the external events
		     -----------------------------------------------------------------*/
		    function ini_events(ele) {
		      ele.each(function () {

		        // create an Event Object (https://fullcalendar.io/docs/event-object)
		        // it doesn't need to have a start or end
		        var eventObject = {
		          title: $.trim($(this).text()) // use the element's text as the event title
		        }

		        // store the Event Object in the DOM element so we can get to it later
		        $(this).data('eventObject', eventObject)

		        // make the event draggable using jQuery UI
		        $(this).draggable({
		          zIndex        : 1070,
		          revert        : true, // will cause the event to go back to its
		          revertDuration: 0  //  original position after the drag
		        })

		      })
		    }

		    ini_events($('#external-events div.external-event'))

		    /* initialize the calendar
		     -----------------------------------------------------------------*/
		    //Date for the calendar events (dummy data)
		    var date = new Date()
		    var d    = date.getDate(),
		        m    = date.getMonth(),
		        y    = date.getFullYear()

		    var Calendar = FullCalendar.Calendar;
		    var Draggable = FullCalendar.Draggable;

		    var containerEl = document.getElementById('external-events');
		    var checkbox = document.getElementById('drop-remove');
		    var calendarEl = document.getElementById('calendar');
		    // initialize the external events
		    // -----------------------------------------------------------------

		    new Draggable(containerEl, {	
		      itemSelector: '.external-event',
		      eventData: function(eventEl) {
		        return {
		          id: 0,
		          title: eventEl.innerText,
		          allDay: false,
		          color:window.getComputedStyle( eventEl ,null).getPropertyValue('background-color')
		        };
		        $('#calendar').fullCalendar('updateEvent', event);
		      },
		      
		    });
		    function componentToHex(c) {
				  var hex = c.toString(16);
				  return hex.length == 1 ? "0" + hex : hex;
			};

			function rgbToHex(r, g, b) {
				  return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
			};
		    var calendar = new Calendar(calendarEl, {
		      locale: 'es',
		      headerToolbar: {
		        left  : 'prev,next today',
		        center: 'title',
		        right : 'dayGridMonth,timeGridWeek,timeGridDay'
		      },
		      themeSystem: 'bootstrap',
		      
		      //Random default events
		      editable  : true,
		      eventSources: [
		      		{
		      			url: 'calendario.php',
		      		}
		      	],
		  	  firstDay: 1,
		      droppable : true, // this allows things to be dropped onto the calendar !!!
		      drop      : function(info) {
		        // is the "remove after drop" checkbox checked?
		        if (checkbox.checked) {
		          // if so, remove the element from the "Draggable Events" list
		          info.draggedEl.parentNode.removeChild(info.draggedEl);
		        }
		      },
		      eventDrop: function(info) {
		            // Obtener los datos del evento
		            var id = info.event.id;
		            var start = moment(info.event.start).format('YYYY-MM-DD');
		            var end = moment(info.event.end).format('YYYY-MM-DD');
		            
		            // Enviar los datos al servidor
		            $.ajax({
		                url: 'actualizar_calendario.php',
		                type: 'POST',
		                data: { id: id, start: start, end: end },
		                success: function(response) {
		                    // Mostrar mensaje de éxito
		                    console.log(response);
		                },
		                error: function(jqXHR, textStatus, errorThrown) {
		                    // Mostrar mensaje de error
		                    console.log('Error al actualizar el evento: ' + textStatus + ' - ' + errorThrown);
		                    revertFunc();
		                }
		            });
		        },

		        

		        eventReceive: function(info) {
		            // Obtener los datos del evento
		            var id = 0;
		            var nombre = info.event.title;
		            var start = moment(info.event.start).format('YYYY-MM-DD HH:mm:ss');
		            var end = moment(info.event.start).format('YYYY-MM')+"-";
		            if((parseInt(moment(info.event.start).format('DD'))+1).toString().length == 1){
		            	end += "0"+(parseInt(moment(info.event.start).format('DD'))+1);
		            }else{
		            	//Hay que tener en cuenta los cambios de mes y año.
		            	/*
		            	if(moment(info.event.start).format('MM') == "01" ||
		            		moment(info.event.start).format('MM') == "03" ||
		            		moment(info.event.start).format('MM') == "05" ||
		            		moment(info.event.start).format('MM') == "07" ||
		            		moment(info.event.start).format('MM') == "08" ||
		            		moment(info.event.start).format('MM') == "10" ||
		            		moment(info.event.start).format('MM') == "12" ||){
		            		if(moment(info.event.start).format('MM') == "12")
		            	}
		            	*/
		            	end += (parseInt(moment(info.event.start).format('DD'))+1);
		            }
		            end+=" "+moment(info.event.start).format('HH:mm:ss');
		            var color = info.event.backgroundColor.split(",");
		            console.log(color);
		            color[0]=color[0].substr(4);
		            color[1]=color[1].substr(1,color[1].length);
		            color[2]=color[2].substr(1,color[2].length-2);
		            color= rgbToHex(parseInt(color[0]),parseInt(color[1]),parseInt(color[2]));
		            console.log(color);
		            console.log(end);
		            
		            // Enviar los datos al servidor
		            $.ajax({
		                url: 'anadir_calendario.php',
		                type: 'POST',
		                data: { id: id, start: start, end: end, nombre: nombre, color: color},
		                success: function(response) {
		                    // Mostrar mensaje de éxito
		                    console.log(response);
		                },
		                error: function(jqXHR, textStatus, errorThrown) {
		                    // Mostrar mensaje de error
		                    console.log('Error al actualizar el evento: ' + textStatus + ' - ' + errorThrown);
		                    revertFunc();
		                }
		            });
		        },
		    });

		    calendar.render();
		    // $('#calendar').fullCalendar()

		    /* ADDING EVENTS */
		    var currColor = '#3c8dbc' //Red by default
		    // Color chooser button
		    $('#color-chooser > li > a').click(function (e) {
		      e.preventDefault()
		      // Save color
		      currColor = $(this).css('color')
		      // Add color effect to button
		      $('#add-new-event').css({
		        'background-color': currColor,
		        'border-color'    : currColor
		      })
		    })
		    $('#add-new-event').click(function (e) {
		      e.preventDefault()
		      // Get value and make sure it is not null
		      var val = $('#new-event').val()
		      if (val.length == 0) {
		        return
		      }

		      // Create events
		      var event = $('<div />')
		      event.css({
		        'background-color': currColor,
		        'border-color'    : currColor,
		        'color'           : '#fff'
		      }).addClass('external-event')
		      event.text(val)
		      $('#external-events').prepend(event)

		      // Add draggable funtionality
		      ini_events(event)

		      // Remove event from text input
		      $('#new-event').val('')
		    })
		  })
		</script>
	</body>
</html>