<div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <label>Installment due date and share amount details</label>
    </div>
    </div>
</div>
@if($installation_type==4)
<div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="startDateInput1">Due Date </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="startDateInput1">Installment Amount </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <button id="add_custom_date" class="btn btn-primary">Add Custom Date</button>
                    </div>
                </div>
            </div>
            <div class="parent_div">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <input  type="date" name="due_date" value="" class="form-control " 
                        id="dueDateInput1" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <input type="text" value="" name="installment_amount" class="form-control " 
                        id="installmentAmountInput1" >
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
    <div class="col-md-4">
        <div class="form-group">
        <label for="startDateInput1">Total Installment Amount:{{$total_amount}}(Duration : {{$duration}} Year) </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
        <label for="startDateInput1"> </label>
        <input readonly type="text" name="total_installment_amount" value="{{$total_amount}}" class="form-control " id="installmentAmountInput1" >
        </div>
    </div>
</div> 
@else
    @if(!empty($install_dates))
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="startDateInput1">Due Date </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="startDateInput1">Installment Amount </label>
                    </div>
                </div>
            </div>
            @foreach($install_dates as $install_date)
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <input readonly type="text" name="due_date" value="{{$install_date}}" class="form-control " 
                    id="dueDateInput1" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input readonly type="text" value="{{$install_amount}}" name="installment_amount" class="form-control " 
                    id="installmentAmountInput1" >
                    </div>
                </div>
            </div> 
            @endforeach 
    @endif
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
        <label for="startDateInput1">Total Installment Amount:{{$total_amount}}(Duration : {{$duration}} Year) </label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
        <label for="startDateInput1"> </label>
        <input readonly type="text" name="total_installment_amount" value="{{$total_amount}}" class="form-control " id="installmentAmountInput1" >
        </div>
    </div>
</div>
@endif
 
<script>
    jQuery(document).ready( function () {
        $("#add_custom_date").click( function(e) {
          e.preventDefault();
        $(".parent_div").append(`<div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <input  type="date" name="due_date" value="" class="form-control " 
                        id="dueDateInput1" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <input type="text" value="" name="installment_amount" class="form-control " 
                        id="installmentAmountInput1" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <a href="#" class="remove_this btn btn-danger">remove</a>
                        </div>
                    </div>
                </div>`);
        return false;
        });

    jQuery(document).on('click', '.remove_this', function() {
        jQuery(this).parent().remove();
        return false;
        });
    });
</script> 