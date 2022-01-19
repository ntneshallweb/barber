@extends('admin.layouts.header')

@section('title')
            Client Review
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
               <h3 class="card-title">Add New Client Review</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('admin/clientreviews/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Client Images</label>
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
                        <strong>Sub Heading:</strong>
                        <input type="text" class="form-control" name="subheading" id="subheading" placeholder="Enter Sub Heading" required autofocus>
                    </div>
                    <div class="form-group">
                        <strong>Descripton:</strong>
                        <textarea class="form-control" name="descripton"  id="descripton" placeholder="Enter descripton" required></textarea>
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