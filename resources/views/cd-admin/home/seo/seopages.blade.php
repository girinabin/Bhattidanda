@extends('cd-admin.home-master')
@section('page-title')
Seo Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Seo Page
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Seo/Add</li>
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
							<h3 class="box-title">Add Seo for differnet Page</h3>
						</div>
						<form role="form" method="post" action="{{ route('seo.store') }}">
							@csrf
								
							<div class="box-body">
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('page')}}</div>


									<label for="page">Seo Pages</label>	
									<select name="page" id="page" class="form-control">
										<option value="	">Select Seo Page</option>
										<option value="home"{{old('page')=='home'? 'selected' : ''}}>Home page</option>
										<option value="about"{{old('page')=='about'? 'selected' : ''}}>About page</option>
										<option value="package"{{old('page')=='package'? 'selected' : ''}}>Package page</option>
										<option value="service"{{old('page')=='service'? 'selected' : ''}}>Service Page</option>
										<option value="gallery"{{old('page')=='gallery'? 'selected' : ''}}>Gallery Page</option>
										<option value="booking"{{old('page')=='booking'? 'selected' : ''}}>Booking Page</option>
										<option value="review"{{old('page')=='review'? 'selected' : ''}}>Review Page</option>
										<option value="contact"{{old('page')=='contact'? 'selected' : ''}}>Contact Page</option>
										

									</select>
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('seotitle')}}</div>
									<label for="seotitle">Seo Title</label>
									<input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" placeholder="Enter Seo title : not more than 60 character">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('seokeyword')}}</div>
									<label for="seokeyword">Seo Keyword</label>
									<input type="text" class="form-control" name="seokeyword" id="seokeyword" value="{{old('seokeyword')}}" placeholder="Enter Seo keyword : not more than 60 character">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('seodescription')}}</div>
									<label for="name">Seo Description</label>
									<textarea name="seodescription" class="form-control summernote" placeholder="Enter Seo description : between 50-160 character"></textarea>
								</div>
								
								
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Add Seo</button>
								
							</div>
						</form>
						<div class="box-footer bn">
							<a href="{{URL()->previous()}}"><button type="button" class="btn btn-danger pull-right">Cancel</button></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection