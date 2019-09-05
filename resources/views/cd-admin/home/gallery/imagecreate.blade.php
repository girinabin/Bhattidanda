@extends('cd-admin.home-master')
@section('page-title')
Gallery Form
@endsection
@section('content')
<div class="content-wrapper">
	<div class="container-fluid">
		<section class="content-header">
			<h1>
			Images
			</h1>
			<ol class="breadcrumb">
				<li><i class="fa fa-dashboard"></i> Dashboard/Add New Image</li>
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
							<a href="{{ route('images.create') }}"><button class="btn btn-primary pull-right">Add Albums</button></a>
							<h3 class="box-title">Add Images</h3>
							

						</div>

						<form role="form" action="{{ route('imagealbums.store1') }}" method="POST" enctype="multipart/form-data">
							@csrf

							<div class="box-body">

								<div class="form-group">
									<label for="albumselect">Album Name</label>
									<select name="albumselect" id="" class="form-control">
									<option value="{{$album['id']}}" name="albumselect">{{$album['name']}}</option>
									</select>
									
									{{-- <strong>Album Name:</strong>
									 {{$album['name']}}	
									<input type="hidden" name="albumselect" value="{{$album['id']}}" readonly=""> --}}	
									{{-- <select name="albumselect" id="albumselect" class="form-control">
										<option value="	">Select Album</option>
										@foreach($album as $albums)
										<option value="{{$albums->id}}"{{($albums->id == $id ? 'selected':(old('albumselect')==$albums->id?'selected':''))}}>{{$albums->name}}</option>
										@endforeach

									</select> --}}	
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('image')}}</div>

									<label for="image">Image</label>
									<input type="file" name="image" value="{{old('image')}}" id="image">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('altimage')}}</div>

										<label for="altimage">Alt Image</label>
										<input type="text" class="form-control" name="altimage" value="{{old('altimage')}}" id="altimage" placeholder="Enter altimage name">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('active')}}</div>

									<label for="active">Image Status</label>
									<div class="radio">
										<label>
											<input type="radio" name="active"  value="1"{{old('active')=='1'?'checked':''}}>Available<br>
					
											<input type="radio" name="active"  value="0"{{old('active')=='0'?'checked':''}} >UnAvailable<br>
										</label>
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Add Image</button>
								</div>
							</div>	
						</form>
						<div class="box-footer">
									<a href="{{ URL()->previous() }}"><button class="btn btn-danger pull-right">Cancel</button></a>
						</div>
							
					</div>
					</div>
				</section>
			</div>
		</div>
		@endsection