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
                  <a href="{{ route('carousels.create') }}"><button class="btn btn-primary">Add</button></a>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                  <div class="row ">
                    @foreach($carousel as $carousels)
                    <div class="col-md-4 rowedit">
                      <img src="{{asset('public/uploads/carousel/'.$carousels->image)}}"  alt="" height="300px" width="300px">
                      <a href="{{ route('carousels.show',$carousels->id) }}"><button class="btn btn-primary pull-left buttonedit">View</button></a>
                      <a href="" data-toggle="modal" data-target="#delete{{$carousels->id}}"><button class="btn btn-danger pull-right buttonedit">Delete</button></a>
                    </div>
                    
                    @endforeach
                    
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
  
  {{-- delete modal --}}
   @foreach($carousel as $carousels)
    <div id="delete{{$carousels->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Carousel Image</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete ??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('carousels.destroy',$carousels->id) }}" method="POST">
            @method('DELETE')
            @csrf
          <button type="submit" class="btn btn-danger pull-left">Delete</button>
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @endsection