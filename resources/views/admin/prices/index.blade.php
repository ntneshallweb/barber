@extends('admin.layouts.header')

@section('title')
            Prices Admin
@endsection()

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Prices List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Prices</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-12">
                    <a href="{{url('admin/prices/create')}}" class="btn btn-primary btn-md active float-sm-right btn-md"
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
                                <th scope="col">Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prices as $price)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <a href="{{url('admin/prices/edit', $price->id)}}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{url('admin/prices/delete', $price->id)}}" method="post">
                                        <a onclick="return confirm('Are you sure?')" href="{{url('admin/prices/delete', $price->id)}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <input name="_method" type="hidden" value="DELETE">
                                    </form>
                                </td>
                                <td>{{ $price->title }}</td>
                                <td>{{ $price->price }}</td>
                                <td>{{ $price->description }}</td>
                                <td>{{ $price->type }}</td>
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