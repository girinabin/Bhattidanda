@extends('cd-admin.home-master')
@section('page-title')
Carousel Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Carousel
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Carousel/Add New Carousel</li>
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
							<h3 class="box-title">Add Carousel </h3>
						</div>
						<form role="form" action="{{ route('carousels.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('description')}}</div>
									<label for="name">Carousel Description</label>
									<textarea name="description" value="{{ old('description') }}" class="form-control" id="summernote"></textarea>
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('image')}}</div>
									<label for="carouselimage">Carousel Image</label>
									<input type="file" name="image" id="carouselimage">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('altimage')}}</div>
									<label for="altimage">Alt Image</label>
									<input type="text" class="form-control" name="altimage" value="{{ old('altimage')}}" id="altimage" placeholder="Enter image text">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('active')}}</div>
									<label for="active">Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="active"  value="1">Active<br>
										</label>
										<label>
											<input type="radio" name="active"  value="0" >Inactive<br>
										</label>
									</div>
								</div>
								
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add Carousel</button>
									
								</div>
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