 @extends('layouts.app')

@section('content')
<!-- Bootstrap Select Css -->
<link href="{{ asset('bsb/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Location
                </h2>
            </div>
            <div class="body">
                <ol class="breadcrumb breadcrumb-bg-pink">
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li><a href="{{ url('/locations') }}">Location</a></li>
                    <li class="active">Create New</li>
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
                <form method="post" action="{{ route('locations.store') }}">
                	{{ csrf_field() }}
                    <label for="name">Workshops</label>
                    <div class="form-group">
                        <select class="form-control show-tick" id="location" name="workshop">
                            <option value="">-- Please select location --</option>
                            @foreach($workshop as $list)
                            <option value="{{$list->id}}">{{$list->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="name">Name</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control" placeholder="Enter Location name">
                        </div>
                    </div>
                    <label for="contact_person">Contact Person</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="contact_person" value="{{ old('contact_person') }}" name="contact_person" class="form-control" placeholder="Enter contact person name">
                        </div>
                    </div>
                    <label for="mobile">Mobile</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="mobile" value="{{ old('mobile') }}" name="mobile" class="form-control" placeholder="Enter mobile number">
                        </div>
                    </div>
                    <label for="phone">Phone</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" id="phone" value="{{ old('phone') }}" name="phone" class="form-control" placeholder="Enter phone number">
                        </div>
                    </div>
                    <label for="address">Address</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea id="address" name="address" rows="1" class="form-control no-resize auto-growth" placeholder="Enter address of Location (press ENTER for more lines)">{{ old('address') }}</textarea>
                        </div>
                    </div>
                    <label for="remark">Remark</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea id="remark" name="remark" rows="1" class="form-control no-resize auto-growth" placeholder="Enter remark if any...">{{ old('remark') }}</textarea>
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
