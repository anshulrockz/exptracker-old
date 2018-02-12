@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
			<div class="header">
				<h2>
				    Details
				</h2>
			</div>
            <div class="body">
                <ol class="breadcrumb breadcrumb-bg-pink">
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li><a href="{{ url('/bankaccounts') }}">Bank Accounts</a></li>
                    <li class="active">Create New</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <!--<div class="header">
                <h2>
                    Details
                </h2>
            </div>-->
            <div class="body">
                <form>
                    <label for="name">User Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter account holder name">
                        </div>
                    </div>
                    <label for="bank_name">Bank Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Enter bank name">
                        </div>
                    </div>
                    <label for="account">Account number</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="account" name="account" class="form-control" placeholder="Enter account number">
                        </div>
                    </div>
                    <label for="ifsc">IFSC</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="ifsc" name="ifsc" class="form-control" placeholder="Enter IFSC code">
                        </div>
                    </div>
                    <label for="mobile">Mobile</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter mobile number">
                        </div>
                    </div>
                    <label for="address">Address</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="address" name="address" class="form-control" placeholder="Enter address of bank">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary m-t-15 waves-effect">Save</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
