@extends('frontend.home-master')

@section('content')

<div class="container-fluid abt-pad">
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
	<div class="col-md-4 text-center">
		<h1 class="capitalize">Book Now</h1> 
	</div>
	<div class="col-md-4 span-brdr">
		<span></span>
	</div>
</div>

<div class="container book-page-margin">
	<div class="col-md-offset-3 col-md-6">
		<div id="booking">
			<div class="panel panel-default book-form">
				<div class="panel-body text-center">
					<div>
						<h3>Booking Form</h3>
					</div>

					<form class="text-center form-book" action="{{ route('packages.book') }}" method="POST">
						@csrf
						<div class="book-form">
							<input type="text" class="form-control" id="user-name" name="name" placeholder="Name" required>
						</div>

						<div class="book-form">
							<input type="email" class="form-control" id="user-email" name="email" placeholder="Email" required >
						</div>

						<div class="book-form">
							<input type="text" class="form-control" id="user-gender" name="gender" placeholder="Gender" required>
						</div>

						<div class="book-form">
							<input type="text" class="form-control" name="age" placeholder="Age" required>
						</div>

						<div class="book-form">
							<input type="text" class="form-control" name="location" placeholder="Location" required >
						</div>

						<div class="book-form">
							<input type="number" class="form-control" name="contact" placeholder="Contact" required >
						</div>

						<div class="book-form">
							<textarea name="message" class="form-control" id="user-message" placeholder="Message" cols="20" rows="7" required></textarea>
						</div>
						<input type="hidden" value="{{$packages['slug']}}" name="slug">

						<div class="book-form">
							<button type="submit" class="btn btn-warning btn-slider" ><i class="glyphicon glyphicon-log-in"></i> Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection