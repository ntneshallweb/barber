@extends('admin.layouts.header')

@section('title')
Services Admin
@endsection()

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Service List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Service</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-12">
                    <a href="{{url('admin/service/create')}}" class="btn btn-primary btn-md active float-sm-right btn-md"
                     role="button" aria-pressed="true">Add</a>
                </div>
            </div><!-- /.row -->
          
            
        </div><!-- /.container-fluid -->
    </div>
   
      <!-- /.content-header -->

      <!-- Main content -->
    <div class="container-fluid">
        <div class="card">
            <div class="table-responsive">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <a href="{{url('admin/service/edit', $service->id)}}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{url('admin/service/delete', $service->id)}}" method="post">
                                        <a onclick="return confirm('Are you sure?')" href="{{url('admin/service/delete', $service->id)}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <input name="_method" type="hidden" value="DELETE">
                                    </form>
                                </td>
                                <td><img class="img-fluid" class="img-fluid" src="{{ url('public/uploads/'.$service->icon) }}"></td>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->description }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
      
@endsection()

@section('scripts')


@endsection()