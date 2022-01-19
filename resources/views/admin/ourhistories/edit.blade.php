@extends('admin.layouts.header')
@section('title')
Our Histories Admin
@endsection()
@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Our Histories</h2>
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
               <h3 class="card-title">Add new Our Histories</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/ourhistories/update',$ourhistories->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Our Histories Images</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="images[]" id="files" class="" multiple>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <strong>Ourhistories Title:</strong>
                        <input type="text" class="form-control" value="{{ $ourhistories->title }}" name="title"
                            id="title" placeholder="Enter Title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Ourhistories description:</strong>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter Description" required>{{ $ourhistories->description }}</textarea>
                    </div> -->
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