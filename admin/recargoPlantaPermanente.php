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
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #343A40;">
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
              <a href="empleados.php" class="nav-link ">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Empleados
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="calendar.php" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Calendario
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
              <a href="otros.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Otros
                </p>
              </a>
              
             


            </li>
            <!-- LABELS -->
            <li class="nav-header">Sesion</li>
            <li class="nav-item">
              <a href="lib/logout.php" class="nav-link">
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
              <h1>&nbsp; Lista de recargos planta permanente</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                
                <li class="breadcrumb-item"><a href="inicio.php">Inicio &nbsp; </a></li>
                <li class="breadcrumb-item"><a href="recargos.php">Recargos &nbsp; </a></li>
                
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
                Listas de recargos para empleados con contrato de  planta permanente
              </h3>
            </div>
            <div class="card-body">

            
            <label for="tipoContrato"> Elige un servicio</label>  <br>
                    <select name="tipoContrato" id="tipoContrato">
                        <option value="neuro"> medicina1</option>
                        <option value="prueba"> medicina2</option>
                        <option value="Otra"> medicina3</option>
                    </select>
                    <br>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Identificación</th>
                                                <th>Mes</th>
                                                <th>Noche Ordinaria</th>
                                                <th>Noche Dominical</th>
                                                <th>Noche Festiva</th>
                                                <th>Dia Dominical</th>
                                                <th>Dia Festivo</th>
                                                <th>Valor de recargo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //crear una variable con la sentencia SQL
                                            $sql = "SELECT * FROM empleados";
                                            // crear la variable para ejecutar la consulta
                                            $consulta = mysqli_query($miConexion, $sql);
                                            while ($campos = mysqli_fetch_array($consulta)) { ?>
                                                <tr class="table-secundary">
                                                    <td><?= $campos['idPersonalAsistencial']; ?></td>
                                                    <td><?= $campos['apellidos']; ?></td>
                                                    <td><?= $campos['nombres']; ?></td>
                                                    <td><?= $campos['telefono']; ?></td>
                                                    <td><?= $campos['idGenero']; ?></td>
                                                    <td><?= $campos['idProfesion']; ?></td>
                                                    <td><?= $campos['idContrato']; ?></td>
                                                    <td><?= $campos['idCargo']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Identificación</th>
                                                <th>Mes</th>
                                                <th>Noche Ordinaria</th>
                                                <th>Noche Dominical</th>
                                                <th>Noche Festiva</th>
                                                <th>Dia Dominical</th>
                                                <th>Dia Festivo</th>
                                                <th>Valor de recargo</th>
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
        <b>Version</b> Beta 1.2.0
      </div>
      <strong> Sistema Unificado de Turnos SUT<a href="http://adminlte.io"> Universidad Mariana</a></strong> 
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