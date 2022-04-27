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
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="inicio.php" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="manual.php" class="nav-link">Manual</a>
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
                            <a href="./calendario.php" class="nav-link active">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    <i class="fas fa-angle-left right"></i>
                                    Asignar Turnos
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./planta_permanente.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>Planta Permanente</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./planta_temporal.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>Planta Temporal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./OPS-SAS.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>OPS-SAS</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="./recargos.php" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Recargos
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./reportes.php" class="nav-link">
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
                            <h1>Asignación de Turnos</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                                <li class="breadcrumb-item active">Asignar turnos</li>
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
                            <!-- /.card -->
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="container">
                                        <br />

                                        <div class="col-3">
                                            <form action="" method="post">
                                                <label for="profesion">Profesión</label><br>
                                                <select name="profesiones">
                                                    <option>seleccionar</option>
                                                    <?php
                                                    $sql = "SELECT * FROM profesion";
                                                    $query = mysqli_query($miConexion, $sql);
                                                    while ($campos = mysqli_fetch_array($query)) {
                                                        //$id = $campos['idProfesion'];
                                                        $profesion = $campos['profesion'];
                                                    ?>
                                                        <option value="<?php echo $profesion; ?>"><?php echo $profesion; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="submit" name="buscar" class="btn btn-info" value="buscar">
                                            </form>
                                        </div>
                                        <?php

                                        ?>
                                        <hr />
                                        <br />
                                        <div class="row mb-3">
                                            <h3>PARAMETRIZACIÓN</h3>
                                        </div>
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Identificación</th>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Profesión</th>
                                                    <th>Cargo</th>
                                                    <th>Asignar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $prof = '';
                                                    if (isset($_POST['buscar'])) {
                                                        $prof = $_POST['profesiones'];
                                                    }
                                                    $sql = "SELECT * FROM empleados WHERE idContrato ='Planta Temporal' AND idProfesion = '$prof'";
                                                    $consulta = mysqli_query($miConexion, $sql);
                                                    while ($datos = mysqli_fetch_array($consulta)) { ?>
                                                        <tr class="table-secundary">
                                                            <td><?= $datos['idPersonalAsistencial']; ?></td>
                                                            <td><?= $datos['nombres']; ?></td>
                                                            <td><?= $datos['apellidos']; ?></td>
                                                            <td><?= $datos['idProfesion']; ?></td>
                                                            <td><?= $datos['idCargo']; ?></td>
                                                            <td>
                                                                <a href="./calendar.php">
                                                                    <p>Calendario</p>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Identificación</th>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Profesión</th>
                                                    <th>Cargo</th>
                                                    <th>Asignar</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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
</body>

</html>