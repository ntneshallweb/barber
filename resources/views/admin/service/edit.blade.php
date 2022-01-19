@extends('admin.layouts.header')
@section('title')
Services Admin
@endsection()
@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Service</h2>
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
               <h3 class="card-title">Add new Service</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/service/update',$service->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <strong>Service Title:</strong>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $service->name }}" placeholder="Enter Service Title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Service Description:</strong>
                        <textarea class="form-control" name="description" id="description" value="{{ $service->icon }}" placeholder="Enter Description" required>{{ $service->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" onchange="previewFile(this);" name="icon" class="icon" id="icon">
                            </div>
                        </div>
                        <?php
                        if ( $service->icon ) {
                            ?>
                            <span class="pip"><img class="imageThumb" class="img-fluid" src="{{ url( 'public/uploads/' . $service->icon ) }}">
                            </span>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <img style="height: 180px; display: none;" id="previewImg" src="{{ url('assets/images/blank-img.png') }}" alt="Placeholder">
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