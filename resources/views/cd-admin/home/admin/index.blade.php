@extends('cd-admin.home-master')
@section('page-title')
Admin Show
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Admin list
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i>Dashboard/Packages/View All Packages</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
              
              @if(Auth::user()->role=='SuperAdmin')
              <a href="{{ route('admin.add') }}"><button class="btn btn-primary">Add Admin</button></a>
              @endif
              
                
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Admin Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        
                        <th>Action</th>
                     
                      </tr>
                    </thead>

                    <tbody>

                    @foreach($admins as $admin)

                      <tr>
                        <td >{{ e(str_limit($admin->name,$limits='40')) }}</td>
                        <td>{{e($admin->email)}}</td>
                        <td>{{$admin->role}}</td>
                        <td>

                          @if(Auth::user()->role == 'SuperAdmin')
                              
                              @if(Auth::user()->email == $admin->email)
                              @else
                              <a href="" data-toggle="modal" data-target="#delete{{$admin->id}}"><button type="button" class="btn btn-danger"> Delete</button></a>
                              
                              @endif
                              

                          @else
                          @endif
                        </td>
                        
                      </tr>
                    @endforeach

                    </tbody>

                     

                    <tfoot>
                      <tr>
                        <th>Admin Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        
                        <th>Action</th>
                       
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
            
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
</div>



{{-- delete modal --}}
@foreach($admins as $admin)

<div id="delete{{$admin->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Admin</h4>
      </div>
      <div class="modal-body">
        <h2> <p>Are you sure to delete admin {{ e($admin->name) }}??</p> </h2>
      </div>
      <div class="modal-footer">
        <form action="{{ route('admin.destroy',$admin->id) }}" method="POST">
          @csrf
        <button type="submit" class="btn btn-danger pull-left" >Delete</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection