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
						<form role="form">
							<div class="box-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Enter Service name">
								</div>
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" id="image">
								</div>
								<div class="form-group">
									<label for="altimage">Alt.Image</label>
									<input type="text" class="form-control" id="altimage" placeholder="Enter image text">
								</div>
								<div class="form-group">
									<label for="name">Summary</label>
									<textarea name="summary" class="form-control" id=""></textarea>
								</div>
								<div class="form-group">
									<label for="">Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="services"  value="Yes" checked>Available<br>
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="services"  value="NO" >Not Available<br>
										</label>
									</div>
								</div>
								
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="submit" class="btn btn-danger pull-right">Cancel</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection