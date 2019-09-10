@extends('cd-admin.home-master')
@section('page-title')
Introduction Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
	<section class="content-header">
		<h1>
			Introduction
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i> Dashboard/Introduction/Add Introduction</li>
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
								<h3 class="box-title">Add Introduction</h3>
							</div>
							<form role="form" method="post" action="{{ route('intro.store') }}" >
								@csrf
								<div class="box-body">
									
									
									<div class="form-group">
										<div class="text text-danger">{{$errors->first('description')}}</div>

										<label for="description">Add Description</label>
										<textarea name="description" class="form-control summernote "  value="{{old('descripiton')}}"></textarea>
									</div>
									
									
									

								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add Introduction</button>

								</div>
							</form>
							<div class="box-footer bn">
									<a href="{{ URL()->previous() }}"><button class="btn btn-danger pull-right">Cancel</button></a>
							</div>
						</div>
					</div>
				</div>

			</section>
	</div>			
</div>
@endsection