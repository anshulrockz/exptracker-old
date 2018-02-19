@extends('layouts.app')

@section('content')

<!-- Bootstrap Select Css -->
<link href="{{ asset('bsb/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
  
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="header">
                <h2>
                    Employee
                </h2>
            </div>
            <div class="body">
                <ol class="breadcrumb breadcrumb-bg-pink">
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li><a href="{{ url('/employees') }}">Employee</a></li>
                    <li><a href="{{ url('/employees/'.$employee->id) }}">{{$employee->name}}</a></li>
                    <li class="active">Edit</li>
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
                <form method="post" action="{{route('employees.update',$employee->id)}}">
                	{{ csrf_field() }}
	                {{ method_field('PUT') }}
                    <div class="row clearfix">
	                	<div class="col-sm-6">
		                    <label for="name">Name</label>
		                    <div class="form-group">
		                        <div class="form-line">
		                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter company name" value="{{ $employee->name }}" >
		                        </div>
		                    </div>
	                    </div>
	                    <div class="col-sm-6">
		                    <label for="mobile">Mobile</label>
		                    <div class="form-group">
		                        <div class="form-line">
		                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile number" value="{{ $employee->mobile }}">
		                        </div>
		                    </div>
	                    </div>
	                    <div class="col-sm-6">
		                    <label for="phone">Phone</label>
		                    <div class="form-group">
		                        <div class="form-line">
		                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number" value="{{ $employee->phone }}">
		                        </div>
		                    </div>
	                    </div>
	                    <div class="col-sm-6">
		                    <label for="email">Email</label>
		                    <div class="form-group">
		                        <div class="form-line">
		                            <input type="text" id="email" name="email" class="form-control" placeholder="Enter email id" value="{{ $employee->email }}">
		                        </div>
		                    </div>
	                    </div>
	                    <div class="col-sm-6">
		                    <label for="dob">Date Of Birth</label>
		                    <div class="form-group">
		                        <div class="form-line">
		                            <input type="text" id="dob" name="dob" class="form-control" placeholder="Enter dob" value="{{ $employee->dob }}">
		                        </div>
		                    </div>
	                    </div>
	                    
	                    <div class="col-sm-6">
		                    <label for="location">Location</label>
		                    <div class="form-group">
			                    <div class="form-line">
			                        <select class="form-control show-tick" id="location" name="location">
			                            <option value="">-- Please select location --</option>
			                            @foreach($locations as $list)
			                            <option value="{{$list->id}}" @if($list->id==$employee->location_id ) selected="selected" @endif >{{$list->name}}</option>
			                            @endforeach
			                        </select>
		                    	</div>
	                    	</div>
	                    </div>
	                    <div class="col-sm-6">
		                    <label for="employee_type">Employee Type</label>
		                    <div class="form-group">
			                    <div class="form-line">
			                        <select class="form-control show-tick" id="employee_type" name="employee_type">
			                            <option value="">-- Please select location --</option>
			                            @foreach($employee_types as $list1)
			                            <option value="{{$list1->id}}" @if( $list1->id==$employee->employee_type ) selected="selected" @endif >{{$list1->name}}</option>
			                            @endforeach
			                        </select>
		                    	</div>
	                    	</div>
	                    </div>
	                    
	                    <div class="col-sm-6">
		                    <label for="designation">Designation</label>
		                    <div class="form-group">
			                    <div class="form-line">
			                        <select class="form-control show-tick" id="designation" name="designation">
			                            <option value="">-- Please select location --</option>
			                            <option value="Manager">Manager</option>
			                        </select>
		                    	</div>
	                    	</div>
	                    </div>
	                    
	                    <div class="col-sm-6">
		                    <label for="hod">Head Of Departmant(HOD)</label>
		                    <div class="form-group">
			                    <div class="form-line">
			                        <select class="form-control show-tick" id="hod" name="hod">
			                            <option value="">-- Please select HOD --</option>
			                            <option value="1">-- Admin --</option>
			                        </select>
		                    	</div>
	                    	</div>
	                    </div>
	                    <div class="col-sm-6">
		                    	<label for="hod_self">Are You HOD?</label>
	                			<input type="checkbox" id="hod_self" name="hod_self" value="1" class="filled-in" style="opacity:1;left:25%" @if( $employee->hod_self==1 ) checked @endif />
	                	</div>
	                    <div class="col-sm-12">
		                    <label for="address">Address</label>
		                    <div class="form-group">
		                        <div class="form-line">
		                            <textarea id="address" name="address" rows="1" class="form-control no-resize auto-growth" placeholder="Enter address of person(press ENTER for more lines)">{{ $employee->address }}</textarea>
		                        </div>
		                    </div>
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
