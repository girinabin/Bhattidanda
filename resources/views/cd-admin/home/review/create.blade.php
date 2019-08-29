@extends('cd-admin.home-master')
@section('page-title')
Review Form
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			Review
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Review/Add Review</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Add Review</h3>
						</div>
						<form role="form" action="{{ route('reviews.store') }}" method="POST">
							@csrf
							<div class="box-body">
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('name')}}</div>
									<label for="name">Name</label>
									<input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('address')}}</div>

									<label for="name">Address</label>
									<input type="text" class="form-control" value="{{old('address')}}" name="address" id="name" placeholder="Enter Address">
								</div>
							
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('summary')}}</div>

									<label for="name">Summary</label>
									<textarea name="summary" class="form-control" id="">{{old('summary')}}</textarea>
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('active')}}</div>

									<label for="active">Status</label>
									<div class="radio">
										<label>
											
											<input type="radio" name="active"  value="1"{{old('active')=='1' ? 'checked':''}} >Active<br>
											<input type="radio" name="active"  value="0"{{old('active')=='0' ? 'checked': ''}} >Inactive<br>

										</label>
									</div>
									
								</div>
								
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
					
							</div>
						</form>
						<div class="box-footer">
									<a href="{{ URL()->previous() }}"><button class="btn btn-danger pull-right">Cancel</button></a>
						</div>
						
					</div>
				</div>
				
			</div>
		</section>
	</div>
</div>
@endsection