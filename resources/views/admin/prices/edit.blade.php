@extends('admin.layouts.header')
@section('title')
Prices Admin
@endsection()
@section('content')
<div class="container-fluid">
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Edit Prices</h2>
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
               <h3 class="card-title">Add new Prices</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/prices/update',$prices->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <strong>Prices title:</strong>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $prices->title }}" placeholder="Enter Prices title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Prices Price:</strong>
                        <input type="text" class="form-control" name="price"  id="price" value="{{ $prices->price }}" placeholder="Enter Price" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Prices Description:</strong>
                        <input type="text" class="form-control" name="description"  id="description" value="{{ $prices->description }}" placeholder="Enter Description" required autofocus>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="Haircut"  id="customRadio1" name="type" {{ ( $prices->type == "Haircut" ) ? 'checked' :'' }}>
                            <label for="customRadio1" class="custom-control-label">HAIRCUT</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" value="Shave" id="customRadio2" name="type" {{ ( $prices->type == "Shave" ) ? 'checked' :'' }}>
                            <label for="customRadio2" class="custom-control-label">SHAVE</label>
                        </div>
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