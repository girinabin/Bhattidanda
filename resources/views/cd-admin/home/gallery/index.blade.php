@extends('cd-admin.home-master')
@section('page-title')
Gallery Show
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Gallery
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
                  <a href="{{ route('images.create') }}"><button class="btn btn-primary">Add</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row ">
                   @foreach($image as $images)
                    <div class="col-md-4 rowedit">
                      <figure style='border:1px solid '>
                      <img src="{{asset('imageuploadforalbum/'.$images->image)}}" alt=""width="100%">
                      <figcaption style='text-align: center'>{{$images->name}}</figcaption>
                      {{-- <button class="btn btn-danger pull-right buttonedit">Delete</button> --}}
                      <a href="{{ route('images.show',$images->id) }}"><button class="btn btn-primary pull-left buttonedit">View</button></a>
                      <a href="" data-toggle="modal" data-target="#delete{{$images->id}}"><button class="btn btn-danger pull-right buttonedit">Delete</button></a>
                      </figure>
                    </div>
                @endforeach 
                  <!-- /.box-body -->
                </div>

              </div>
              
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
 
  @foreach($image as $images)
  <div id="delete{{$images->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Album</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete album {{$images->name}}??</p> </h2>
        </div>
        <div class="modal-footer">
           <form action="{{ route('images.destroy',$images->id) }}" method="POST">
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