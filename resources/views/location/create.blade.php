@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="card">
	            <div class="body">
	                <ol class="breadcrumb breadcrumb-bg-pink">
	                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
	                    <li><a href="{{ url('/locations') }}">Locations</a></li>
	                    <li class="active">Create New</li>
	                </ol>
	            </div>
	        </div>
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
                            <form>
                            
                            	
                                <label for="name">Name</label>
                                <select class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter location name">
                                    </div>
                                </div>
                                <label for="contact_person">Contact Person</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="contact_person" name="contact_person" class="form-control" placeholder="Enter contact person name">
                                    </div>
                                </div>
                                <label for="code">Code</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="code" name="code" class="form-control" placeholder="Enter location code">
                                    </div>
                                </div>
                                <label for="registration">Registration No</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="registration" name="registration" class="form-control" placeholder="Enter location registration no">
                                    </div>
                                </div>
                                <label for="mobile">Mobile</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile number">
                                    </div>
                                </div>
                                <label for="phone">Phone</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <label for="email">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter email id">
                                    </div>
                                </div>
                                
                                <label for="gst">GST Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="gst" name="gst" class="form-control" placeholder="Enter gst number">
                                    </div>
                                </div>
                                <label for="ctpc">Cylider Test Peso Code</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="ctpc" name="ctpc" class="form-control" placeholder="Enter Cylider Test Peso Code">
                                    </div>
                                </div>
                                <label for="ltpc">Leakage Test Peso Code</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="ltpc" name="ltpc" class="form-control" placeholder="Enter Leakage Test Peso Code">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</div>


    <!-- Select Plugin Js -->
    <script src="{{ asset('bsb/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    
    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('bsb/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    
@endsection
