@extends('layouts.web')
@section('title','All records of Input')
@section('content')
<div class="page-loader">
    <div class="page-loader__spinner">
        <svg viewBox="25 25 50 50">
            <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<section class="content">
    <header class="content__title">
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>All records of Input costs</title>
	<link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

        <h1>All records of Input costs</h1>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Input costs records</h4>

            <div class="table-responsive">
			
              <table id="example1" class="table table-bordered table-hover">
			   
			  
                              <thead class="thead-default">
                                  <tr>
								      <th>ID</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Quantity</th>
                                      <th>Unit</th>
                                      <th>Amount</th>
                                      <th>Image</th>
                                      <th>Reported by</th>
                                      <th>Options</th>
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
								     <th>id</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Quantity</th>
                                      <th>Unit</th>
                                      <th>Amount</th>
                                      <th>Image</th>
                                      <th>Reported by</th>
                                      <th>Options</th>
                                  </tr>
                              </tfoot>
                              @foreach($data as $ct)
                              <tbody>
                                  <tr>
								      <td>{{$ct->id}}</td>
                                      <td>{{$ct->name}}</td>
                                      <td>{{$ct->date}}</td>
                                      <td>{{$ct->quantity}}</td>
                                      <td>{{$ct->unit}}</td>
                                      <td>{{$ct->amount}}</td>
                                      <td>{{$ct->image}}</td>
                                      <td>{{$ct->report}}</td>
                                      <td>
                                        <button class="btn btn-secondary btn-sm" data-toggle="dropdown">Options</button>
                                        <!<div class="dropdown-menu">
                                            <a href="/{{ $ct->id }}/show" class="dropdown-item">Show</a>
                                            <a href="" class="dropdown-item">Edit</a>

                                        </div>
                                      </td>
                                  </tr>
                              </tbody>
                            

                              @endforeach
                          </table>
                          <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
        </div>
    </div>

    <footer class="footer hidden-xs-down">
        <p>© Material Admin Responsive. All rights reserved.</p>

        <ul class="nav footer__nav">
            <a class="nav-link" href="#">Homepage</a>

            <a class="nav-link" href="#">Company</a>

            <a class="nav-link" href="#">Support</a>

            <a class="nav-link" href="#">News</a>

            <a class="nav-link" href="#">Contacts</a>
        </ul>
    </footer>
<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
		 <!-- Vendors: Data tables -->
        <script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
        <script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
        
      
        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
</section>
@endsection
