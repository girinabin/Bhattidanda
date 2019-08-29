@extends('cd-admin.home-master')
@section('page-title')
Package Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Packages
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Packages/Add New Packages</li>
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
							<h3 class="box-title">Add Package</h3>
						</div>
						<form role="form" action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('name')}}</div>
									<label for="name">Package Name</label>
									<input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" placeholder="Enter Package name">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('image')}}</div>

									<label for="image">Package Image</label>
									<input type="file" class="form-control" id="image" name="image">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('altimage')}}</div>

									<label for="altimage">Package Alt Image</label>
									<input type="text" class="form-control" id="altimage" name="altimage" value="{{old('altimage')}}" placeholder="Enter alternative image name">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('description')}}</div>

									<label for="name">Package Description</label>
									<textarea name="description" class="form-control summernote"></textarea>
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('active')}}</div>

									<label for="active">Package Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="active"  value="1"{{old('active')=='1'?'checked':''}}>Available<br>
					
											<input type="radio" name="active"  value="0"{{old('active')=='0'?'checked':''}} >UnAvailable<br>
										</label>
									</div>
								</div>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								
								
							</div>
							<div class="box-footer">
								<a href="{{URL()->previous()}}"><button type="button" class="btn btn-danger pull-right">Cancel</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection