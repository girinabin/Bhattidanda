@extends('cd-admin.home-master')
@section('page-title')	
Introduction Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
	
	<section class="content-header">
		<h1>
			Introdcution Details
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i>Dashboard/Introdcution/View Introduction</li>
		</ol>
	</section>

	<!-- Main content -->
		<section class="content">
			<div class="row">
			<div class="col-md-12">
			<div class="box box-primary">
				
            
				<div class="col-md-3"></div>
				<div class="col-md-6  ">
				
				<p style="margin-top: 50px;">{!!$intro->description!!}</p>
				
					
				
				</div>
				
				<div class="col-md-3"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-1">
							 <a href="" data-toggle="modal" data-target="#myModal{{$intro->id}}">
					
			    			<button class="btn btn-primary bsize" style="margin-bottom: 5px;" >Edit</button>
			    			</a>
						</div>
						
						
						
					</div>
				</div>
				
			
			</div>

				
			</div>
		</div>
	

	</section>
	
	</div>
</div>
	
<div id="myModal{{$intro->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Introduction</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">  
             <form role="form" method="post" action="{{ route('intro.update') }}" >
              @csrf
                <div class="box-body">
									
									
					<div class="form-group">
					<div class="text text-danger">{{$errors->first('description')}}</div>

					<label for="description">Add Description</label>
					<textarea style="height:100px Important!;" name="description" class="form-control summernote ">{{$intro->description}}</textarea>
					</div>
									
									
									

								</div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>

                </div>
              </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div	

@endsection