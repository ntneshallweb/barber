@extends('admin.layouts.header')
@section('title')
Abouts Admin
@endsection()
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About</h2>
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
               <h3 class="card-title">About</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ url('admin/abouts/update',$about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">About Images</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="images[]" id="files" class="" id="exampleInputFile" multiple>
                            </div>
                        </div>

                        <?php
                        $imgs = explode(", ",$about->images);
                        for($i = 0; $i < sizeof($imgs); $i++){
                            ?>
                            <span class="pip"><img class="imageThumb" class="img-fluid" src="{{ url('public/uploads/'.$imgs[$i]) }}">
                            </span>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <strong>About Title:</strong>
                        <input type="text" class="form-control" value="{{ $about->title }}" name="title"
                            id="title" placeholder="Enter Title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>About content:</strong>
                        <textarea class="form-control" name="content" id="content" placeholder="Enter Content" required>{{ $about->content }}</textarea>
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