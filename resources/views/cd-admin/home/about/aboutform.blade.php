@extends('cd-admin.home-master')
@section('page-title')
About Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
	<section class="content-header">
		<h1>
			About
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i> Dashboard/About/Add About</li>
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
								<h3 class="box-title">Add About</h3>
							</div>
							<form role="form" method="post" action="{{ route('aboutstore') }}" enctype="multipart/form-data">
								@csrf
								<div class="box-body">
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('name')}}</div>
										<label for="name">About Name</label>
										<input type="text" class="form-control" name="name" value="{{old('name')}}"id="name" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('tagline')}}</div>
										<label for="name">About Tagline</label>
										<input type="text" class="form-control" name="tagline" id="name" value="{{old('tagline')}}" placeholder="Enter Tagline for name">
									</div>
									
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('image')}}</div>
										<label for="name">About Image</label>
										<input type="file" class="form-control" name="image" id="image">
									</div>
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('altimage')}}</div>

										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" name="altimage" value="{{old('altimage')}}" id="altimage" placeholder="Enter image name">
									</div>
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('description')}}</div>

										<label for="description">About Description</label>
										<textarea name="description" class="form-control summernote"  value="{{old('descripiton')}}"></textarea>
									</div>
									
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('pdf')}}</div>

										<label for="pdf">Pdf</label>
										<input type="file" class="form-control"  name="pdf" id="pdf">
									</div>
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('video')}}</div>
										<label for="video">Video link</label>
										<input type="url" class="form-control" name="video" value="{{old('video')}}" id="video">
									</div>

								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add About</button>

								</div>
							</form>
							<div class="box-footer">
									<a href="{{ URL()->previous() }}"><button class="btn btn-danger pull-right">Cancel</button></a>
							</div>
						</div>
					</div>
				</div>

			</section>
	</div>			
</div>
@endsection