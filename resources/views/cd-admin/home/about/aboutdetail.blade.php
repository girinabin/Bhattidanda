@extends('cd-admin.home-master')
@section('page-title')	
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container-fluid">
	
	<section class="content-header">
		<h1>
			About
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i>Dashboard/About/View About/View</li>
		</ol>
	</section>

	<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center textedit">
				<img src="{{asset('public/cd-admin/creatu/dist/img/profile.jpg')}}" alt="" class="rounded-circle" height="25%" width="50%">
				<h2>Phool Maya</h2>
				<h3>Socail Enterprenur</h3>
				</div>
				
				
				<div class="col-md-3"></div>
					
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel labore similique, cumque enim quae, saepe officia inventore molestiae illum sed hic, voluptatum impedit rerum aperiam accusantium aspernatur! Asperiores sapiente, officiis.</p>
				</div>
				
			</div>

	</section>
	
	</div>
</div>
@endsection