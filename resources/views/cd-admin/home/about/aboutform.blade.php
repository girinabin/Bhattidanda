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
										<label for="name">Name</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label for="name">Tagline</label>
										<input type="text" class="form-control" name="tagline" id="name" placeholder="Enter Tagline for name">
									</div>
									
									<div class="form-group">
										<label for="name">Image</label>
										<input type="file" class="form-control" name="image" id="image">
									</div>
									<div class="form-group">
										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" name="altimage" id="altimage" placeholder="Enter image name">
									</div>
									<div class="form-group">
										<label for="description">Description</label>
										<textarea name="description" class="form-control" id="summernote"></textarea>
									</div>
									
									<div class="form-group">
										<label for="pdf">Pdf</label>
										<input type="file" class="form-control" name="pdf" id="pdf">
									</div>
									<div class="form-group">
										<label for="video">Video link</label>
										<input type="text" class="form-control" name="video" id="video">
									</div>

								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add</button>

								</div>
							</form>
						</div>
					</div>
				</div>

			</section>
	</div>			
</div>
@endsection