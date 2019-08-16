@extends('cd-admin.home-master')
@section('page-title')
About Seo Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			About
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Seo/About</li>
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
							<h3 class="box-title">Add Seo for About Page</h3>
						</div>
						<form role="form" method="post" action="{{ route('aboutstore') }}">
							@csrf
								
							<div class="box-body">
								<div class="form-group">
									<label for="seotitle">Seo Title</label>
									<input type="text" class="form-control" id="seotitle" placeholder="Enter Seo title">
								</div>
								<div class="form-group">
									<label for="seokeyword">Seo Keyword</label>
									<input type="text" class="form-control" id="seokeyword" placeholder="Enter Seo keyword">
								</div>
								<div class="form-group">
									<label for="name">Seo Description</label>
									<textarea name="seodescription" class="form-control" id="summernote"></textarea>
								</div>
								{{-- <div class="form-group">
									<label for="name">Price</label>
									<input type="number" class="form-control" id="price" placeholder="Enter Price">
								</div>
								<div class="form-group">
									<label for="name">Discount</label>
									<input type="number" class="form-control" id="discount" placeholder="Enter discount">
								</div> --}}
								
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Add</button>
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