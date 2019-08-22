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
		@if(Session::has('success'))
                <div class="alert alert-warning">Data deleted succesfully!</div>
                {{Session::get("message",'')}}
                @endif
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
									<div class="alert-warning">{{$errors->first('description')}}</div>
									<label for="name">Carousel Description</label>
									<textarea name="description" class="form-control" id="summernote"></textarea>
								</div>
								<div class="form-group">
									<div class="alert-warning">{{$errors->first('image')}}</div>
									<label for="carouselimage">Carousel Image</label>
									<input type="file" name="image" id="carouselimage">
								</div>
								<div class="form-group">
									<div class="aler-warning">{{$errors->first('altimage')}}</div>
									<label for="altimage">Alt Image</label>
									<input type="text" class="form-control" name="altimage" id="altimage" placeholder="Enter image text">
								</div>
								<div class="form-group">
									<div class="alert-warning">{{$errors->first('active')}}</div>
									<label for="active">Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="active"  value="1">Active<br>
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="active"  value="0" >Inactive<br>
										</label>
									</div>
								</div>
								
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add</button>
									{{-- <button type="submit" class="btn btn-danger pull-right">Cancel</button> --}}
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	@endsection