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
              <h1>&nbsp; Inicio</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio &nbsp; </a></li>
                
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
                    <div class="bg-olive color-palette"><a href="calendar.php"><span>Entrar</span></a></div>
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
          <!-- START ALERTS AND CALLOUTS -->
          <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

          <div class="row">
            <div class="col-md-6">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-exclamation-triangle"></i>
                    Alerts
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
                    entire
                    soul, like these sweet mornings of spring which I enjoy with my whole heart.
                  </div>
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Info alert preview. This alert is dismissable.
                  </div>
                  <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                    Warning alert preview. This alert is dismissable.
                  </div>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    Success alert preview. This alert is dismissable.
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-bullhorn"></i>
                    Callouts
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="callout callout-danger">
                    <h5>I am a danger callout!</h5>

                    <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                      soul,
                      like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="callout callout-info">
                    <h5>I am an info callout!</h5>

                    <p>Follow the steps to continue to payment.</p>
                  </div>
                  <div class="callout callout-warning">
                    <h5>I am a warning callout!</h5>

                    <p>This is a yellow callout.</p>
                  </div>
                  <div class="callout callout-success">
                    <h5>I am a success callout!</h5>

                    <p>This is a green callout.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- END ALERTS AND CALLOUTS -->
          <h5 class="mt-4 mb-2">Tabs in Cards</h5>

          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">
                <div class="card-header d-flex p-0">
                  <h3 class="card-title p-3">Tabs</h3>
                  <ul class="nav nav-pills ml-auto p-2">
                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                        Dropdown <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                        <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                        <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                      </div>
                    </li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      A wonderful serenity has taken possession of my entire soul,
                      like these sweet mornings of spring which I enjoy with my whole heart.
                      I am alone, and feel the charm of existence in this spot,
                      which was created for the bliss of souls like mine. I am so happy,
                      my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                      that I neglect my talents. I should be incapable of drawing a single stroke
                      at the present moment; and yet I feel that I never was a greater artist than now.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                      The European languages are members of the same family. Their separate existence is a myth.
                      For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                      in their grammar, their pronunciation and their most common words. Everyone realizes why a
                      new common language would be desirable: one could refuse to pay expensive translators. To
                      achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                      words. If several languages coalesce, the grammar of the resulting language is more simple
                      and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      It has survived not only five centuries, but also the leap into electronic typesetting,
                      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                      sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                      like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- ./card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- END CUSTOM TABS -->
          <!-- START PROGRESS BARS -->
          <h5 class="mt-4 mb-2">Progress Bars</h5>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Progress Bars Different Sizes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <p><code>.progress</code></p>

                  <div class="progress">
                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                  <p><code>.progress-sm</code></p>

                  <div class="progress progress-sm active">
                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                  <p><code>.progress-xs</code></p>

                  <div class="progress progress-xs">
                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                  <p><code>.progress-xxs</code></p>

                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Progress bars</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                  <div class="progress mb-3">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (right) -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body text-center">
                  <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
                    or
                    <code>.progress-xxs</code> we achieve:
                  </p>

                  <div class="progress vertical active">
                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                      <span class="sr-only">40%</span>
                    </div>
                  </div>
                  <div class="progress vertical progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 100%">
                      <span class="sr-only">100%</span>
                    </div>
                  </div>
                  <div class="progress vertical progress-xs">
                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                      <span class="sr-only">60%</span>
                    </div>
                  </div>
                  <div class="progress vertical progress-xxs">
                    <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                      <span class="sr-only">60%</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Vertical Progress bars</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body text-center">
                  <p>By adding the class <code>.vertical</code> we achieve:</p>

                  <div class="progress vertical">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                      <span class="sr-only">40%</span>
                    </div>
                  </div>
                  <div class="progress vertical">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="height: 20%">
                      <span class="sr-only">20%</span>
                    </div>
                  </div>
                  <div class="progress vertical">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                      <span class="sr-only">60%</span>
                    </div>
                  </div>
                  <div class="progress vertical">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 80%">
                      <span class="sr-only">80%</span>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (right) -->
          </div>
          <!-- /.row -->
          <!-- END PROGRESS BARS -->

          <!-- START ACCORDION & CAROUSEL-->
          <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Collapsible Accordion</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="accordion">
                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Collapsible Group Item #1
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          3
                          wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                          laborum
                          eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                          nulla
                          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                          beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card card-danger">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Collapsible Group Danger
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          3
                          wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                          laborum
                          eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                          nulla
                          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                          beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card card-success">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Collapsible Group Success
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                          3
                          wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                          laborum
                          eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                          nulla
                          assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                          nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                          beer
                          farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                          labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Carousel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <!-- END ACCORDION & CAROUSEL-->

          <!-- START TYPOGRAPHY -->
          <h5 class="mt-4 mb-2">Typography</h5>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Headlines
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <h1>h1. Bootstrap heading</h1>

                  <h2>h2. Bootstrap heading</h2>

                  <h3>h3. Bootstrap heading</h3>
                  <h4>h4. Bootstrap heading</h4>
                  <h5>h5. Bootstrap heading</h5>
                  <h6>h6. Bootstrap heading</h6>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Text Emphasis
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <p class="lead">Lead to emphasize importance</p>

                  <p class="text-success">Text green to emphasize success</p>

                  <p class="text-info">Text aqua to emphasize info</p>

                  <p class="text-primary">Text light blue to emphasize info (2)</p>

                  <p class="text-danger">Text red to emphasize danger</p>

                  <p class="text-warning">Text yellow to emphasize warning</p>

                  <p class="text-muted">Text muted to emphasize general</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Primary Block Quotes
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Secondary Block Quotes
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body clearfix">
                  <blockquote class="quote-secondary">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                  </blockquote>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Unordered List
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ul>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor sem</li>
                        <li>Ac tristique libero volutpat at</li>
                      </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Ordered Lists
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ol>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ol>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor sem</li>
                        <li>Ac tristique libero volutpat at</li>
                      </ol>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ol>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Unstyled List
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <ul class="list-unstyled">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectetur adipiscing elit</li>
                    <li>Integer molestie lorem at massa</li>
                    <li>Facilisis in pretium nisl aliquet</li>
                    <li>Nulla volutpat aliquam velit
                      <ul>
                        <li>Phasellus iaculis neque</li>
                        <li>Purus sodales ultricies</li>
                        <li>Vestibulum laoreet porttitor sem</li>
                        <li>Ac tristique libero volutpat at</li>
                      </ul>
                    </li>
                    <li>Faucibus porta lacus fringilla vel</li>
                    <li>Aenean sit amet erat nunc</li>
                    <li>Eget porttitor lorem</li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Description
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <dl>
                    <dt>Description lists</dt>
                    <dd>A description list is perfect for defining terms.</dd>
                    <dt>Euismod</dt>
                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt>Malesuada porta</dt>
                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                  </dl>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Description Horizontal
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <dl class="row">
                    <dt class="col-sm-4">Description lists</dt>
                    <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
                    <dt class="col-sm-4">Euismod</dt>
                    <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                    <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>
                    <dt class="col-sm-4">Malesuada porta</dt>
                    <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
                    <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
                    <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                      sit amet risus.
                    </dd>
                  </dl>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- END TYPOGRAPHY -->
        </div><!-- /.container-fluid -->
      </section>


      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b></b> 
      </div>
      <strong> &copy;  <a href="http://adminlte.io">Universidad Mariana</a>.</strong>
      reserved.
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