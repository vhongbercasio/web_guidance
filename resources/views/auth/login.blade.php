<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/js/min.css')}}" rel="stylesheet">
	{{-- <link href="{{asset('assets/jquery/min.css')}}" rel="stylesheet"> --}}
	
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
	<!-- Vendor CSS Files -->


	<style>
		body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
	</style>
</head>
<body>
	<section class="vh-100" style="background-color: #090460;">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<!-- Image on the left with opacity effect -->
							<div class="col-md-6 col-lg-5 d-none d-md-block position-relative">
								<img src="{{asset('assets/img/gallery/hero-bg-2.png')}}" alt="Hero Image" class="img-fluid" style=" border-radius: 1rem; margin-top: 14px;background-size: contain">
								<!-- Overlay for opacity -->
								<div class="image-overlay"></div>
							</div>
	
							<!-- Form on the right -->
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">
									<!-- Login Form -->
									<form role="form" method="POST" action="{{ url('/auth/login') }}">
										<!-- CSRF Token -->
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
										@if (count($errors) > 0)
											<div class="alert alert-danger">
												<strong>Whoops!</strong> There were some problems with your input.<br><br>
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif
	
										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
											{{-- <img src="{{ asset('assets/img/gallery/asclogo.png') }}" alt="ASC Logo" class="img-fluid logo" style="width: 20%;"> --}}
										</div>
	
										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
	
										<!-- Email input -->
										<div class="form-outline mb-4">
											<input type="email" id="email_field" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autofocus />
											<label class="form-label" for="email_field">Email address</label>
										</div>
	
										<!-- Password input -->
										<div class="form-outline mb-4">
											<input type="password" id="password_field" class="form-control form-control-lg" name="password" required />
											<label class="form-label" for="password_field">Password</label>
										</div>
	
										<!-- Submit button -->
										<div class="pt-1 mb-4">
											<button type="submit" class="btn  btn-lg btn-block" style="background-color: #090460; color: #fff;">Login</button>
										</div>
	
										<!-- Forgot Password and Sign Up Footer -->
										{{-- <a class="small text-muted" href="{{ url('reset_password') }}">Forgot password?</a>
										<p class="mb-5 pb-lg-2" style="color: #;">Don't have an account? <a href="{{ url('auth/register') }}" style="color: #393f81;">Register here</a></p>
										<a href="#!" class="small text-muted">Terms of use.</a>
										<a href="#!" class="small text-muted">Privacy policy</a> --}}
									</form>
									<!-- Login Form -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal Structure -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="studentModalLabel">Student Action Required</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <p>If you are a student, click the button below to navigate to the student Data form. If not, you can close this .</p>
		</div>
		<div class="modal-footer">
		  <!-- Navigation button for students -->
		  <button id="studentBtn" type="button" class="btn btn-primary" onclick="navigateToStudentPage()">Go to Student Page</button>
		  <!-- Close button -->
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
  



	<script src={{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
	<script src={{asset('assets/vendor/php-email-form/validate.js')}}></script>
	<script src={{asset('assets/vendor/aos/aos.js')}}></script>
	<script src={{asset('assets/vendor/glightbox/js/glightbox.min.js')}}></script>
	<script src={{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}></script>
	<script src={{asset('assets/vendor/jquery/min.js')}}></script>
	<script src={{asset('assets/vendor/swiper/swiper-bundle.min.js')}}></script>
	<script src={{asset('assets/js/min.js')}}></script>

<script>
	 setTimeout(() => {
    // Trigger the modal to appear after 1 second
    var studentModal = new bootstrap.Modal(document.getElementById('studentModal'));
    studentModal.show();
  }, 1000);

  // Function to handle student button click for navigation
  function navigateToStudentPage() {
    window.location.href = '{{ url("/studentForm") }}'
  }
</script>


</body>
</html>