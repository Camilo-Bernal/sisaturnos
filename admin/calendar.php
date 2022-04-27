<?php
    require "lib/conexion.php";
    $user = $_SESSION['email'];

    if (!isset($user)) {
      header ( "Location: ../index.php" );
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
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar-bootstrap/main.min.css">
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
              <a href="empleados.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Empleados
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="calendar.php" class="nav-link active">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  <i class="fas fa-angle-left right"></i>
                  Calendario
                </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="asignarTurno.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Asignar Turnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>no hace nada útil</p>
                </a>
              </li>           
              
            </ul>

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
              <h1>Calendario</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
                <li class="breadcrumb-item active">Calendario</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="sticky-top mb-3">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">turnos rotativos</h4>
                  </div>
                  <div class="card-body">
                    <!-- the events -->
                    <div id="external-events">
                      <div class="external-event bg-success">Mañana</div>
                      <div class="external-event bg-warning">Tarde</div>
                      <div class="external-event bg-info">Noche</div>
                      <div class="external-event bg-primary">Libre</div>
                      <div class="external-event bg-danger">Incapacidad</div>
                      <div class="checkbox">
                        <label for="drop-remove">
                          <input type="checkbox" id="drop-remove">
                          quitar después de soltar
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
                      <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
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
                      <input id="new-event" type="text" class="form-control" placeholder="Título del Evento">

                      <div class="input-group-append">
                        <button id="add-new-event" type="button" class="btn btn-primary">Agregar</button>
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
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b></b> 
      </div>
      <strong>&copy;  <a href="http://adminlte.io">Universidad Mariana</a>.</strong> 
      
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
  <!-- Bootstrap -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- fullCalendar 2.2.5 -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/fullcalendar/main.min.js"></script>
  <script src="../plugins/fullcalendar-daygrid/main.min.js"></script>
  <script src="../plugins/fullcalendar-timegrid/main.min.js"></script>
  <script src="../plugins/fullcalendar-interaction/main.min.js"></script>
  <script src="../plugins/fullcalendar-bootstrap/main.min.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {

      /* initialize the external events
       -----------------------------------------------------------------*/
      function ini_events(ele) {
        ele.each(function() {

          // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
          // it doesn't need to have a start or end
          var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
          }

          // store the Event Object in the DOM element so we can get to it later
          $(this).data('eventObject', eventObject)

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 1070,
            revert: true, // will cause the event to go back to its
            revertDuration: 0 //  original position after the drag
          })

        })
      }

      ini_events($('#external-events div.external-event'))

      /* initialize the calendar
       -----------------------------------------------------------------*/
      //Date for the calendar events (dummy data)
      var date = new Date()
      var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

      var Calendar = FullCalendar.Calendar;
      var Draggable = FullCalendarInteraction.Draggable;

      var containerEl = document.getElementById('external-events');
      var checkbox = document.getElementById('drop-remove');
      var calendarEl = document.getElementById('calendar');

      // initialize the external events
      // -----------------------------------------------------------------

      new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function(eventEl) {
          console.log(eventEl);
          return {
            title: eventEl.innerText,
            backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
            textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
          };
        }
      });

      var calendar = new Calendar(calendarEl, {
        plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        'themeSystem': 'bootstrap',

        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(info) {
          // is the "remove after drop" checkbox checked?
          if (checkbox.checked) {
            // if so, remove the element from the "Draggable Events" list
            info.draggedEl.parentNode.removeChild(info.draggedEl);
          }
        }
      });

      calendar.render();
      // $('#calendar').fullCalendar()

      /* ADDING EVENTS */
      var currColor = '#3c8dbc' //Red by default
      //Color chooser button
      var colorChooser = $('#color-chooser-btn')
      $('#color-chooser > li > a').click(function(e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        //Add color effect to button
        $('#add-new-event').css({
          'background-color': currColor,
          'border-color': currColor
        })
      })
      $('#add-new-event').click(function(e) {
        e.preventDefault()
        //Get value and make sure it is not null
        var val = $('#new-event').val()
        if (val.length == 0) {
          return
        }

        //Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color': currColor,
          'color': '#fff'
        }).addClass('external-event')
        event.html(val)
        $('#external-events').prepend(event)

        //Add draggable funtionality
        ini_events(event)

        //Remove event from text input
        $('#new-event').val('')
      })
    })
  </script>
</body>

</html>