@extends('admin.layouts.header')
@section('title')
Hours Admin
@endsection()
@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Hours</h2>
	        </div>
	    </div>
	</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid mt-2"> 
    <div class="row">
        <div class="col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
               <h3 class="card-title">Add new Hours</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/hours/update',$hours->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <strong>Day:</strong>
                        <input type="text" class="form-control" name="day" value="{{ $hours->day }}" id="day" placeholder="Enter Day" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Start Time:</strong>
                        <input type="text" class="form-control" name="starttime" value="{{ $hours->starttime }}" id="starttime" placeholder="Enter Start Time" autofocus>
                    </div>
                    <div class="form-group">
                        <strong>End Time:</strong>
                        <input type="text" class="form-control" name="endtime" value="{{ $hours->endtime }}" id="endtime" placeholder="Enter End Time" autofocus>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection