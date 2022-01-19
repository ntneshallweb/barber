@extends('admin.layouts.header')
@section('title')
PopularDishes Admin
@endsection()
@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit PopularDishes</h2>
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
               <h3 class="card-title">Add new PopularDishes</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/popular_dishes/update',$PopularDishes->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <strong>PopularDishes title:</strong>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $PopularDishes->title }}" placeholder="Enter PopularDishes Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">PopularDishes Images</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" onchange="previewFile(this);" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <img style="height: 180px; display: none;" id="previewImg" src="{{ url('assets/images/blank-img.png') }}" alt="Placeholder">
                    </div>
                    <div class="form-group">
                        <strong>PopularDishes Price:</strong>
                        <input type="text" class="form-control" name="price" value="{{ $PopularDishes->price }}" id="price" placeholder="Enter Price" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>PopularDishes descripton:</strong>
                        <input type="text" class="form-control" name="descripton" value="{{ $PopularDishes->descripton }}" id="descripton" placeholder="Enter descripton" required autofocus>
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