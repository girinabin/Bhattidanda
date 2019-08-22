@extends('cd-admin.home-master')
@section('page-title')
Show Service
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Services
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Services/View Services</li>
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
              <a href="{{ route('services.create') }}"><button class="btn btn-primary">Add</button></a>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>ServiceName</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($service as $services)
                    <tr>
                      <td>{{$services->id}}</td>
                      <td>{{$services->name}}
                      </td>
                      <td><img src="{{ url('storage/app/public/'.$services->image) }}  " height="100px"; alt=""></td>
                      <td><span class="label label-warning">{{$services->active}}</span></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary">Action</button>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href=""  data-toggle="modal" data-target="#myModal{{$services->id}}">
                            <i class="fa fa-edit"></i> Edit</a></li>
                            {{-- edit modal below
                            --}}
                            
                            <li><a href="{{route('services.show',$services->id)}}"><i class="fa fa-eye"></i>View</a></li>

                            <li><a href="" data-toggle="modal" data-target="#myModaldelete{{$services->id}}"><i class="fa fa-trash"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    
                    
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>id</th>
                    <th>ServiceName</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- edit model -->
@foreach($service as $services)
<div id="myModal{{$services->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Service</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form" action="{{ route('services.update',$services->id) }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name') ?? $services->name}}" id="name" placeholder="Enter Service name">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image">
              </div>
              <div class="form-group">
                <label for="altimage">Alt.Image</label>
                <input type="text" class="form-control" name="altimage" value="{{old('altimage') ?? $services->altimage}}" id="altimage" placeholder="Enter image text">
              </div>
              <div class="form-group">
                  <label for="name">Summary</label>
                  <textarea name="summary" class="form-control" name="summary"  id="">{{old('summary') ?? $services->summary }}</textarea>
                </div>
              <div class="form-group">
                  <label for="active">Status</label>  
                  <select name="active" id="active" class="form-control">
                    <option value=" "disabled>Select Service status</option>
                    <option value="1"{{$services->active=='Available' ? 'selected':''}}>Available</option>
                    <option value="0"{{$services->active=='Unavailable'? 'selected':''}}>Unavialble</option>

                  </select> 
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
{{-- delete modal --}}
<div id="myModaldelete{{$services->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Services</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete {{$services->name}}??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('services.destroy',$services->id) }}" method="POST">
      @method('DELETE')
      @csrf
          <button type="submit" class="btn btn-warning pull-left">Delete</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    {{-- </form> --}}
    </div>
  </div>
</div>                           
{{-- <div id="myModal{{$services->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Services</h4>
      </div>
      <div class="modal-body">
        <h2> <p>Are you sure??</p> </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> --}}
@endforeach
@endsection