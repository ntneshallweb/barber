@extends('admin.layouts.header')

@section('title')
            Contact Forms Admin
@endsection()

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact Forms List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Contact Forms</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
                
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
                                <th scope="col">Delete</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Website</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Contact_forms as $contact_form)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    <form action="{{url('admin/contact_forms/delete', $contact_form->id)}}" method="post">
                                        <a onclick="return confirm('Are you sure?')" href="{{url('admin/contact_forms/delete', $contact_form->id)}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <input name="_method" type="hidden" value="DELETE">
                                    </form>
                                </td>
                                <td>{{ $contact_form->name }}</td>
                                <td>{{ $contact_form->email }}</td>
                                <td>{{ $contact_form->subject }}</td>
                                <td>{{ $contact_form->website }}</td>
                                <td>{{ $contact_form->message }}</td>
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