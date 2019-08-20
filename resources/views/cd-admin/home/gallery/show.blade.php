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
        <li><i class="fa fa-dashboard"></i> Dashboard/View All Gallery/View</li>
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
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row ">
                    <?php $img = App\Image::where('album_id',$image->id)->get()->first();
                    
                    ?>
                      @foreach(json_decode($img->image) as $images)
                      <div class="col-md-4 rowedit">
                      <figure style="border: 1px solid">
                      <img src="{{ asset('imageinsidealbum/'.$images) }}" alt="" height="100%" width="100%">
                      <a href="" data-toggle="modal" data-target="#delete{{$img->id}}"><button class="btn btn-danger pull-right buttonedit">Delete</button></a>

                      </figure>
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
  {{-- delete modal --}}
  <div id="delete{{$img->id}}" class="modal fade" role="dialog">
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
          <form action="{{ route('imagealbums.destroy1',$img->id) }}" method="POST">
            @method('DELETE')
            @csrf
            
          <button type="submit" class="btn btn-danger pull-left">Delete</button>

          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endsection