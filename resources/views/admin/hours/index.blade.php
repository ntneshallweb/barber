@extends('admin.layouts.header')

@section('title')
            Hours Admin
@endsection()

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hours List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Hours</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-12">
                    <a href="{{url('admin/hours/create')}}" class="btn btn-primary btn-md active float-sm-right btn-md"
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
                                <th scope="col">Day</th>
                                <!-- <th scope="col">Designation</th> -->
                                <th scope="col">Start Time</th>
                                <th scope="col">End Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hours as $hour)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <a href="{{url('admin/hours/edit', $hour->id)}}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Are you sure?')" href="{{url('admin/hours/delete', $hour->id)}}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                <td>{{ $hour->day }}</td>
                                <td>{{ $hour->starttime }}</td>
                                <td>{{ $hour->endtime }}</td>
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