<?php
require "lib/conexion.php";
$user = $_SESSION['email'];

if (!isset($user)) {
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Su turno</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#343A40;" >
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./inicio.php" class="nav-link" style="color: white;">Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="manual.php" class="nav-link" style="color: white;">Manual</a>
        </li>
      </ul>

      

      
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Su Turno HUDN</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php
              echo "$user";
              ?>
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview">
              <a href="./empleados.php" class="nav-link ">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Empleados
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./calendario.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Asignar Turnos
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="recargos.php" class="nav-link">
                <i class="nav-icon fas fa-clock"></i>
                <p>
                  Recargos
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="reportes.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Reportes
                </p>
              </a>
            </li>



            <li class="nav-item has-treeview">
              <a href="./otros.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Otros
                </p>
              </a>
            </li>
            <!-- LABELS -->
            <li class="nav-header">Sesion</li>
            <li class="nav-item">
              <a href="./lib/logout.php" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p>Cerrar Sesión </p>
              </a>
            </li>
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
              <h1>Inicio</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->


      <section class="content">
        <div class="container-fluid">
          <!-- COLOR PALETTE -->
          <div class="card card-default color-palette-box">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-tag"></i> &nbsp;
                Bienvenido a sistema unificado de turnos
              </h3>
            </div>
            <div class="card-body">
              <div class="col-12">
                <h5>Opciones en el sistema </h5>
              </div>
              <!-- /.col-12 -->
              <div class="row">

                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center">Lista de empleados</h4>

                  <div class="color-palette-set">
                    <div class="bg-olive color-palette"><a href="empleados.php"><span>Entrar</span></a></div>
                    <div class="bg-olive disabled color-palette"><span>Acceder a lista empleados</span></div>
                  </div>
                </div>

                
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center">Asignacion de calendarios</h4>

                  <div class="color-palette-set">
                    <div class="bg-olive color-palette"><a href="calendario.php"><span>Entrar</span></a></div>
                    <div class="bg-olive disabled color-palette"></a><span>Acceder a calendarios</span></div>
                  </div>
                </div>

                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center">Seccion de recargos</h4>

                  <div class="color-palette-set">
                    <div class="bg-olive color-palette"><a href="recargos.php"><span>Entrar</span></a></div>
                    <div class="bg-olive disabled color-palette"><span>Acceder a recargos de empleados</span></div>
                  </div>
                </div>

                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center ">Seccion de reportes</h4>

                  <div class="color-palette-set">
                    <div class="bg-olive color-palette" ><a href="reportes.php"><span >Entrar</span></a></div>
                    <div class="bg-olive disabled color-palette"><span>  Acceder a reportes de asignacion</span></div>
                  </div>
                </div>

                
                <!-- /.col -->
              </div>      
              

              
              <div class="col-12">
                <h5>Opciones adicionales </h5>
              </div>

              
              <!-- /.col-12 -->
              <div class="row">
                
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center">Lista de cargos</h4>

                  <div class="color-palette-set">
                    <div class="bg-lightblue color-palette"><a href="cargos.php"><span>Entrar</span></a></div>
                    <div class="bg-lightblue disabled color-palette"><span>Lista de cargos</span></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center">lista de contratos</h4>

                  <div class="color-palette-set">
                    <div class="bg-lightblue color-palette"><a href="contratos.php"><span>Entrar</span></a></div>
                    <div class="bg-lightblue disabled color-palette"><span>Lista de contratos</span></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center">lista de profesiones</h4>

                  <div class="color-palette-set">
                    <div class="bg-lightblue color-palette"><a href="profesiones.php"><span>Entrar</span></a></div>
                    <div class="bg-lightblue disabled color-palette"><span>Lista de profesiones</span></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                  <h4 class="text-center ">lista de servicios</h4>

                  <div class="color-palette-set">
                    <div class="bg-lightblue color-palette"><a href="servicios.php"><span>Entrar</span></a></div>
                    <div class="bg-lightblue disabled color-palette"><span>Lista de servicios</span></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              
              
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          
         

         
          

          
          
          

         
           

     

          


          
          
        </div><!-- /.container-fluid -->
      </section>


      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b></b> 
      </div>
      <strong>&copy; <a></a>Universidad Mariana</strong> 
     
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
</body>

</html>