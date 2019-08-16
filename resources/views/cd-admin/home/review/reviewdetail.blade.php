@extends('cd-admin.home-master')
@section('page-title')
Review Details
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
				<li><i class="fa fa-dashboard"></i> Dashboard/Review/Show Review/View</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<!-- Profile Image -->
					<div class="box box-primary">
						<div class="box-body box-profile">
							
							<h3 class="profile-username text-center">Nabin giri</h3>
							<p class="text-muted text-center">Maitedevi</p>
							{{-- <strong>Reviewd on july 7	</strong> --}}
							<p>		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa sed tempore quod officia, inventore tenetur praesentium aliquid beatae doloremque provident aspernatur quo perferendis velit veniam omnis unde possimus est repudiandae.</p>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection