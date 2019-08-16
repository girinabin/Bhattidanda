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
						<form role="form">
							<div class="box-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Enter Package name">
								</div>
								<div class="form-group">
									<label for="name">Description</label>
									<textarea name="description" class="form-control" id="summernote"></textarea>
								</div>
								{{-- <div class="form-group">
									<label for="name">Price</label>
									<input type="number" class="form-control" id="price" placeholder="Enter Price">
								</div>
								<div class="form-group">
									<label for="name">Discount</label>
									<input type="number" class="form-control" id="discount" placeholder="Enter discount">
								</div> --}}
								<div class="form-group">
									<label for="">Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="services"  value="available" checked>Available<br>
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="services"  value="notavailable" >Not Available<br>
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