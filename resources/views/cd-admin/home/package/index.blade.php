@extends('cd-admin.home-master')
@section('page-title')
Package Show
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Packages
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
              <a href="{{ route('packages.create') }}"><button class="btn btn-primary">Add Package</button></a>
              <div>
                
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        
                        <th>Package Name</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($packages as $package)
                      <tr>
                        <td >{{ e(str_limit($package->name,$limits='40')) }}</td>
                        <td>
                          <div class="btn-group">
                            @if($package->active=='Available')
                          <button type="button" class="btn btn-success bsize">{{$package->active}}</button>
                          @else
                          <button type="button" class="btn btn-danger bsize">{{$package->active}}</button>
                          @endif

                          <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span> 
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                          <form action="{{ route('status.package',$package->id) }}" method="post">
                              @csrf
                      
                            <button type="submit" class="btn btn-secondary">{{$package->active =='Available' ? 'Unavailable' : 'Available'}}</button>
                            </form>
                      
                          </ul>
                        </div>
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-primary">Action</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href=""  data-toggle="modal" data-target="#edit{{$package->id}}">
                              <i class="fa fa-edit"></i> Edit</a></li>
                              {{-- edit modal below
                              --}}
                              <li><a href="{{ route('packages.show',[$package->id,$package->slug]) }}"><i class="fa fa-eye"></i>View</a></li>
                              <li><a href="" data-toggle="modal" data-target="#delete{{$package->id}}"><i class="fa fa-trash"></i>Delete</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Package Name</th>
                      <th>Status</th>
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
      </div>
    </section>
  </div>
</div>
<!-- edit model -->
@foreach($packages as $package)

<div id="edit{{$package->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Package</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form" action="{{ route('packages.update',$package->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('name')}}</div>
                  <label for="name">Package Name</label>
                  <input type="text" class="form-control" name="name" value="{{ $package->name }}" id="name" placeholder="Enter Package name">
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('image')}}</div>

                  <label for="image">Package Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <label for="altimage">Package Alt Image</label>
                  <input type="text" class="form-control" id="altimage" name="altimage" value="{{ $package->altimage }}" placeholder="Enter alternative image name">
                </div>
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('description')}}</div>

                  <label for="name">Package Description</label>
                  <textarea name="description" style="height: 100px;"  class="form-control summernote">{{ $package->description }}</textarea>
                </div>
                
                <div class="form-group">
                  <div class="text text-danger">{{$errors->first('active')}}</div>

                  <label for="active">Package Status</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="active"  value="1"{{$package->active=='Available'?'checked':''}}>Available<br>
          
                      <input type="radio" name="active"  value="0"{{$package->active=='Unavailable'?'checked':''}} >UnAvailable<br>
                    </label>
                  </div>
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endforeach


{{-- delete modal --}}
@foreach($packages as $package)

<div id="delete{{$package->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Package</h4>
      </div>
      <div class="modal-body">
        <h2> <p>Are you sure to delete package {{ e($package->name) }}??</p> </h2>
      </div>
      <div class="modal-footer">
        <form action="{{ route('packages.destroy',$package->id) }}" method="POST">
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