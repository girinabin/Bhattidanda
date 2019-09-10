@extends('cd-admin.home-master')
@section('page-title')
Carousel Details
@endsection
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <section class="content-header">
      <h1>
      Carousel Images Details
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard/Carousel/<a href="{{ route('carousels.index') }}">View All Carousel</a>/Carousel Details</li>
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
                    <div class="col-md-12 ">
                      <img class="img-responsive" src="{{asset('public/uploads/carousel/'.$carousel->image)}}"  alt="" width="100%">
                      <p>{!!$carousel->description!!}</p>

                          <div class="btn-group box-footer">
                            @if($carousel->active=='Active')
                          <button type="button" class="btn btn-success">{{$carousel->active}}</button>
                          @else
                          <button type="button" class="btn btn-danger">{{$carousel->active}}</button>
                          @endif

                          <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span> 
                          <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu" style="min-width: 0px;">
                            <form action="{{ route('caro.stat',$carousel->id) }}" method="POST">
                              @csrf
                              
                            
                            <button type="submit" class="btn btn-secondary">{{$carousel->active =='Inactive' ? 'Active' : 'Inactive'}}</button>
                            </form>
                      
                          </ul>
                        </div>
                        
                        
                        <div>

                             
                            <a href="" data-toggle="modal" data-target="#delete{{$carousel->id}}"><button class="btn btn-danger pull-right button-edit " style="margin-top: -40px;">Delete</button></a>
                             
                        </div>
              
                      
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
  
  {{-- delete modal --}}
  <div id="delete{{$carousel->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Carousel image</h4>
        </div>
        <div class="modal-body">
          <h2> <p>Are you sure to delete ??</p> </h2>
        </div>
        <div class="modal-footer">
          <form action="{{ route('carousels.destroy',$carousel->id) }}" method="POST">
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