@extends('cd-admin.home-master')
@section('page-title')
Booking Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Booking
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
							<h3 class="box-title"></h3>
						</div>
						<form role="form" action="{{ route('packages.book') }}" method="POST" >
							@csrf
							<div class="box-body">
								<div class="form-group">
									
									<label for="name"> Name</label>
									<input type="text" class="form-control" value="{{old('name')}}" name="name"  id="name" placeholder="">
								</div>
								<div class="form-group">
									
									<label for="name"> Email</label>
									<input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" >
								</div>
								<div class="form-group">
									
									<label for="name"> Gender</label>
									<input type="text" class="form-control" name="gender" value="{{old('gender')}}" id="gender" placeholder="">
								</div>
								<div class="form-group">
									
									<label for="name"> Age</label>
									<input type="text" class="form-control" name="age" value="{{old('age')}}"  id="age" >
								</div>
								<div class="form-group">
									
									<label for="name"> Location</label>
									<input type="text" class="form-control" name="location" value="{{old('location')}}" id="location" >
								</div>
								<div class="form-group">
									
									<label for="name"> Contact</label>
									<input type="integer" class="form-control" name="contact" value="{{old('contact')}}"  id="contact" >
								</div>
								<div class="form-group">
									
									<label for="name"> Message</label>
									<input type="text" class="form-control" name="message" value="{{old('message')}}"  id="message" >
								
								
								</div>
								<div class="form-group">
									
									<input type="hidden" class="form-control" name="slug" value="{{$packages['slug']}}" >
								
								
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