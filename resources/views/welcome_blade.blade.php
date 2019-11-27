@extends('layouts.home.app', ['activePage' => 'welcome', 'titlePage' => __('Welcome')])

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('material') }}/img/profile_city.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="title">Building Brave</h1>
				<h4>We created a digital platform for women to connect with mentors and grow both professionally and personally.</h4>
				<br>
				<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg"> <i class="fa fa-play"></i> Watch video</a>
			</div>
		</div>
	</div>
</div>
<div class="main main-raised">
	<div class="container">
		<div class="section text-center" id="about">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="title">Custom Software Development</h2>
					<h5 class="description">Map a strategy, build a solution or elevate your product experience with focused engagements available as standalone offerings or as a part of your project’s service stack.</h5>
				</div>
			</div>
			<div class="features">
				<div class="row">
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-info"> <i class="material-icons">cloud</i>
							</div>
							<h4 class="info-title">Cloud Services</h4>
							<p>AWS- and Microsoft-certified architects bring over eight years experience working with cloud infrastructure services, cloud design patterns and strategies to maximize benefits of solutions hosted and built for the cloud. As an AWS Advanced Consulting Partner and a member of the Amazon Partner network, technologists possess deep knowledge and extensive experience with cloud services</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success"> <i class="material-icons">web</i>
							</div>
							<h4 class="info-title">Web Development</h4>
							<p>Custom web development offers options for businesses who seek to provide a flexible, consistent experience for users across platforms. Leveraging new approaches to web development including progressive web apps, we bring front-end, back-end and architecture ability together to deliver on your business need and maximize delivery speed.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-danger"> <i class="material-icons">smartphone</i>
							</div>
							<h4 class="info-title">Mobile Development</h4>
							<p>Leaders in every way, our team adopts early and learns fast. With experience in the range of development from pure native to cross platform apps, we can help you select the best choice for your project requirements. Our technologists provide recommendations to elevate your development strategy, reduce procedural churn and strengthen your solution or technology ecosystem.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section text-center" id="team">
			<h2 class="title">Here is our team</h2>
			<div class="team">
				<div class="row">
					@foreach ($developers as $developer)
						<div class="col-md-4">
							<div class="team-player">
								<div class="card card-plain">
									<div class="col-md-6 ml-auto mr-auto">
										<img src="{{ asset('material') }}/img/faces/{{ $developer->avatar }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
									</div>
									<h4 class="card-title">{{ $developer->name }}
										<br>
										<small class="card-description text-muted">{{ $developer->role }}</small>
									</h4>
									<div class="card-body">
										<p class="card-description">{!! $developer->description !!}</p>
									</div>
									<div class="card-footer justify-content-center"> 
										@if ($developer->twitter_url)
										<a href="{{ $developer->twitter_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
										@endif
										@if ($developer->facebook_url)
										<a href="{{ $developer->facebook_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
										@endif
										@if ($developer->linkedin_url)
										<a href="{{ $developer->linkedin_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
										@endif
										@if ($developer->github_url)
										<a href="{{ $developer->github_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-github"></i></a>
										@endif
										@if ($developer->youtube_url)
										<a href="{{ $developer->youtube_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-youtube"></i></a>
										@endif
										@if ($developer->instagram_url)
										<a href="{{ $developer->instagram_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
										@endif
										@if ($developer->twitter_url)
										<a href="{{ $developer->twitter_url }}" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
										@endif
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
		<div class="section section-contacts" id="contact">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="text-center title">Work with us</h2>
					<h4 class="text-center description">Write a few lines about your project or hiring. We will responde get back to you in a couple of hours.</h4>
					<form class="contact-form" action="" method="POST">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Your Name</label>
									<input type="text" class="form-control" name="name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Your Email</label>
									<input type="email" class="form-control" name="email" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="contactMessage" class="bmd-label-floating">Your Message</label>
							<textarea type="text" class="form-control" name="message" rows="4" id="contactMessage" required></textarea>
						</div>
						<div class="row">
							<div class="col-md-4 ml-auto mr-auto text-center">
								<button class="btn btn-primary btn-raised">Send Message</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection 