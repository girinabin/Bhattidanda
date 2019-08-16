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
              <a href="{{ route('addservice') }}"><button class="btn btn-primary">Add</button></a>
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
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary">Action</button>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href=""  data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-edit"></i> Edit</a></li>
                            {{-- edit modal below
                            --}}
                            
                            <li><a href="{{route('servicedetail')}}"><i class="fa fa-eye"></i>View</a></li>
                            <li><a href="" data-toggle="modal" data-target="#myModal1"><i class="fa fa-trash"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary">Action</button>
                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href=""><i class="fa fa-edit"></i>Edit</a></li>
                            <li><a href=""><i class="fa fa-eye"></i>View</a></li>
                            <li><a href=""><i class="fa fa-trash"></i>Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    
                    
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
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Service</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Service name">
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image">
              </div>
              <div class="form-group">
                <label for="altimage">Alt.Image</label>
                <input type="text" class="form-control" id="altimage" placeholder="Enter image text">
              </div>
              <div class="form-group">
                  <label for="name">Summary</label>
                  <textarea name="summary" class="form-control" id=""></textarea>
                </div>
              <div class="form-group">
                <label for="">Status</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="services"  value="Yes" checked>Available<br>
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="services"  value="NO" >Not Available<br>
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
{{-- delete modal --}}
<div id="myModal1" class="modal fade" role="dialog">
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
</div>
@endsection