@extends('layouts.web')

@section('content')



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>| Calendar</title>
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
    
      <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                
               
              </div>
              <!-- /.card -->
              <div class="card">
                
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-body p-0">

        <div class="row">
          <div class="col-md-3">
            <div class="-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success ui-draggable ui-draggable-handle" style="position: relative;">Lunch</div>
                    <div class="external-event bg-warning ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                    <div class="external-event bg-info ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                    <div class="external-event bg-primary ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                    <div class="external-event bg-danger ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
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
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
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
                <div id="calendar" style="" class="fc fc-ltr fc-bootstrap"><div class="fc-toolbar fc-header-toolbar">
                  <div class="fc-left"><div class="btn-group"><button type="button" class="fc-prev-button btn btn-primary" aria-label="prev">
                    <span class="fa fa-chevron-left"></span>
                  </button><button type="button" class="fc-next-button btn btn-primary" aria-label="next"><span class="fa fa-chevron-right"></span></button></div><button type="button" class="fc-today-button btn btn-primary" disabled="">today</button></div><div class="fc-center"><h2>December 2020</h2></div><div class="fc-right"><div class="btn-group"><button type="button" class="fc-dayGridMonth-button btn btn-primary active">month</button><button type="button" class="fc-timeGridWeek-button btn btn-primary">week</button><button type="button" class="fc-timeGridDay-button btn btn-primary">day</button></div></div></div><div class="fc-view-container"><div class="fc-view fc-dayGridMonth-view fc-dayGrid-view" style=""><table class="table-bordered"><thead class="fc-head"><tr><td class="fc-head-container "><div class="fc-row table-bordered"><table class="table-bordered"><thead><tr><th class="fc-day-header  fc-sun"><span>Sun</span></th><th class="fc-day-header  fc-mon"><span>Mon</span></th><th class="fc-day-header  fc-tue"><span>Tue</span></th><th class="fc-day-header  fc-wed"><span>Wed</span></th><th class="fc-day-header  fc-thu"><span>Thu</span></th><th class="fc-day-header  fc-fri"><span>Fri</span></th><th class="fc-day-header  fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class=""><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 563px;"><div class="fc-day-grid"><div class="fc-row fc-week table-bordered" style="height: 93px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-other-month fc-past" data-date="2020-11-29"></td><td class="fc-day  fc-mon fc-other-month fc-past" data-date="2020-11-30"></td><td class="fc-day  fc-tue fc-past" data-date="2020-12-01"></td><td class="fc-day  fc-wed fc-past" data-date="2020-12-02"></td><td class="fc-day  fc-thu fc-past" data-date="2020-12-03"></td><td class="fc-day  fc-fri fc-past" data-date="2020-12-04"></td><td class="fc-day  fc-sat fc-past" data-date="2020-12-05"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2020-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2020-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-past" data-date="2020-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-wed fc-past" data-date="2020-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-thu fc-past" data-date="2020-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-fri fc-past" data-date="2020-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-sat fc-past" data-date="2020-12-05"><span class="fc-day-number">5</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered" style="height: 93px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-past" data-date="2020-12-06"></td><td class="fc-day  fc-mon fc-past" data-date="2020-12-07"></td><td class="fc-day  fc-tue fc-today alert alert-info" data-date="2020-12-08"></td><td class="fc-day  fc-wed fc-future" data-date="2020-12-09"></td><td class="fc-day  fc-thu fc-future" data-date="2020-12-10"></td><td class="fc-day  fc-fri fc-future" data-date="2020-12-11"></td><td class="fc-day  fc-sat fc-future" data-date="2020-12-12"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2020-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-mon fc-past" data-date="2020-12-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-tue fc-today alert alert-info" data-date="2020-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-12-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-12-12"><span class="fc-day-number">12</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered" style="height: 93px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2020-12-13"></td><td class="fc-day  fc-mon fc-future" data-date="2020-12-14"></td><td class="fc-day  fc-tue fc-future" data-date="2020-12-15"></td><td class="fc-day  fc-wed fc-future" data-date="2020-12-16"></td><td class="fc-day  fc-thu fc-future" data-date="2020-12-17"></td><td class="fc-day  fc-fri fc-future" data-date="2020-12-18"></td><td class="fc-day  fc-sat fc-future" data-date="2020-12-19"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2020-12-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-mon fc-future" data-date="2020-12-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-12-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-12-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-12-19"><span class="fc-day-number">19</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered" style="height: 93px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2020-12-20"></td><td class="fc-day  fc-mon fc-future" data-date="2020-12-21"></td><td class="fc-day  fc-tue fc-future" data-date="2020-12-22"></td><td class="fc-day  fc-wed fc-future" data-date="2020-12-23"></td><td class="fc-day  fc-thu fc-future" data-date="2020-12-24"></td><td class="fc-day  fc-fri fc-future" data-date="2020-12-25"></td><td class="fc-day  fc-sat fc-future" data-date="2020-12-26"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2020-12-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-mon fc-future" data-date="2020-12-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-12-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-fri fc-future" data-date="2020-12-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-sat fc-future" data-date="2020-12-26"><span class="fc-day-number">26</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered" style="height: 93px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-future" data-date="2020-12-27"></td><td class="fc-day  fc-mon fc-future" data-date="2020-12-28"></td><td class="fc-day  fc-tue fc-future" data-date="2020-12-29"></td><td class="fc-day  fc-wed fc-future" data-date="2020-12-30"></td><td class="fc-day  fc-thu fc-future" data-date="2020-12-31"></td><td class="fc-day  fc-fri fc-other-month fc-future" data-date="2021-01-01"></td><td class="fc-day  fc-sat fc-other-month fc-future" data-date="2021-01-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2020-12-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-mon fc-future" data-date="2020-12-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-tue fc-future" data-date="2020-12-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-wed fc-future" data-date="2020-12-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-thu fc-future" data-date="2020-12-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-01-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-01-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week table-bordered" style="height: 98px;"><div class="fc-bg"><table class="table-bordered"><tbody><tr><td class="fc-day  fc-sun fc-other-month fc-future" data-date="2021-01-03"></td><td class="fc-day  fc-mon fc-other-month fc-future" data-date="2021-01-04"></td><td class="fc-day  fc-tue fc-other-month fc-future" data-date="2021-01-05"></td><td class="fc-day  fc-wed fc-other-month fc-future" data-date="2021-01-06"></td><td class="fc-day  fc-thu fc-other-month fc-future" data-date="2021-01-07"></td><td class="fc-day  fc-fri fc-other-month fc-future" data-date="2021-01-08"></td><td class="fc-day  fc-sat fc-other-month fc-future" data-date="2021-01-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2021-01-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2021-01-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2021-01-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2021-01-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2021-01-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2021-01-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2021-01-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      


                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col --> 
            
            <!-- /.card -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
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
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
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
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
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
        'border-color'    : currColor,
        'color'           : '#fff'
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

@endsection
