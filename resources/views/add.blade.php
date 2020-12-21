@extends('layouts.web')

@section('content')
  <section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Add Farm Costs</h1>
            

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
                <h4 class="card-text">Fill in the required details to add new costs involed in the Farm for every period.</h4>
                 
                @if(Session::has('success'))
                    <div class="alert alert-success">
                      <strong>{!! Session::get('success') !!}</strong>
                    </div>
                @endif

                @if(Session::has('error'))
                    <div class="alert alert-danger">
                      <strong>{!! Session::get('error') !!}</strong>
                    </div>
                @endif

                      @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <span>{{ $error }}</span><br>
                    @endforeach
                </div>
              @endif
                <form method="POST" action="{{ route('incomes.store') }}" enctype="multipart/form-data">
                  @csrf
                
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                  <label>Name/Reason</label>
                    <input type="text" name="name" placeholder="Item name" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>Date </label>
                    <input type="date" class="form-control" name="date" placeholder="">
                    <i class="form-group__bar"></i>
                </div>
              </div>


            <div class="col-sm-4">

                <div class="form-group">
                  <label>Quantity</label>
                  <input type="text" name="quantity" placeholder="Quantity" class="form-control">
                  <i class="form-group__bar"></i>
              </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label>Unit cost</label>
                    <input type="text" name="unit" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group">
                  <label>Amount</label>
                    <input type="text" name="amount" class="form-control">
                    <i class="form-group__bar"></i>
                </div>
                </div>

                



            <div class="col-sm-4">
                <div class="form-group">
                  <label>Picture</label>
                    <input type="file" class="form-control" name="image" placeholder="Attach a picture if its avalilable">
                    <i class="form-group__bar"></i>
                </div>
                </div>
                
        
        </div>

                

        <div class="row">
      
            
                <div class="col-sm-4">
                <div class="form-group">
                  <label>Report By:</label>
                    <input type="text" name="report" class="form-control" placeholder="Person inputing data">
                    <i class="form-group__bar"></i>
                </div>
                </div>
                
                
        </div>
        
        

        <div class="row">
                    
                
            


                <!--fuel-->
                            

                <input type="hidden" name="deleted" value="N" class="form-control">

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <i class="form-group__bar"></i>
                </div>

              </form>

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
        
</section>
@endsection
