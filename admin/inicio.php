<?php
    require "lib/conexion.php";
    $user = $_SESSION['email'];

    if (!isset($user)) {
        header ( "Location: ../sesion.php" );
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
        <nav class="main-header navbar navbar-expand navbar-white navbar-light " style="background-color: #343A40;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color:white;"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block" >
                    <a href="./inicio.php" class="nav-link" style="color:white;">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link" style="color:white;">Manual</a>
                </li>
            </ul>

            
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" >
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
                            <a href="otros.php" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Otros
                                </p>
                            </a>
                        </li>
                        <!-- LABELS -->
                        <li class="nav-header">LABELS</li>
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
                            <h1>Inicio</h1>
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
              <i class="fas fa-tag"> &nbsp;</i>
              Bienvenido a sistema unificado de turnos.
            </h3>
          </div>
          <div class="card-body">
            <div class="col-12">
              <h5>Opciones en el sistema</h5>
            </div>
            <!-- /.col-12 -->
            <div class="row">
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Lista de empleados </h4>

                <div class="color-palette-set">
                  <div class="bg-info color-palette"><span>Entrar</span></div>
                  <div class="bg-info disabled color-palette"><span>Acceder a lista de empleados</span></div>
                  
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Calendario de empleados</h4>

                <div class="color-palette-set">
                  <div class="bg-info color-palette"><span>Entrar</span></div>
                  <div class="bg-info disabled color-palette"><span>Acceder a calendario de empleados</span></div>
                  
                </div>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Lista de reportes</h4>

                <div class="color-palette-set">
                  <div class="bg-info color-palette"><span>Entrar</span></div>
                  <div class="bg-info disabled color-palette"><span>Acceder a lista de reportes</span></div>
                  
                </div>
              
              <!-- /.col -->
            </div>

            <!-- /.row -->
            <div class="col-12">
              <h5 class="mt-3">Adicionales</h5>
            </div>   
            
            <!-- /.card-body -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Lista de cargos</h4>

                <div class="color-palette-set">
                  <div class="bg-green color-palette"><span>Entrar</span></div>
                  <div class="bg-green disabled color-palette"><span>Acceder a lista de cargos</span></div>
                  
                </div>
              
              
            </div>

            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Lista de contratos</h4>

                <div class="color-palette-set">
                  <div class="bg-green color-palette"><span>Entrar</span></div>
                  <div class="bg-green disabled color-palette"><span>Acceder a lista de contratos</span></div>
                  
                </div>
              
              
            </div>

            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Lista de profesiones</h4>

                <div class="color-palette-set">
                  <div class="bg-green color-palette"><span>Entrar</span></div>
                  <div class="bg-green disabled color-palette"><span>Acceder a lista de profesiones</span></div>
                  
                </div>
              
              
            </div>

            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
                <h4 class="text-center">Lista de servicios</h4>

                <div class="color-palette-set">
                  <div class="bg-green color-palette"><span>Entrar</span></div>
                  <div class="bg-green disabled color-palette"><span>Acceder a lista de servicios</span></div>
                  
                </div>
              
              
            </div>


            </div>
        <!-- /.card -->
        <!-- START ALERTS AND CALLOUTS -->
        <h5 class="mt-4 mb-2"> &nbsp; &nbsp; &nbsp; Sugerencias</h5>

        <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"> &nbsp;</i>
                  ¿Como agrego un empleado?
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-danger">
                  <h5>Insertar contrato</h5>

                  <p>Antes de ingresar un empleado, debe agregar un tipo de contrato
                    en la pestaña de contratos.
                    </p>
                </div>
                <div class="callout callout-info">
                  <h5>Insertar profesion</h5>

                  <p>Antes de ingresar un empleado, debe existir una profesion a
                    asignar
                  </p>
                </div>
                <div class="callout callout-warning">
                  <h5>Insertar cargo</h5>

                  <p>Para agregar un empleado, debe existir un cargo a agregar</p>
                </div>
                <div class="callout callout-success">
                  <h5>Insertar servicio</h5>

                  <p>Si quiere agregar un nuevo empleado, debe crear un servicio
                    a asignar en la pestaña servicios
                  </p>
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
                  Aqui que agregamos, consejitos del calendario pensaba yo
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="callout callout-danger">
                  <h5>¿Dudas cpm los calendarios?</h5>

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

        
        <!-- END CUSTOM TABS -->
        <!-- START PROGRESS BARS -->
        <h5 class="mt-4 mb-2">Progress Bars</h5>

        
                <!-- END PROGRESS BARS -->

        <!-- START ACCORDION & CAROUSEL-->
        
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
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>