<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <title>Welcome To ParkMe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" media="all">
        <meta name="title" content="Park Me">
  		<meta name="description" content="">
  		<meta name="keywords" content="">
  		<meta name="author" content="ParkMe">

        <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/assets/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    </head>
    <body onload="init()" class="bg-img">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-sm custom-navbar">
			<div class="container">
			    <a class="navbar-brand" href="index.html">
					<img src="public/assets/images/logo.svg" style="width: 15%;" class="img-fluid" alt="img" />
				</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    	<span class="fa fa-bars"></span>
			    </button>
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
					    <li><a href="#">Accueil</a></li>
						<li><a href="#">Réserver</a></li>
						<li><a href="#">Abonnement</a></li>
						<li><a href="#">Localisation</a></li>
					</ul>
				</div>  
			</div>
		</nav>

		<main>

		    <!-- Section 1 Starts -->
		    <section>
		    	<div class="container">
		        	<div class="section1">
			            <div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="section1-header">
			                        <h3>reserver votre place de parking</h3>
			                        <p>a I'aeroport Toulouse Blagnac</p>
			                    </div>
			                </div>
			            </div>

			            <div class="row">

                    		<div class="col-sm-3 col-12">
								<div class="section1-form">
									<div class="form-group">
			                        	<label>arrivee</label>
										<div class="date">
										    <input class="form-control form-control-lg" type="text" placeholder="Select Date" />
										    <span class="input-group-addon">
										    	<i class="fa fa-calendar-alt"></i>
										    </span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-3 col-12">
								<div class="section1-form">
									<div class="form-group">
									  <label class="invisible" for="arriveeTime">arrivee</label>
									  <select class="form-control form-control-lg" id="arriveeTime">
									    <option>5:00</option>
									    <option>5:15</option>
									    <option>5:30</option>
									    <option>5:45</option>
									  </select>
									</div>
								</div>
							</div>

							<div class="col-sm-3 col-12">
								<div class="section1-form">
									<div class="form-group">
			                        	<label>depart</label>
										<div class="date">
										    <input class="form-control form-control-lg" type="text" placeholder="Select Date" />
										    <span class="input-group-addon">
										    	<i class="fa fa-calendar-alt"></i>
										    </span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-3 col-12">
								<div class="section1-form">
									<div class="form-group">
									  <label class="invisible" for="departTime">depart</label>
									  <select class="form-control custom-select-lg" id="departTime">
									    <option>5:00</option>
									    <option>5:15</option>
									    <option>5:30</option>
									    <option>5:45</option>
									  </select>
									</div>
									<div class="form-group text-right mt-4">
										<a href="/" class="custom-btn">Je reserve ></a>
									</div>
								</div>
							</div>

			            </div>
		        	</div>
		        </div>
		    </section>
		    <!-- Section 1 Ends -->

		</main>

	    <!-- JavaSrcipts -->

	    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/assets/js/custom.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    </body>
</html>
