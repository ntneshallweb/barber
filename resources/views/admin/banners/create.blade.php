@extends('admin.layouts.header')

@section('title')
Banners Admin
@endsection()

@section('content')
   
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
               <h3 class="card-title">Add new Project</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('admin/banner/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Banner Images</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="images[]" class="custom-file-input" id="exampleInputFile" multiple>
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Banner Title:</strong>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter Banner Title" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Banner description:</strong>
                        <input type="text" class="form-control" name="description"  id="description" placeholder="Enter Description" required autofocus>
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
@endsection()

@section('scripts')


@endsection()