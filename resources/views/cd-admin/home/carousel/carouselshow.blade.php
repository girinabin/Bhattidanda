@extends('cd-admin.home-master')
@section('page-title')
Carousel Show
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container">
    <section class="content-header">
      <h1>
      Carousel
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/View All Gallery</li>
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
              <div>
                <div class="box-header">
                  <h3 class="box-title"></h3>
                  <a href="{{ route('addimage') }}"><button class="btn btn-primary">Add</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row ">
                    <div class="col-md-4 rowedit">
                      <img src="{{asset('public/cd-admin/creatu/dist/img/carousel1.jpg')}}" alt="" height="100%" width="100%">
                      <button class="btn btn-danger pull-right buttonedit">Delete</button>
                      <a href="{{ route('carouselview') }}"><button class="btn btn-primary pull-left buttonedit">View</button></a>
                    </div>
                    <div class="col-md-4 rowedit">
                      <img src="{{asset('public/cd-admin/creatu/dist/img/carousel2.jpg')}}" alt="" height="100%" width="100%">
                      <button class="btn btn-danger pull-right buttonedit">Delete</button>
                      <a href="{{ route('imageview') }}"><button class="btn btn-primary pull-left buttonedit">View</button></a>
                    </div>
                    <div class="col-md-4 rowedit">
                      <img src="{{asset('public/cd-admin/creatu/dist/img/carousel3.jpg')}}" alt="" height="100%" width="100%">
                      <button class="btn btn-danger pull-right buttonedit">Delete</button>
                      <a href="{{ route('imageview') }}"><button class="btn btn-primary pull-left buttonedit">View</button></a>
                    </div>
                    
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
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Package</h4>
        </div>
        <div class="modal-body">
          <div class="box box-primary">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Package name">
                </div>
                <div class="form-group">
                  <label for="name">Description</label>
                  <textarea name="description" class="form-control" id="summernote"></textarea>
                </div>
                <div class="form-group">
                  <label for="name">Price</label>
                  <input type="number" class="form-control" id="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                  <label for="name">Discount</label>
                  <input type="number" class="form-control" id="discount" placeholder="Enter discount">
                </div>
                <div class="form-group">
                  <label for="">Status</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="services"  value="available" checked>Available<br>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="services"  value="notavailable" >Not Available<br>
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
          <h4 class="modal-title">Delete Package</h4>
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