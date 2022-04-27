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
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
                    <a href="" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
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
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
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
                        <li class="nav-item">
                            <a href="./empleados.php" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    <i class="fas fa-angle-left right"></i>
                                    Empleados
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="crearEmpleado.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-success"></i>
                                        <p>Agregar empleado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./editarEmpleado.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon text-info"></i>
                                        <p>Editar empleado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./desactivarEmpleado.php" class="nav-link">
                                        <i class="far fa-circle nav-icon text-danger"></i>
                                        <p>Eliminar empleado</p>
                                    </a>
                                </li>
                            </ul>
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
                            <h1>Actualizar Empleado</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                                <li class="breadcrumb-item active">Actualizar empleado</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <!-- /.card -->
                            <div class="card">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="text-center">
                                            <h1 class="text-center">Actualizar Empleado</h1>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <form action="" method="get">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="tipoId">N° de identificación</label><br>
                                                    <input type="number" name="identificacion" placeholder="empleado a actualizar" required>
                                                    <input type="submit" name="buscar" class="btn btn-info" value="buscar">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <?php
                                        //ingresar los valores a la tabla
                                        if (isset($_GET['buscar'])) {
                                            $ide = $_GET['identificacion'];
                                            $sql = "SELECT * FROM personalasistencial WHERE idPersonalAsistencial = $ide";
                                            $consulta = mysqli_query($miConexion, $sql);
                                            $datos = mysqli_fetch_array($consulta);

                                            $sql2 = "SELECT * FROM empleados WHERE idPersonalAsistencial = $ide";
                                            $consulta2 = mysqli_query($miConexion, $sql2);
                                            $datos2 = mysqli_fetch_array($consulta2);
                                        }
                                        ?>
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="tipoId">Tipo</label><br>
                                                    <select name="tipo" id="">
                                                        <option><?php echo $datos2['idTipoId']; ?></option>
                                                        <?php
                                                        $sql = "SELECT * FROM tipoid";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            $id = $campos['idTipoId'];
                                                            $tipo = $campos['tipoId'];
                                                        ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $tipo; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="nombre">Nombre</label><br>
                                                    <input type="text" name="name" value="<?php echo $datos['nombres']; ?>" required>
                                                </div>
                                                <div class="col-3">
                                                    <label for="apellido">Apellido</label><br>
                                                    <input type="text" name="lastname" value="<?php echo $datos['apellidos']; ?>" required>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="telefono">Teléfono</label><br>
                                                    <input type="number" name="phone" value="<?php echo $datos['telefono']; ?>" required>
                                                </div>
                                                <div class="col-3">
                                                    <label for="correo">Correo (opcional)</label>
                                                    <input type="text" name="email" value="<?php echo $datos['correoElectronico']; ?>">
                                                </div>
                                                <div class="col-3">
                                                    <label for="contrato">Tipo de contrato</label><br>
                                                    <select name="cont">
                                                        <option><?php echo $datos2['idContrato']; ?></option>
                                                        <?php
                                                        $sql = "SELECT * FROM contrato";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            $id = $campos['idContrato'];
                                                            $contrato = $campos['tipoContrato'];
                                                        ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $contrato; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="nomina">Valor nómina</label><br>
                                                    <select name="nomin">
                                                        <option><?php echo $datos2['idNomina']; ?></option>
                                                        <?php
                                                        $sql = "SELECT * FROM nomina";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            $id = $campos['idNomina'];
                                                            $nomina = $campos['valorNomina'];
                                                        ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $nomina; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="genero">Género</label><br>
                                                    <select name="sexo" id="">
                                                        <option><?php echo $datos2['idGenero']; ?></option>
                                                        <?php
                                                        $sql = "SELECT * FROM genero";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            $id = $campos['idGenero'];
                                                            $genero = $campos['genero'];
                                                        ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $genero; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="profesion">Profesión</label><br>
                                                    <select name="profession" id="">
                                                        <option><?php echo $datos2['idProfesion']; ?></option>
                                                        <?php
                                                        $sql = "SELECT * FROM profesion";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            $id = $campos['idProfesion'];
                                                            $profesion = $campos['profesion'];
                                                        ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $profesion; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="cargo">Cargo</label><br>
                                                    <select name="rol" id="">
                                                        <option><?php echo $datos2['idCargo']; ?></option>
                                                        <?php
                                                        $sql = "SELECT * FROM cargos";
                                                        $consulta = mysqli_query($miConexion, $sql);
                                                        while ($campos = mysqli_fetch_array($consulta)) {
                                                            $id = $campos['idCargo'];
                                                            $cargo = $campos['cargo'];
                                                        ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $cargo; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <input type="submit" name="actualizar" class="btn btn-primary" value="Actualizar">
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
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>
<?php
//ingresar los valores a la tabla
if (isset($_POST['actualizar'])) {
    //recibir variables
    $tipoId = $_POST['tipo'];
    $nombre = $_POST['name'];
    $apellido = $_POST['lastname'];
    $telefono = $_POST['phone'];
    $correo = $_POST['email'];
    $contrato = $_POST['cont'];
    $nomina = $_POST['nomin'];
    $genero = $_POST['sexo'];
    $profesion = $_POST['profession'];
    $cargo = $_POST['rol'];

    // crear una consulta para insertar las variables en la tabla
    $sql = "UPDATE personalasistencial 
            SET idTipoId=$tipoId, nombres='$nombre', apellidos='$apellido', telefono ='$telefono',
                correoElectronico='$correo', idContrato='$contrato', idNomina='$nomina', idGenero='$genero',
                idProfesion='$profesion',idCargo='$cargo'
            WHERE idPersonalAsistencial = '$ide'";

    $consulta = mysqli_query($miConexion, $sql);
    if (!$consulta) {
        echo '
            <script>
                alert("Error\nVerifica e inenta nuevamente");
            </script>
        ';
        die(mysqli_error($miConexion));
        /*  echo $ide; */
    } else {
        echo '
            <script>
                alert("Se actualizó al empleado correctamente");
                window.location = "./empleados.php";
            </script>
        ';
    }
}
?>