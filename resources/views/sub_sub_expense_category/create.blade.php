@extends('layouts.app')

@section('content')
<!-- Bootstrap Select Css -->
<link href="{{ asset('bsb/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

<!-- AJAX DD Selecter for Sub Expense Js -->
<script>
$(function(){
$(".search").change(function(){
	var id = $('#expense_category').val();
	if(id != ''){
		$.ajax({
			type: "GET",
			url: "{{url('/subsubexpenses/ajax')}}",
			data:'id='+id,
			success: function(data){
				var data = JSON.parse(data);
//				if(obj[0].length >0){
//					var expense_category = obj[0][0].party_name;
//					var function_date = dfy_format(obj[0][0].function_date);
//					$('#expense_category').val(party_name);
//					$('#expense_category').prop("disabled","true");
					console.log(data);
		            var selOpts = "";
//		            alert(data[0].id);
		            for (i=0;i<data.length;i++)
		            {
		                var id = data[i].id; 
		                var val = data[i].name;
		                selOpts += "<option value='"+id+"'>"+val+"</option>";
		            }
		            $('#sub_expenses').append(selOpts);
//				}
//				else{
//					$("form").before('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Oops!</strong> No sub categories found!</div>');
//				}
			}
		});
	}
});
});
</script>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="header">
                <h2>
                    Sub Sub Expense Category
                </h2>
            </div>
            <div class="body">
                <ol class="breadcrumb breadcrumb-bg-pink">
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li><a href="{{ url('/subsubexpenses') }}">Sub Sub Expense Category</a></li>
                    <li class="active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		@include('layouts.flashmessage')
	</div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Details
                </h2>
            </div>
            <div class="body">
                <form method="post" action="{{route('subsubexpenses.store')}}">
                	{{ csrf_field() }}
                    <label for="expense_category">Expense Category</label>
                    <div class="form-group">
                        <select class="form-control show-tick search" id="expense_category" name="expense_category">
                            <option value="">-- Please select expense category --</option>
                            @foreach($expense_category as $list)
                            <option value="{{$list->id}}">{{$list->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="sub_expenses">Sub Expense Category</label>
                    <div class="form-group">
                        <select class="form-control show-tick" id="sub_expenses" name="sub_expenses">
                            <option value="">-- Please select sub expense category --</option>
                        </select>
                    </div>
                    <label for="name">Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter expense category name" value="{{ old('name') }}" >
                        </div>
                    </div>
                    <label for="description">Description</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea id="description" name="description" rows="1" class="form-control no-resize auto-growth" placeholder="Enter description(press ENTER for more lines)">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Select Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
@endsection
