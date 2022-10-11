<?php
require "lib/conexion.php";
$user = $_SESSION['email'];

if (!isset($user)) {
    header("Location: ../index.php");
}
<<<<<<< HEAD


=======
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
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
<<<<<<< HEAD
=======
    <!-- DataTables -->
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    .bdr {
        border-radius: 6px;
        overflow: hidden;
    }

    .margin {
        margin-left: 100px;
    }

    .card {
        margin-top: 10px;
    }

    .card-top-line {
        border-top: 3px solid #0c5f54;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }



    .card-header-new {
        color: rgb(255, 255, 255);
        font-size: 20px;
        background-color: #157e70;
        width: auto;
        height: 45px;
        margin: none;
        border-top: none;
    }

    .thead-titulo {
        color: azure;
        background-color: #157e70;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        border-top: none;
        border-left: none;
        border-right: none;
    }

    .thead-subtitulo {
        background-color: #d3d3d4;
        color: #222;
    }

    th,
    td {
        border: 1px solid rgb(173, 172, 172);
    }

    .thead-init {
        border-top-width: 0px;
    }

    .css-button-arrow--sky {
        min-width: 160px;
        height: 50px;
        color: #fff;
        padding: 5px 10px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        outline: none;
        overflow: hidden;
        border-radius: 5px;
        border: none;
        background-color: #0c5f54
    }

    .css-button-arrow--sky:hover {
        border-radius: 10px;
        padding-right: 24px;
        padding-left: 8px;
    }

    .css-button-arrow--sky:hover:after {
        opacity: 1;
        right: 10px;
    }

    .css-button-arrow--sky:after {
        content: "\00BB";
        position: absolute;
        opacity: 0;
        font-size: 20px;
        line-height: 40px;
        top: 0;
        right: -20px;
        transition: 0.4s;
    }


    /* CSS */
    .button-18 {
        align-items: center;
        background-color: #0c5f54;
        border: 0;
        border-radius: 10px;
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        display: inline-flex;
        font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
        font-size: 16px;

        font-weight: 600;
        justify-content: center;
        line-height: 20px;
        max-width: 120px;
        min-height: 40x;
        min-width: 150px;
        height: 50px;
        overflow: hidden;
        padding: 0px;
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
        touch-action: manipulation;
        transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
        user-select: none;
        -webkit-user-select: none;
        vertical-align: middle;
    }

    .button-18:hover,
    .button-18:focus {
        background-color: #065968;
        color: #ffffff;
    }

    .button-18:active {
        background: #09223b;
        color: rgb(255, 255, 255, .7);
    }

    .button-18:disabled {
        cursor: not-allowed;
        background: rgba(0, 0, 0, .08);
        color: rgba(0, 0, 0, .3);
    }

    .sidebar-dark-blue {
        background: #157e70 !important;
        text-decoration-color: rgb(255, 255, 255);
    }

    .sidebar-blue2 {
        background: #108b7b;
        text-decoration-color: rgb(255, 255, 255);
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed sidebar-open oss-dragging">
=======
</head>

<body class="hold-transition sidebar-mini">
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
<<<<<<< HEAD
                    <a href="inicio.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="./Manual de usuario sistema unificado de turnos.pdf" class="nav-link">Manual</a>
                </li>
            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        require('./sidebar.php')
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
      
=======
                    <a href="inicio.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="manual.php" class="nav-link">Manual</a>
                </li>
            </ul>

            
            <!-- Right navbar links -->
            
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
                        <img src="../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
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
                            <a href="calendario.php" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Calendario
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="recargos.php" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    <i class="fas fa-angle-left right"></i>
                                    Recargos
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="recargoPlantaPermanente.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>Planta Permanente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="recargoPlantaTemporal.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-info"></i>
                                        <p>Planta Temporal</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                        

                        

                        

                        <li class="nav-item">
                            <a href="reportes.php" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Reportes
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="otros.php" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    <i class="fas fa-angle-left right"></i>
                                    Otros
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="cargos.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-info"></i>
                                        <p>cargos</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="contratos.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-info"></i>
                                        <p>contratos</p>
                                    </a>
                                </li>

                                

                                <li class="nav-item">
                                    <a href="profesiones.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-info"></i>
                                        <p>profesiones</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="servicios.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-info"></i>
                                        <p>servicios</p>
                                    </a>
                                </li>
                        </li>

                        

                        
                    </ul>
                    <!-- LABELS -->
                        <li class="nav-header">Sesion</li>
                        <li class="nav-item">
                            <a href="lib/logout.php" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p>Cerrar Sesión </p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
<<<<<<< HEAD
                            <h1>Reporte de Novedades</h1>
=======
                            <h1> &nbsp; Seccion de reportes</h1>
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
<<<<<<< HEAD
                                <li class="breadcrumb-item active">Reporte Novedades</li>
=======
                                <li class="breadcrumb-item active">Otros</li>
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

<<<<<<< HEAD
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-8 ">
                            <!-- /.card -->
                            <div class="card card-top-line mt-3">
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <h3 class="card-header  mb-4"><b>Generación de Reporte</b> </h3>
                                    <div class="container">
                                        <br />

                                        <form action="reporNovedades.php" method="post">

                                            <div class="row justify-content-center">

                                                <div class="col-sm-2 mt-3">
                                                    <label for="">
                                                        Contrato

                                                    </label>
                                                </div>

                                                <div class="col-sm-3 mt-3">
                                                    <select class="form-select form-select-sm form-select-padding-y-sm:0 " style="margin-left: 10px;" name="contrato" id="" aria-label="Default select example" required>
                                                        <option value="0"> Seleccionar</option>
                                                        <?php
                                                        $sql = "SELECT * FROM contrato WHERE estado ='activo'";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            //$id = $campos['idProfesion'];
                                                            $contrato = $campos['tipoContrato'];
                                                        ?>
                                                            <option value="<?php echo $contrato; ?>"><?php echo $contrato; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-sm-1 mt-3">

                                                </div>
                                                <div class="col-sm-2 mt-3">
                                                    <label for="">
                                                        Profesión

                                                    </label>
                                                </div>

                                                <div class="col-sm-3 mt-3">
                                                <input type="hidden">
                                                    <select class="form-select form-select-sm form-select-padding-y-sm:0 " style="margin-left: 10px;" name="profesiones" id="" aria-label="Default select example" required>
                                                        <option value="0">Seleccionar</option>
                                                        <?php
                                                     
                                                       $sql = "SELECT * FROM profesion";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            //$id = $campos['idProfesion'];
                                                            $profesion = $campos['profesion'];
                                                        ?>
                                                            <option value="<?php echo $profesion; ?>"><?php echo $profesion; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>




                                            </div>

                                            <div class="row justify-content-center">

                                                <div class="col-sm-2 mt-3">
                                                    <label for="" style="margin-left: 25px;">
                                                        Inicio

                                                    </label>
                                                </div>

                                                <div class="col-sm-3 mt-3">
                                                    <input type=Date name="inicio" style="margin-left: 10px;" class="form-control form-control-sm" id="" required>
                                                </div>
                                                <div class="col-sm-1 mt-3">

                                                </div>
                                                <div class="col-sm-2 mt-3">
                                                    <label for="" style="margin-left: 50px;">
                                                        Fin

                                                    </label>
                                                </div>

                                                <div class="col-sm-3 mt-3">
                                                    <input type=Date name="fin" style="margin-left: 10px;" class="form-control form-control-sm" id="" required>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-sm-12"> </div>

                                                
                                                <div class="col-sm-12 mt-3 text-center">
                                                    <input type="submit" name="generar_reporte" class="btn button-18" id="generar" value="Generar">
                                                </div>
                                                <div class="col-sm-12">
                                                </div>
                                                
                                            </div>

                                        </form>





                                    </div>
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
=======
          


            
            <!-- Main content -->

            



            
            
            
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
<<<<<<< HEAD
      <div class="float-right d-none d-sm-block">
        <b>Versión</b> 1
      </div>
      <strong>Copyright 2022-2025 <a href="http://www.umariana.edu.co">Univerdasidad Mariana</a>.</strong> 
      
    </footer>
=======
            <div class="float-right d-none d-sm-block">
                <b></b> 
            </div>
            <strong> &copy; Universidad Mariana</strong> 
            
        </footer>
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

<<<<<<< HEAD

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
=======
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- page script -->
<<<<<<< HEAD
    
    <script>
         $(".generar_reporte").click(function() {
            alert("Descarga realizada");
            return true;

        });
        
    // Cancelar comportamiento normal del botón
    
    
    </script>
=======

>>>>>>> 4755aadc77ac04117b9f76a3a1f669f3551988f2
</body>

</html>