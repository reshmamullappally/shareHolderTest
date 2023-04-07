@extends('layouts.theme')

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
                        <label>ShareHolder Name</label>
                        <label class="form-control">asas</label> 
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Share Name</label>
                        <label class="form-control">asas</label> 
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                    <button class="btn btn-primary mt-4">Search</button>
                    </div>
                    </div>
                </div>
                <hr>
                   
                <div class="row">
                    <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                  <tr>
                    <th>Name</th>
                   <th>Due Payment Date</th>
                   <th>Due Amount(INR)</th>
                   <th>Paid Date</th>
                   <th>Paid Amount(INR)</th>
                   <th>Balance Amount(INR)</th>
                   <th>Payment</th>
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
                    <td><button class="btn btn-primary">Make Payment</button></td>
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
    
    <script>
  $(function () {
   

  });
</script>
    @endsection