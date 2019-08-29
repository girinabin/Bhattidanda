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
						<div class="box-body">
						<form role="form" action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('name')}}</div>
									<label for="name">Service Name</label>
									<input type="text" class="form-control" value="{{old('name')}}"id="name" placeholder="Enter Service name" name="name">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('image')}}</div>

									<label for="image">Service Image</label>
									<input type="file" id="image" name="image">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('altimage')}}</div>

									<label for="altimage">Service Alt Image</label>

									<input type="text" class="form-control"  name="altimage" value="{{old('altimage')}}"id="altimage" placeholder="Enter image text">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('summary')}}</div>

									<label for="name">Service Summary</label>

									<textarea name="summary" class="form-control" id="summary">{{old('summary')}}</textarea>
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('active')}}</div>


									<label for="active">Service Status</label>	
									<select name="active" id="active" class="form-control">
										<option value="	">Select Service status</option>
										<option value="1"{{old('active')=='1'? 'selected' : ''}}>Available</option>
										<option value="0"{{old('active')=='0'? 'selected' : ''}}>Unavialble</option>

									</select>
								</div>	

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
						<div class="box-footer">
							<a href="{{ URL()->previous() }}">
									<button type="submit" class="btn btn-danger pull-right">Cancel</button>
							</a>
						</div>
						</div>
					</div>		
				</div>
			</div>
		</section>
	</div>
</div>
@endsection