@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <ol class="breadcrumb breadcrumb-bg-pink">
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li><a href="{{ url('/companies') }}">Company</a></li>
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
                                Company Details
                            </h2>
                        </div>
                        <div class="body">
                            <form>
                            	{{ csrf_field() }}
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter company name" value="{{ old('name') }}" >
                                    </div>
                                </div>
                                <label for="code">Contact Person</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="code" name="code" class="form-control" placeholder="Enter company code" value="{{ old('code') }}">
                                    </div>
                                </div>
                                <label for="mobile">Mobile</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile number" value="{{ old('mobile') }}">
                                    </div>
                                </div>
                                <label for="phone">Phone</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <label for="email">Email</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Enter email id" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <label for="address">Address</label>
			                    <div class="form-group">
			                        <div class="form-line">
			                            <textarea id="address" value="{{ old('email') }}" name="address" rows="1" class="form-control no-resize auto-growth" placeholder="Enter address of workshop (press ENTER for more lines)"></textarea>
			                        </div>
			                    </div>
                                <label for="cin">Corporate Identity Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="cin" name="cin" class="form-control" placeholder="Enter company CIN number" value="{{ old('cin') }}">
                                    </div>
                                </div>
                                <label for="gst_no">GST Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="gst_no" name="gst_no" class="form-control" placeholder="Enter company GST number" value="{{ old('gst_no') }}">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection
