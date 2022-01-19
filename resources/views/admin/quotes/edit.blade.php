@extends('admin.layouts.header')
@section('title')
Quotes Admin
@endsection()
@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Quotes</h2>
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
               <h3 class="card-title">Add new Quotes</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/quotes/update',$quotes->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Quotes Images</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" onchange="previewFile(this);" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <img style="height: 180px; display: none;" id="previewImg" src="{{ url('assets/images/blank-img.png') }}" alt="Placeholder">
                    </div>
                    <div class="form-group">
                        <strong>Quotes Author:</strong>
                        <input type="text" class="form-control" name="author" id="author" value="{{ $quotes->author }}" placeholder="Enter Quotes author" autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Quotes Description:</strong>
                        <input type="text" class="form-control" name="description" value="{{ $quotes->description }}" id="descripton" placeholder="Enter Descripton" required autofocus>
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