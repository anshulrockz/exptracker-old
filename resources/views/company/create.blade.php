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
                                Details
                            </h2>
                        </div>
                        <div class="body">
                            <form>
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter company name">
                                    </div>
                                </div>
                                <label for="code">Code</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="code" name="code" class="form-control" placeholder="Enter company code">
                                    </div>
                                </div>
                                <label for="registration">Registration No</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="registration" name="registration" class="form-control" placeholder="Enter company registration no">
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
                                <label for="cin">Corporate Identity Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="cin" name="cin" class="form-control" placeholder="Enter company CIN number">
                                    </div>
                                </div>
                                <label for="stn">Service Tax Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="stn" name="stn" class="form-control" placeholder="Enter company name">
                                    </div>
                                </div>
                                <label for="name">GST Number</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control" placeholder="Enter company name">
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
