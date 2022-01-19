@extends('admin.layouts.header')
@section('title')
Clients Admin
@endsection()
@section('content')
<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Clients List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Clients</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-12">
                    <a href="{{url('admin/clients/create')}}" class="btn btn-primary btn-md active float-sm-right btn-md"
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
                                <!-- <th scope="col">title</th> -->
                                <th scope="col">Image</th>
                                <!-- <th scope="col">descripton</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <a href="{{url('admin/clients/edit', $client->id)}}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{url('admin/clients/delete', $client->id)}}" method="post">
                                        <a onclick="return confirm('Are you sure?')" href="{{url('admin/clients/delete', $client->id)}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <input name="_method" type="hidden" value="DELETE">
                                    </form>
                                </td>
                                <!-- </div> -->
                                <!-- <td>{{ $client->title }}</td> -->
                                <td><img style="width: 150px;height: 150px;" class="img-fluid" src="{{ url('public/uploads/'.$client->image) }}"></td>
                                <!-- <td>{{ $client->descripton }}</td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection