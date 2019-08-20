@extends('cd-admin.home-master')
@section('page-title')
Services Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Services
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Services/Add Services</li>
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
							<h3 class="box-title">Add Services</h3>
						</div>
						<form role="form" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<div class="alert-warning">{{$errors->first('name')}}</div>
									<label for="name">Name</label>
									<input type="text" class="form-control" value="{{old('name')}}"id="name" placeholder="Enter Service name" name="name">
								</div>
								<div class="form-group">
									<div class="alert-warning">{{$errors->first('image')}}</div>

									<label for="image">Image</label>
									<input type="file" id="image" name="image">
								</div>
								<div class="form-group">
									<div class="alert-warning">{{$errors->first('altimage')}}</div>

									<label for="altimage">Alt.Image</label>

									<input type="text" class="form-control"  name="altimage" value="{{old('altimage')}}"id="altimage" placeholder="Enter image text">
								</div>
								<div class="form-group">
									<label for="name">Summary</label>
									<div class="alert-warning">{{$errors->first('summary')}}</div>

									<textarea name="summary" class="form-control" id="summary">{{old('summary')}}</textarea>
								</div>
								
								<div class="form-group">
									<label for="active">Status</label>	
									<select name="active" id="active" class="form-control">
										<option value="	"disabled>Select Service status</option>
										<option value="1">Available</option>
										<option value="0">Unavialble</option>

									</select>	
								</div>

								
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
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