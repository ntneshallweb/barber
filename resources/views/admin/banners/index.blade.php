@extends('admin.layouts.header')
@section('title')
Banners Admin
@endsection()
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Banner</h2>
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
               <h3 class="card-title">Banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/banners/update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Banner Images</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="images[]" id="files" class="" id="exampleInputFile">
                            </div>
                        </div>
                        <?php
                        $imgs = explode(", ",$banner->images);
                        if ($banner->image) {
                            ?>
                            <span class="pip"><img class="imageThumb" class="img-fluid" src="{{ url('public/uploads/'.$banner->image) }}">
                            </span>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <strong>Banner Title:</strong>
                        <input type="text" class="form-control" value="{{ $banner->title }}" name="title"
                            id="title" placeholder="Enter Title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Banner Sub Title:</strong>
                        <input type="text" class="form-control" value="{{ $banner->sub_title }}" name="subtitle"
                            id="subtitle" placeholder="Enter Sub Title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Banner description:</strong>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter Description" required>{{ $banner->description }}</textarea>
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