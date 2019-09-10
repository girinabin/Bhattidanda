@extends('cd-admin.home-master')
@section('page-title')
Admin Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Admin
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
							<h3 class="box-title">Add Admin</h3>
						</div>
						<form role="form" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('name')}}</div>
									<label for="name">UserName</label>
									<input type="text" class="form-control" name="name" value="{{old('name')}}" id="name" placeholder="Enter User name">
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('email')}}</div>

									<label for="altimage">Email</label>
									<input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email address">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('password')}}</div>

									<label for="name">Password</label>
									<input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" placeholder="Enter password">
									
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('password_confirmation')}}</div>

									<label for="name">Confirm Password</label>
									<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirm password">
									
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('active')}}</div>

									<label for="active">Admin Role</label>
									<div class="radio">
										<label>
											<input type="radio" name="role"  value="1"{{old('role')=='1'?'checked':''}}>SuperAdmin<br>
					
											<input type="radio" name="role"  value="0"{{old('role')=='0'?'checked':''}} >Admin<br>
										</label>
									</div>
								</div>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
								
								
							</div>
							<div class="box-footer bn">
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