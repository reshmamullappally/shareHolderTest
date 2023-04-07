@extends('layouts.theme')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ShareHolders <small>Create</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="createShareholdersForm" method="post" >
              @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="nameInput1">Name*</label>
                    <input type="text" name="name" class="form-control" id="nameInput1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="mobileInput1">Mobile*</label>
                    <input type="text" name="mobile" class="form-control" id="mobileInput1" placeholder="Enter mobile">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address*</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="countryInput1">Country</label>
                    <input type="text" name="country" value="India" class="form-control" id="countryInput1" placeholder="Enter country">
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection
    @section('script')
    <script>
    $(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            
        
       
            event.preventDefault();
            
            var form=$('#createShareholdersForm')[0];
            var data=new FormData(form);
            $.ajax({
                type:'POST',
                url:"{{route('shareholders.store')}}",
                data:data,
                processData:false,
                contentType:false,
                cache:false,
                success:function(){
                    location.replace("{{url('shareholders')}}");
                },
                error:function(){
    
                },
            });
           
       
        }
    });
    $('#createShareholdersForm').validate({
        rules: {
        email: {
            required: true,
            email: true,
        },
        mobile: {
            required: true,
        },
        name: {
            required: true
        },
        },
        messages: {
        email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
        },
        name: {
            required: "Please enter name",
        },
        mobile: {
            required: "Please enter mobile",
        },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        }
    });
    });
    </script>
@endsection
