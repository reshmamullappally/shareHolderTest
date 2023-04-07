@extends('layouts.theme')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Share Summary Report</h3>
                </div>

                <!-- /.card-header -->
                </div>

                <div class="card">
              <div class="card-header">
                <h3 class="card-title">Share Summary</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-md-4">
                      <div class="form-group">
                        <label>Total Collected Amount</label>
                        <label class="form-control">asas</label> 
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Total Expected Amount</label>
                        <label class="form-control">asas</label> 
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Due Amount</label>
                        <label class="form-control">asas</label> 
                      </div>
                    </div>
                </div>
                <hr>
                   
                <div class="row"><div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                  <tr>
                    <th>Name</th>
                   <th>Due Payment Date</th>
                   <th>Due Amount(INR)</th>
                   <th>Paid Date</th>
                   <th>Paid Amount(INR)</th>
                   <th>Balance Amount(INR)</th>
                  </tr>
                  </thead>
                  <tbody>

                  
                  <tr >
                    <td >Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                    <td>A</td>
                  </tr>
                 </tbody>
                  
                </table></div></div>
                </div>
              
              <!-- /.card-body -->
            </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->
    @endsection
    @section('script')
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
    @endsection