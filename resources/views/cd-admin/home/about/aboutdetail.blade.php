@extends('cd-admin.home-master')
@section('page-title')	
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
	
	<section class="content-header">
		<h1>
			About Details
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i>Dashboard/About/Show About/About Details</li>
		</ol>
	</section>

	<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
				
            
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center textedit">
				<h2>{{e($about->name)}}</h2>
				<h3>{{e($about->tagline)}}</h3>
				<img src="{{url('public/uploads/about/'.$about->image)}}" alt="" class="rounded-circle" height="300px" width="500px">

					
				
				</div>
				
				<div class="col-md-3"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<p>{!!$about->description!!}</p>
						</div>
						<div class="col-md-1"></div>
						
					</div>
				</div>
				
				
							<a  href="{{asset('public/uploads/about/'.$about->pdf)}}"
		    ><button type="button" class="btn btn-warning pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>PDF FILE</button></a>
								<a href="{{e($about->video)}}" style="margin-right:10px;
			    "><button type="button" class="btn btn-warning pull-right video "><i class="fa fa-female" aria-hidden="true"></i>Video</button></a>
			    <a href="" data-toggle="modal" data-target="#myModal{{$about->id}}">
					
			    	<button class="btn btn-primary bsize" style="margin-left: 450px;">Edit</button>
			    </a>
			    
				</div>

				
			</div>
		</div>
	</div>

	</section>
	
	</div>
	<style>
		.pdf{
			margin-left: 10px;
			margin-bottom: 5px;
		}
		.video{
			margin-right: 10px;
			margin-bottom: 5px;
		}
	</style>
<div id="myModal{{$about->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit About</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">  
             <form role="form" method="post" action="{{ route('aboutupdate') }}" enctype="multipart/form-data">
              @csrf
                <div class="box-body">
                  <div class="form-group">
                    <div class="text text-danger">{{$errors->first('name')}}</div>
                    <label for="name">About Name</label>
                    <input type="text" class="form-control" name="name"  value="{{ $about->name }}">
                  </div>
                  <div class="form-group">
                    <div class="text text-danger">{{$errors->first('tagline')}}</div>

                    <label for="name">About Tagline</label>
                    <input type="text" class="form-control" name="tagline" value="{{$about->tagline}}">
                  </div>
                  
                  <div class="form-group">
                    <div class="text text-danger">{{$errors->first('image')}}</div>

                    <label for="name">About Image</label>
                    <input type="file" class="form-control" name="image"  >
                  </div>
                  <div class="form-group">
                    <div class="text text-danger">{{$errors->first('altimage')}}</div>

                    <label for="altimage">Alt Image</label>
                    <input type="text" class="form-control"  name="altimage" value="{{$about->altimage}}" >
                  </div>
                  <div class="form-group summernote-height-edit">
                    <div class="text text-danger">{{$errors->first('description')}}</div>

                    <label for="description">About Description</label>
                    <textarea name="description" class="form-control summernote" >{{ $about->description}}</textarea>
                  </div>
                
                  <div class="form-group">
                    <div class="text text-danger">{{$errors->first('pdf')}}</div>

                    <label for="pdf">Pdf</label>
                    <input type="file" class="form-control" name="pdf">
                  </div>
                  <div class="form-group">
                    <div class="text text-danger">{{$errors->first('video')}}</div>

                    <label for="video">Video link</label>
                    <input type="url" class="form-control" name="video" value="{{$about->video}}">
                  </div>

                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

                </div>
              </form>
        </div>
      </div>
      
    </div>

  </div>
</div	

@endsection