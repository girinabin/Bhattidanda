@extends('cd-admin.home-master')
@section('page-title')
Image Show
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Images
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/<a href="{{ route('images.index') }}">View All Gallery</a>/View</li>
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
                  <a href="{{ route('gallery.create',$image->id) }}"><button class="btn btn-primary">Add Image</button></a>
                  <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                  <div class="row ">
            
                    @foreach($img as $images)
                      <div class="col-md-4 rowedit">
                      <figure style="border: 1px solid">
                      <img src="{{ asset('public/uploads/gallery/'.$images->image) }}" alt="" height="350px" width="350px">
                      <a href="" data-toggle="modal" data-target="#delete{{$images->id}}"><button class="btn btn-danger pull-right buttonedit">Delete</button></a>

                      </figure>
                      </div>
                    @endforeach

                      
                  </div>
                  <div class="row">
                  <div class="col-md-10"></div>
                  <div class="col-md-2">
                  {{ $img->links() }}
                    
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
  {{-- delete modal --}}


  
  @foreach($img as $images)
  <div id="delete{{$images->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete image</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('imagealbums.destroy1',$images->id) }}" method="POST">
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