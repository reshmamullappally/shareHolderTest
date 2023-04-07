@extends('layouts.theme')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Share Amount Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="createShareForm">
              @csrf
                <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        
                        <label for="nameInput1">ShareHolder*</label>
                        <select name="share_holders_id" class="form-control required_field" id="shareHolderSelect1">
                          <option value="">Choose ShareHolder </option>
                          @foreach($shareholders as $share_holder)
                          <option value="{{$share_holder->id}}">{{$share_holder->name}}-{{$share_holder->email}}-{{$share_holder->mobile}}</option>
                          @endforeach
                         
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nameInput1">Share Name</label>
                        @php $shareName="Share".rand(1000,9999);@endphp
                        <input readonly type="text" value="{{$shareName}}" name="share_name" class="form-control required_field" id="shareNameInput1" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nameInput1">Duration - Year*</label>
                        <input type="number" name="duration" class="form-control required_field" id="durationInput1" placeholder="Enter Duaration">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="mobileInput1">Total Amount / Year*</label>
                        <input type="text" name="total_amount" class="form-control required_field" id="total_amountInput1" placeholder="Enter Total Amount">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="installmentTypeInput1">Installment Type*</label>
                        <select name="installation_type" class="form-control required_field" id="installmentTypeInput1">
                          <option value="">Choose Installment Type </option>
                          <option value="1">Monthly</option>
                          <option  value="2">Quarterly</option>
                          <option  value="3">Annual</option>
                          <option  value="4">Custom</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="startDateInput1">First Installment Starts on *</label>
                        <input type="date" name="start_date" class="form-control required_field" id="startDateInput1" placeholder="Enter Start Date">
                      </div>
                    </div>
                  </div>  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="mobileInput1">Payment Mode*</label>
                        <input type="text" name="payment_mode" class="form-control required_field" id="payment_modeInput1" placeholder="Enter Payment mode">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="mobileInput1">Office Staff*</label>
                        <input type="text" name="office_staff" class="form-control required_field" id="office_staffInput1" placeholder="Enter Staff Name">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card-body" id="share_amount_detail_div"></div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button id="create_share_details" disabled type="submit" class="btn btn-primary">Create</button>
                  <button type="reset" onClick="window.location.reload()" class="btn btn-primary">Reset</button>
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

      $(".required_field").on("change",function(){
        var isValid = true;
        $('.required_field').each(function() {
          if ( $(this).val() === '' )
              isValid = false;
        });
        $("#share_amount_detail_div").html('');
        if(isValid==true)
        {
          var share_holders_id=$("#shareHolderSelect1").val();
          var duration=$("#durationInput1").val();
          var total_amount=$("#total_amountInput1").val();
          var installation_type=$("#installmentTypeInput1").val();
          var start_date=$("#startDateInput1").val();
        $.ajax({
            type:'GET',
            url:"{{url('loadShareAmountDetails')}}",
            data:{'share_holders_id':share_holders_id,'duration':duration,'total_amount':total_amount,'installation_type':installation_type,'start_date':start_date},
            processData: true,
            contentType: false,
            cache: false,
            success:function(data){
                $("#share_amount_detail_div").append(data);
                $("#share_amount_detail_div").show();
                if(installation_type!=4)
                $("#create_share_details").removeAttr('disabled')
                $('.required_field').attr('readonly','readonly');
            },
            error:function(data){
                console.log(data);
                $("#share_amount_detail_div").hide();
            },
            });
        }
        else
        {
          $("#share_amount_detail_div").hide();
        }
      });
    $.validator.setDefaults({
        submitHandler: function () {
          event.preventDefault();
            
            var form=$('#createShareForm')[0];
            var data=new FormData(form);
            $.ajax({
                type:'POST',
                url:"{{route('shares.store')}}",
                data:data,
                processData:false,
                contentType:false,
                cache:false,
                success:function(){
                    location.replace("{{url('shares')}}");
                },
                error:function(){
    
                },
            });
           
       
        }
    });
    $('#createShareForm').validate({
        rules: {
        duration: {
            required: true,
        },
        total_amount: {
            required: true,
        },
        installation_type: {
            required: true
        },
        start_date: {
            required: true
        },
        payment_mode: {
            required: true
        },
        office_staff: {
            required: true
        },
        
        
        
        },
        messages: {
          office_staff: {
            required: "Please enter Staff Name",
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
