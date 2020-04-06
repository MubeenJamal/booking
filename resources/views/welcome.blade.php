<!DOCTYPE html>
<html lang="en">
    <!--DESIGN AND DEVELOPED BY --> <input type="hidden" value="">
    <a href="WWW.VISECH.COM"></a>
    <head>
        <title>Welcome To ParkMe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('public/assets/images/favicon.ico')}}" type="image/x-icon" media="all">
        <meta name="title" content="Park Me">
  		<meta name="description" content="">
  		<meta name="keywords" content="">
  		<meta name="author" content="ParkMe">
  		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('public/assets/fonts/fontawesome/css/all.css') }}">
	    <link href="{{ asset('public/assets/fonts/fontawesome/css/css.css') }}" rel="stylesheet">
	    <link rel="stylesheet" href="{{ asset('public/assets/css/normalize.css') }}">
	    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
	    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/css/aos.css') }}">
        
        <!-- JavaSrcipts -->
        <!--<script src="{{ asset('public/assets/js/jquery.min.js')}}"></script>-->
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
     <script>
    // $(window).load(function() { // makes sure the whole site is loaded
    // 	$("#status").fadeOut(); // will first fade out the loading animation
    // 	$("#preloader").delay(1000).fadeOut("slow"); // will fade out the white DIV that covers the website.
    // })
    </script>
    </head>
    
    <!--<div id="preloader">-->
    <!--  <div id="status">&nbsp;</div>-->
    <!--</div>-->
    
    <body class="bg-img">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-sm custom-navbar">
			<div class="container">
			    <a class="navbar-brand" href="{{url('/')}}">
					<img src="{{ asset('public/assets/images/logo.svg')}}" style="width: 15%;" class="img-fluid" alt="img" />
				</a>
				<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="close">&times;</span>
                   <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>
			    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">-->
			    <!--	<span class="fa fa-bars"></span>-->
			    <!--	<span class="my-1 mx-2 close">X</span>-->
			    <!--</button>-->
				<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
					<ul class="navbar-nav">
					    <li id="home-btn"><a href="javascript:void(0)">Accueil</a></li>
						<li id="reserver_btn"><a href="javascript:void(0)"><span >Réserver</span></a></li>
						<li id="faqs-btn"><a href="javascript:void(0)" >Vos Questions</a></li>
						<!--<li><a href="#">Abonnement</a></li>-->
						<!--<li><a href="#">Localisation</a></li>-->
					</ul>
				</div>  
			</div>
		</nav>
		
		<div class="row">
            <div class="col-sm-12 col-12">
                <div class="section1-header">
                    @if(session()->has('message'))
			    		<div class="alert alert-success" style="background-color:'#fcc916'">
			        {{ session()->get('message') }}
			    		</div>
					@endif
					@if(session()->has('failed_message'))
			    		<div class="alert alert-danger" style="background-color:'#fcc916'">
			        {{ session()->get('failed_message') }}
			    		</div>
					@endif
                </div>
            </div>
        </div>

		<main>
			<form method="post" class="needs-validation" action="{{route('paypal_payment')}}" novalidate>
			{{csrf_field()}}
			<input type="hidden" id="total_amt" name="total" value="0" />
		    <!-- Index.html page -->
		    <section id="index">
	        	<div class="section1">
	        	    <div class="container" data-aos="fade-up" data-aos-duration="1000">
			            <div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="section1-header">
			                        <h3>RÉSERVER VOTRE PLACE DE PARKING</h3>
			                        <p>à l'aéroport Toulouse Blagnac</p>
			                    </div>
			                </div>
			            </div>

			            <div class="row">

                    		<div class="col-sm-3 col-6">
								<div class="section1-form">
									<div class="form-group">
			                        	<label><b>ARRIVÉE</b></label>
										<div class="date">
										    <input class="form-control form-control-lg" type="text" placeholder="Sélectionner Date" name="start_date" id="arrivalDate" readonly />
										    <span class="input-group-addon">
										    	<i class="fa fa-calendar-alt"></i>
										    </span>
										</div>
										<label id="arrivalError">Arrival Date Not Selected</label>
									</div>
								</div>
							</div>

							<div class="col-sm-3 col-6">
								<div class="section1-form">
									<div class="form-group">
									  <label class="invisible" for="arriveeTime">ARRIVÉE</label>
									  <select class="form-control form-control-lg" id="arriveeTime" name="start_time">
									    <option value="" disabled selected hidden>Heure</option>
									    <option>5 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>5 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>6 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>6 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>7 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>7 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>8 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>8 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>9 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>9 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>10 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>10 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>11 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>11 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>12 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>12 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>13 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>13 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>14 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>14 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>15 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>15 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>16 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>16 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>17 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>17 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>18 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>18 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>19 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>19 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>20 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>20 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>21 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>21 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>22 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>22 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>23 &nbsp&nbsp&nbsp&nbsp 00 </option>
									  </select>
									</div>
								</div>
							</div>

							<div class="col-sm-3 col-6">
								<div class="section1-form">
									<div class="form-group">
			                        	<label><b>DÉPART</b></label>
										<div class="date">
										    <input class="form-control form-control-lg" type="text" placeholder="Sélectionner Date"  name="end_date" id="departureDate" readonly />
										    <span class="input-group-addon">
										    	<i class="fa fa-calendar-alt"></i>
										    </span>
										</div>
										<label id="departError">Departure Date Not Selected</label>
									</div>
								</div>
							</div>

							<div class="col-sm-3 col-6">
								<div class="section1-form">
									<div class="form-group">
									  <label class="invisible" for="departTime">DÉPART</label>
									  <select class="form-control custom-select-lg" id="departTime" name="end_time">
									    <option value="" disabled selected hidden>Heure</option>
									    <option>5 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>5 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>6 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>6 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>7 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>7 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>8 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>8 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>9 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>9 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>10 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>10 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>11 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>11 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>12 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>12 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>13 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>13 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>14 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>14 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>15 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>15 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>16 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>16 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>17 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>17 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>18 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>18 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>19 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>19 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>20 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>20 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>21 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>21 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>22 &nbsp&nbsp&nbsp&nbsp 00 </option>
									    <option>22 &nbsp&nbsp&nbsp&nbsp 30 </option>
									    <option>23 &nbsp&nbsp&nbsp&nbsp 00 </option>
									  </select>
									</div>
									
								</div>
							</div>

			            </div>
			            <div class="form-group text-right mt-2">
							<a href="javascript:void(0);" class="index-btn" id="index-btn"><b>Je reserve ></b></a>
						</div>
		            </div>
	        	</div>
		        
		        <div class="section2">
		        	<div class="container-fluid">
		        		<div class="row">
		        			<div class="col-sm-12 col-12">
		        				<div class="section2-main">
		        					<h1>PARK ME <span>EN 5 ÉTAPES</span></h1>

		        					<div class="section2-master d-none d-sm-block"  data-aos="fade-up" data-aos-duration="1000">
		        						<div class="section2-box1">
			        						<div class="section2-box1-img" data-aos="flip-left" data-aos-duration="1000">
				        						<img src="{{ asset('public/assets/images/section2-img1.png') }}" class="img-fluid" alt="img" />
				        					</div>
			        						<div class="section2-box1-img" data-aos="flip-left" data-aos-duration="1000">
			        							<img src="{{ asset('public/assets/images/section2-img2.png') }}" class="img-fluid" alt="img" />
			        						</div>
			        						<div class="section2-box1-img" data-aos="flip-left" data-aos-duration="1000">
			        							<img src="{{ asset('public/assets/images/section2-img3.png') }}" class="img-fluid" alt="img" />
			        						</div>
			        						<div class="section2-box1-img" data-aos="flip-left" data-aos-duration="1000">
			        							<img src="{{ asset('public/assets/images/section2-img4.png') }}" class="img-fluid" alt="img" />
			        						</div>
			        						<div class="section2-box1-img" data-aos="flip-left" data-aos-duration="1000">
			        							<img src="{{ asset('public/assets/images/section2-img5.png') }}" class="img-fluid" alt="img" />
			        						</div>
			        					</div>
			        					<div class="section2-box">
			        						<div class="line line1">
				        						<p>1</p>
				        					</div>
			        						<div class="line line2">
			        							<p>2</p>
			        						</div>
			        						<div class="line line3">
			        							<p>3</p>
			        						</div>
			        						<div class="line line4">
			        							<p>4</p>
			        						</div>
			        						<div class="line line5">
			        							<p>5</p>
			        						</div>
			        					</div>
			        					<div class="section2-box2">
			        						<div class="section2-box2-text">
				        						<p>RÉSERVE EN LIGNE</p>
				        					</div>
			        						<div class="section2-box2-text">
			        							<p>GARER VOTRE VOITURE</p>
			        						</div>
			        						<div class="section2-box2-text">
			        							<p>TRANSPORTÉ VERS <br>AEROPORT</p>
			        							<small>NAVETTE PARKME</small>
			        						</div>
			        						<div class="section2-box2-text">
			        							<p>PENDANT MON VOYAGE</p>
			        							<small>LAVAGE | ESSENCE</small>
			        						</div>
			        						<div class="section2-box2-text">
			        							<p>RETOUR J'APPELLE <br>NAVETTE</p>
			        						</div>
			        					</div>
			        					
		        					</div>
		        					
		        					<div class="section2-master d-block d-sm-none mobile"  data-aos="fade-up" data-aos-duration="1000">
		        						<div class="section2-box1">
		        						    
			        						<div class="section2-box1-img">
			        						    <div class="line">
				        						    <p>1</p>
				        					    </div>
				        						<img src="{{ asset('public/assets/images/section2-img1.png') }}" class="img-fluid" alt="img" />
				        						<div class="section2-box2-text">
    				        						<p>RÉSERVE EN LIGNE</p>
    				        					</div>
				        					</div>
			        						<div class="section2-box1-img">
			        						    <div class="line">
				        						    <p>2</p>
				        					    </div>
			        							<img src="{{ asset('public/assets/images/section2-img2.png') }}" class="img-fluid" alt="img" />
			        							<div class="section2-box2-text">
    			        							<p>GARER VOTRE VOITURE</p>
    			        						</div>
			        						</div>
			        						<div class="section2-box1-img">
			        						    <div class="line">
				        						    <p>3</p>
				        					    </div>
			        							<img src="{{ asset('public/assets/images/section2-img3.png') }}" class="img-fluid" alt="img" />
			        							<div class="section2-box2-text">
    			        							<p>TRANSPORTÉ VERS AEROPORT</p>
    			        							<small>NAVETTE PARKME</small>
    			        						</div>
			        						</div>
			        						<div class="section2-box1-img">
			        						    <div class="line">
				        						    <p>4</p>
				        					    </div>
			        							<img src="{{ asset('public/assets/images/section2-img4.png') }}" class="img-fluid" alt="img" />
			        							<div class="section2-box2-text">
    			        							<p>PENDANT MON VOYAGE</p>
    			        							<small>LAVAGE | ESSENCE</small>
    			        						</div>
			        						</div>
			        						<div class="section2-box1-img">
			        						    <div class="line">
				        						    <p>5</p>
				        					    </div>
			        							<img src="{{ asset('public/assets/images/section2-img5.png') }}" class="img-fluid" alt="img" />
			        							<div class="section2-box2-text">
    			        							<p>RETOUR J'APPELLE NAVETTE</p>
    			        						</div>
			        						</div>
			        					</div>
			        					
		        					</div>
		        				</div>
		        			</div>
		        		</div>
	        		</div>
		        </div>

		        
		        <div class="section3 d-none d-sm-block">
		        	<div class="container">
		        		<div class="row">
		        		    <div class="col-sm-6 col-12">
		        		        <div class="section3-left" data-aos="fade-right" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section3-img.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        				
		        			</div>
		        			<div class="col-sm-6 col-12">
		        				<div class="section3-right" data-aos="fade-left" data-aos-duration="1000">
		        					<h3>NAVETTE GRATUITE</h3>
		        					<p>Départ et arrivée en 2 minutes.</p>
		        				</div>
		        				<a href="#" class="section3-btn">Je réserve&nbsp;<i class="fa fa-angle-right"></i> </a>
		        			</div>
		        			
		        		</div>
	        		</div>
		        </div>
		        
		        <div class="section3 d-block d-sm-none">
		        	<div class="container">
		        		<div class="row">
		        		    <div class="col-12">
		        				<div class="section3-right" data-aos="fade-left" data-aos-duration="1000">
		        					<h3>NAVETTE GRATUITE</h3>
		        					<p>Départ et arrivée en 2 minutes.</p>
		        				</div>
		        			</div>
		        		    <div class="col-12">
		        		        <div class="section3-left" data-aos="fade-right" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section3-img.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        				<a href="#" class="section3-btn">Je réserve&nbsp;<i class="fa fa-angle-right"></i></a>
		        			</div>
		        		</div>
	        		</div>
		        </div>

		        <div class="section4">
	        		<div class="row">
	        			<div class="col-sm-12 col-12">
	        				<div class="section4-main" data-aos="fade-up" data-aos-duration="1000">
	        					<h1 class="section4-centeredHeading">NOS SERVICES</h1>
		        				<div class="section4-box section4-img1"  data-aos="fade-up" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section4-img1.png') }}" class="image" alt="img" />
		        					  <div class="overlay">
									    <div class="text">LAVAGE</div>
									  </div>
		        				</div>
		        				<div class="section4-box section4-img2"  data-aos="fade-up" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section4-img2.png') }}" class="image" alt="img" />
		        					  <div class="overlay">
									    <div class="text">ESSENCE</div>
									  </div>
		        				</div>
		        				<div class="section4-box section4-img3"  data-aos="fade-up" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section4-img3.png') }}" class="image" alt="img" />
		        					<div class="overlay">
									    <div class="text">RÉVISION</div>
									</div>
		        				</div>
		        				<div class="section4-box section4-img4"  data-aos="fade-up" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section4-img4.png') }}" class="image" alt="img" />
		        					  <div class="overlay">
									    <div class="text">NAVETTE</div>
									  </div>
		        				</div>
	        				</div>
	        			</div>
	        		</div>
		        </div>

		        <div class="section5">
		        	<div class="container">
		        		<div class="row">
		        			<div class="col-sm-12">
		        				<div class="section5-heading" data-aos="fade-up" data-aos-duration="1000">
		        					<h3>NOS PARTENAIRES</h3>
		        				</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-sm-12 col-12">
		        				<div class="owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="1000">
		        				    <div class="item">
								    	<img src="{{ asset('public/assets/images/blag.png') }}" class="img-fluid" alt="img" />
								    </div>
								    <div class="item">
								    	<img src="{{ asset('public/assets/images/allianz-300x300.png') }}" class="img-fluid" alt="img" />
								    </div>
								    <div class="item">
								    	<img src="{{ asset('public/assets/images/blag.png') }}" class="img-fluid" alt="img" />
								    </div>
								    <div class="item">
								    	<img src="{{ asset('public/assets/images/allianz-300x300.png') }}" class="img-fluid" alt="img" />
								    </div>
								</div> 
		        			</div>
		        		</div>
		        	</div>
		        </div>

		        <div class="section6">
		        	<div class="container-fluid">
		        		<div class="row">
		        			<div class="col-sm-3 col-4 border-right">
		        				<div class="section6-box section6-box1" data-aos="flip-left" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section6-img1.png')}}" class="img-fluid" alt="img" />
		        					<p>2 MIN AEROPORT</p>
		        				</div> 
		        			</div>
		        			<div class="col-sm-3 border-right d-none d-sm-block">
		        				<div class="section6-box section6-box2" data-aos="flip-left" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section6-img2.png') }}" class="img-fluid" alt="img" />
		        					<p>ASSISTANCE TÉLÉPHONE <br>24H/24 7J/7</p>
		        				</div>
		        			</div>
		        			<div class="col-sm-3 col-4 border-right ">
		        				<div class="section6-box section6-box3" data-aos="flip-left" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section6-img3.png') }}" class="img-fluid" alt="img" />
		        					<p>32 RUE RAYMOND GRIMAUD <br>31700 BLAGNAC</p>
		        				</div>
		        			</div>
		        			<div class="col-sm-3 col-4">
		        				<div class="section6-box section6-box4" data-aos="flip-left" data-aos-duration="1000">
		        					<img src="{{ asset('public/assets/images/section6-img4.png') }}" class="img-fluid" alt="img" />
		        					<p>NAVETTE GRATUITE</p>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>

		        <div class="section7">
		        	<div class="container" data-aos="fade-up" data-aos-duration="1000">
		        		<div class="row">
		        			<div class="order-4 order-sm-1 col-sm-2 col-6">
		        				
		        				<div class="section7-box section7-box1">
		        					<img src="{{ asset('public/assets/images/call-icon.png') }}" class="img-fluid" alt="img" />
		        					<p>ASSISTANCE</p>
		        					<p>07 86 28 86 71</p>
		        					<p>contact@parkme.fr</p>
		        				</div>
		        			</div>
		        			<div class="order-1 order-sm-2 col-sm-3 col-6">
		        				<div class="section7-box section7-box2">
		        					<h3>Menu</h3>
		        					<p>
		        					    <ul>
		        					        <li>Accueil</li>
		        					        <li>Réserver</li>
		        					        <li>Vos questions</li>
		        					    </ul>
		        					</p>
		        				</div>
		        			</div>
		        			<div class="order-3 order-sm-3 col-sm-2 col-12">
		        				<div class="section7-box section7-box3 d-none d-sm-block">
		        					<img src="{{ asset('public/assets/images/footer-logo.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        				<div class="section7-box section7-box3 d-block d-sm-none">
		        					<img src="{{ asset('public/assets/images/mobile-footer-logo.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        			</div>
		        			<div class="order-2 order-sm-4 col-sm-3 col-6">
		        				<div class="section7-box section7-box4">
		        					<a href="https://parkme.fr/pdf/condition_general_parkme_de_ventes.pdf" target="_blank"><h3>Méntions légales</h3>
		        					<p>Conditions générales de ventes</p></a>
		        				</div>
		        			</div>
		        			<div class="order-5 order-sm-5 col-sm-2 col-6">
		        				<div class="section7-box section7-box5">
		        					<img src="{{ asset('public/assets/images/fb-icon.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>

		        <div class="footerSection">
		        	<div class="container">
		        		<div class="row">
		        			<div class="col">
		        				<div class="footerText">
		        					<p>&copy; Copyright 2020 Park Me - All Rights Reserved</p>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		    </section>
		    <!-- Index.html Ends -->

		    <!-- Page 1 Starts -->
		    <section id="page1">
					
					<div class="arrival-time">
						<div class="container">
							<div class="row">
								<div class="col-sm-10 offset-sm-1">

									<div class="row">
										
										<div class="col-sm-2 col-2">
									      <div class="arrive arri">
									        <label> ARRIVÉE </label>
									        <div class="sdate">03/03</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-2 col-2">
									      <div class="departure arri">
									        <label> DÉPART </label>
									        <div class="edate">03/18</div>
									        <div class="etime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-5 col-5 p-0">
									      <div class="services arri">
									        <label> SERVICE </label>
									        <p>Navette gratuite(0€)</p>
									        <div class="service setServiceType">--</div>
									        <!--<div class=""> &nbsp; </div>-->
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> TOTAL </label>
									        <div class="total-price"> 0.00 € </div>
									        <!--<div class=""> &nbsp; </div>-->
									      </div>
										</div>

									</div>
								</div>
							</div>
				    	</div>
					</div>

					<div class="container">
			    		<div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="page1-header">
			                        <h3>ETAPE 2: SERVICE</h3>
			                    </div>
			                </div>
			            </div>

			        	<div class="page1">
							<div class="row">
				                <div class="col-sm-12 col-12" id="serviceHeader">
				                    <div class="page1-header">
				                        <p>SÉLECTIONNER UN SERVICE</p>
				                        <p>PENDANT VOTRE VOYAGE...</p>
				                    </div>
				                </div>
				                <div class="col-sm-12 col-12" id="carHeader">
				                    <div class="page1-header" >
				                        <p>cliquer sur taille de votre véhicule</p>
				                    </div>
				                </div>
				            </div>

				            <div class="row" id="upCar">
								@foreach($car_types as $car_type)
	                    		<div class="col-sm-4 col-4">
									<div class="page1-car">
										<label>
											<input type="radio" name="car_type" value="{{$car_type->car_type}}" />
											<img src="{{ asset('public/assets/images/'.$car_type->icon)}}" class="img-fluid page1Car" alt="img" />
										</label>
									</div>
								</div>
								@endforeach
								
				            </div>
				            
				            <div class="page2 box1">
        						<div class="row">
        						    <div class="col-sm-1 col-12">
        			                    <div class="page2-back text-left">
										<p class="page2-back-service"><u>&larr;retour</u></p>
										<!-- <p id="clearCheck"><u>Clear</u></p> -->
        			                    </div>
        			                </div>
        			                <div class="col-sm-11 col-12">
        			                    <div class="page2-header">
        			                        <p>LAVAGE</p>
        			                    </div>
        			                </div>
        			            </div>

			            <div class="row">

                    		<div class="col-sm-8 offset-sm-2 col-12">
								<div class="page2-radio">

									<div class="row">
										@foreach($washing as $k => $wash)
										<div class="col-sm-6 col-8">
											
											  <div class="custom-control custom-radio">
											    <input type="checkbox" onChange="setSelectedValues()" class="custom-control-input" id="customRadio.{{$k}}" name="service[]" value="{{$wash->service_name.'-'.$wash->price}}">
											    <label class="custom-control-label" for="customRadio.{{$k}}">{{$wash->service_name}}</label>
											  </div>
											
										</div>
										<div class="col-sm-6 col-4">
										    <div class="revision-cost">
    											<h5>
    												<b>{{$wash->price}}</b> €
    											</h5>
											</div>
										</div>
										<?php $k++; ?>
										@endforeach
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border1"></div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border2"></div>
			            	</div>
			            </div>
		        	</div>

		        	        <div class="page2 box2">
    						<div class="row">
    						    <div class="col-sm-1 col-12">
    			                    <div class="page2-back text-left">
										<p class="page2-back-service"><u>&larr;retour</u></p>
										<!-- <p id="clearCheck"><u>Clear</u></p> -->
    			                    </div>
    			                </div>
    			                <div class="col-sm-11 col-12">
    			                    <div class="page2-header">
    			                        <p>ESSENCE</p>
    			                    </div>
    			                </div>
    			            </div>

			            <div class="row">

                    		<div class="col-sm-8 offset-sm-2 col-12">
								<div class="page2-radio">

									<div class="row">
										@foreach($gasoline as $k => $fuel)
										<div class="col-sm-6 col-8">
											  <div class="custom-control custom-radio">

											    <input type="checkbox" onChange="setSelectedValues()" class="custom-control-input" id="customRadio1.{{$k}}" name="service[]" value="{{$fuel->service_name.'-'.$fuel->price}}">

											    <label class="custom-control-label" for="customRadio1.{{$k}}">{{$fuel->service_name}}</label>
											  </div>
										</div>

										<div class="col-sm-6 col-4">
										    <div class="revision-cost">
    											<h5>
    												<b>{{$fuel->price}}</b> €
    											</h5>
											</div>
										</div>
										<?php $k++; ?>
										@endforeach
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			            	<div class="col-sm-12">
			            		<div class="black-bg">
									<p>1. Le coût de la prestation (<span>10€</span>) est <span>payé maintenant.</span></p>
									<p>2. Gràce à la <span>facture,</span>  vous réglez <span>à votre retour.</span></p>
			            		</div>
			            	</div>
			            	<!--<div class="col-sm-6 p-0">-->
			            	<!--	<div class="black-bg">-->
			            	<!--		<p>Grâce â la <span>facture,</span>  vous réglez <span>â votre retour.</span></p>-->
			            	<!--	</div>-->
			            	<!--</div>-->
			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border1"></div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border2"></div>
			            	</div>
			            </div>
		        	</div>

        	                <div class="page2 box3">
        						<div class="row">
        						    <div class="col-sm-1 col-12">
        			                    <div class="page2-back text-left">
											<p class="page2-back-service"><u>&larr;retour</u></p>
											<!-- <p id="clearCheck"><u>Clear</u></p> -->
        			                    </div>
        			                </div>
        			                <div class="col-sm-11 col-12">
        			                    <div class="page2-header">
        			                        <p>RÉVISION</p>
        			                    </div>
        			                </div>
        			            </div>

			            <div class="row">

                    		<div class="col-sm-8 offset-sm-2 col-12">
								<div class="page2-radio">

									<div class="row">
										@foreach($maintenance as $k => $mechanic)
										<div class="col-sm-6 col-8">
											  <div class="custom-control custom-radio">

											    <input type="checkbox" onChange="setSelectedValues()" class="custom-control-input" id="customRadio2.{{$k}}" name="service[]" value="{{$mechanic->service_name.'-'.$mechanic->price}}">

											    <label class="custom-control-label" for="customRadio2.{{$k}}">{{$mechanic->service_name}}</label>
											  </div>
										</div>

										<div class="col-sm-6 col-4">
										    <div class="revision-cost">
											    <h5><b>{{$mechanic->price}}</b> €</h5>
											</div>
										</div>
										<?php $k++; ?>
										@endforeach
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			      <!--      	<div class="col-sm-6 p-0">-->
			      <!--      		<div class="black-bg">-->
									<!--<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>-->
			      <!--      		</div>-->
			      <!--      	</div>-->
			            	<div class="col-sm-12 col-12">
			            		<div class="black-bg">
			            			<p>1. Le coût de la prestation (<span>10€</span>) est <span>payé maintenant.</span></p>
									<p>2. Gràce à la <span>facture,</span>  vous réglez <span>à votre retour.</span></p>
			            		</div>
			            	</div>
			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border1"></div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border2"></div>
			            	</div>
			            </div>
		        	</div>

                            <div class="row" id="servicesWithUpCar">
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<label>
											<input type="checkbox" name="service_type[]" value="Lavage" onChange="setSelectedValues()"/>
											<img src="{{ asset('public/assets/images/img1.png')}}" class="img-fluid img1 serviceImg1" alt="img" />
											<p>Lavage</p>
										</label>
									</div>
								</div>
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<label>
											<input type="checkbox" name="service_type[]" value="Essence" onChange="setSelectedValues()"/>
										    <img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid img2 serviceImg2" alt="img" />
										    <p>Essence</p>
										</label>
									</div>
								</div>
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<label>
											<input type="checkbox" name="service_type[]" value="Entretien" onChange="setSelectedValues()"/>
											<img src="{{ asset('public/assets/images/img3.png')}}" class="img-fluid img3 serviceImg3" alt="img" />
											<p>Entretien</p>
										</label>
									</div>
								</div>
							</div>

                            <div class="row" >
				            	<div class="col-sm-12 p-0" id="full-blue">
				            		<div class="blue-border1 page1-border">2/2</div>
				            	</div>
				            </div>
				            <div class="row" id="half-blue">
				            	<div class="col-sm-6 col-6 p-0">
				            		<div class="blue-border1 page1-border">1/2</div>
				            	</div>
				            	<div class="col-sm-6 col-6 p-0">
				            		<div class="blue-border2"></div>
				            	</div>
				            </div>
			        	</div>
                        <div class="row" id="downCarTitle">
			            	<div class="col-sm-12 col-12">
			            		<div class="downCarText">
			            		    <p>taille vehicule</p>
			            		</div>
			            	</div>
			            </div>  
                        <div class="row" id="downCar">
						    <div class="col-sm-6 offset-sm-3">
							    <div class="row">
							       <div class="col-sm-4 col-4">
									<div class="page1-car">
										<label>
											<input type="radio" name="cat_type" value="small" />
											<img src="{{ asset('public/assets/images/car1.png')}}" class="img-fluid" alt="img" />
										</label>
									</div>
								</div>

								<div class="col-sm-4 col-4">
									<div class="page1-car">
										<label>
											<input type="radio" name="cat_type" value="medium" />
											<img src="{{ asset('public/assets/images/car2.png')}}" class="img-fluid" alt="img" />
										</label>
									</div>
								</div>
								
								<div class="col-sm-4 col-4">
									<div class="page1-car">
										<label>
											<input type="radio" name="cat_type" value="large" />
											<img src="{{ asset('public/assets/images/car3.png')}}" class="img-fluid" alt="img" />
										</label>
									</div>
								</div>
							    </div>
							</div>
					    </div>

			    <!--    	<div class="row">-->
							<!--<div class="col-sm-6 offset-sm-3">-->
							<!--	<div class="row">-->
							<!--		@foreach($services as $service)-->
							<!--		<div class="col-sm-4 col-4">-->
							<!--			<div class="footer-icon">-->
							<!--				<img src="{{ asset('public/assets/images/'.$service->icon)}}" class="img-fluid" alt="img" />-->
							<!--			</div>-->
							<!--		</div>-->
							<!--		@endforeach-->
							<!--		 <div class="col-sm-4 col-4">-->
							<!--			<div class="footer-icon">-->
							<!--				<img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid" alt="img" />-->
							<!--			</div>-->
							<!--		</div>-->
							<!--		<div class="col-sm-4 col-4">-->
							<!--			<div class="footer-icon">-->
							<!--				<img src="{{ asset('public/assets/images/img3.png')}}" class="img-fluid" alt="img" />-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
			    <!--    	</div>-->
        			    <div class="alert alert-danger" role="alert" id="essenceError">
                          Veuillez sélectionner la taille du vehicule
                        </div>
			        	<div class="page1-btn">
			        		<a href="javascript:void(0);" class="custom-btn2" id="page1Prev-btn">retour</a>
							<!--<a href="javascript:void(0);" class="custom-btn" id="page1Next-btn">SUIVANT</a>-->
							<a href="javascript:void(0);" class="custom-btn" id="page3Next-btn">SUIVANT</a>
						</div>
			        </div>
		    </section>
		    <!-- Page 1 Ends -->

		    <!-- Page 2 Starts -->
		  <!--  <section id="page2">-->
				<!--<div class="arrival-time">-->
				<!--	<div class="container">-->
				<!--		<div class="row">-->
				<!--			<div class="col-sm-10 offset-sm-1">-->

				<!--				<div class="row">-->
									
				<!--					<div class="col-sm-3 col-3">-->
				<!--				      <div class="arrive arri">-->
				<!--				        <label> ARRIVÉE </label>-->
				<!--				        <div class="sdate">03/03</div>-->
				<!--				        <div class="stime">5:00</div>-->
				<!--				      </div>-->
				<!--					</div>-->

				<!--					<div class="col-sm-3 col-3">-->
				<!--				      <div class="departure arri">-->
				<!--				        <label> DÉPART </label>-->
				<!--				        <div class="edate">03/18</div>-->
				<!--				        <div class="etime">5:00</div>-->
				<!--				      </div>-->
				<!--					</div>-->

				<!--					<div class="col-sm-3 col-3">-->
				<!--				      <div class="services arri">-->
				<!--				        <label> SERVICE </label>-->
				<!--						<label><b>Navette gratuite(0€)</b></label>-->
				<!--				        <div class="service setServiceType">--</div>-->
				<!--				        <div class=""> &nbsp; </div>-->
				<!--				      </div>-->
				<!--					</div>-->

				<!--					<div class="col-sm-3 col-3">-->
				<!--				      <div class="departure arri">-->
				<!--				        <label> TOTAL </label>-->
				<!--				        <div class="total-price"> € 0.00 </div>-->
				<!--				        <div class=""> &nbsp; </div>-->
				<!--				      </div>-->
				<!--					</div>-->

				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
			 <!--   	</div>-->
				<!--</div>-->

				<!--<div class="container">-->
		  <!--  		<div class="row">-->
		  <!--              <div class="col-sm-12 col-12">-->
		  <!--                  <div class="page2-header">-->
		  <!--                      <h3>ETAPE 2: SERVICE</h3>-->
		  <!--                  </div>-->
		  <!--              </div>-->
		  <!--          </div>-->

		  <!--      	<div class="page2 box1">-->
				<!--		<div class="row">-->
			 <!--               <div class="col-sm-12 col-12">-->
			 <!--                   <div class="page2-header">-->
			 <!--                       <p>essence 1</p>-->
			 <!--                   </div>-->
			 <!--               </div>-->
			 <!--           </div>-->

			 <!--           <div class="row">-->

    <!--                		<div class="col-sm-8 offset-sm-2 col-12">-->
				<!--				<div class="page2-radio">-->

				<!--					<div class="row">-->
				<!--						@foreach($washing as $k => $wash)-->
				<!--						<div class="col-sm-6 col-8">-->
											
				<!--							  <div class="custom-control custom-radio">-->
				<!--							    <input type="radio" class="custom-control-input" id="customRadio.{{$k}}" name="service" value="{{$wash->service_name.'-'.$wash->price}}">-->
				<!--							    <label class="custom-control-label" for="customRadio.{{$k}}">{{$wash->service_name}}</label>-->
				<!--							  </div>-->
											
				<!--						</div>-->
				<!--						<div class="col-sm-6 col-4">-->
				<!--						    <div class="revision-cost">-->
    <!--											<h5>-->
    <!--												<b>{{$wash->price}}</b> €-->
    <!--											</h5>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--						<?php $k++; ?>-->
				<!--						@endforeach-->
				<!--					</div>-->
				<!--					<label id="essenceError">Should be Checked</label>-->
									
				<!--				</div>-->
				<!--			</div>-->

			 <!--           </div>-->

			      <!--      <div class="row">-->
			      <!--      	<div class="col-sm-6 p-0">-->
			      <!--      		<div class="black-bg">-->
									<!--<p>Le cout de la prestation (<span>1000E</span>) <br> est <span>paye maintenant</span></p>-->
			      <!--      		</div>-->
			      <!--      	</div>-->
			      <!--      	<div class="col-sm-6 p-0">-->
			      <!--      		<div class="black-bg">-->
			      <!--      			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>-->
			      <!--      		</div>-->
			      <!--      	</div>-->
			      <!--      </div>-->

			 <!--           <div class="row">-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="blue-border1"></div>-->
			 <!--           	</div>-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="blue-border2"></div>-->
			 <!--           	</div>-->
			 <!--           </div>-->
		  <!--      	</div>-->

		  <!--      	<div class="page2 box2">-->
				<!--		<div class="row">-->
			 <!--               <div class="col-sm-12 col-12">-->
			 <!--                   <div class="page2-header">-->
			 <!--                       <p>essence 2</p>-->
			 <!--                   </div>-->
			 <!--               </div>-->
			 <!--           </div>-->

			 <!--           <div class="row">-->

    <!--                		<div class="col-sm-8 offset-sm-2 col-12">-->
				<!--				<div class="page2-radio">-->

				<!--					<div class="row">-->
				<!--						@foreach($gasoline as $k => $fuel)-->
				<!--						<div class="col-sm-6 col-8">-->
				<!--							  <div class="custom-control custom-radio">-->

				<!--							    <input type="radio" class="custom-control-input" id="customRadio1.{{$k}}" name="service" value="{{$fuel->service_name.'-'.$fuel->price}}">-->

				<!--							    <label class="custom-control-label" for="customRadio1.{{$k}}">{{$fuel->service_name}}</label>-->
				<!--							  </div>-->
				<!--						</div>-->

				<!--						<div class="col-sm-6 col-4">-->
				<!--						    <div class="revision-cost">-->
    <!--											<h5>-->
    <!--												<b>{{$fuel->price}}</b> €-->
    <!--											</h5>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--						<?php $k++; ?>-->
				<!--						@endforeach-->
				<!--					</div>-->
									
				<!--				</div>-->
				<!--			</div>-->

			 <!--           </div>-->

			 <!--           <div class="row">-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="black-bg">-->
				<!--					<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>-->
			 <!--           		</div>-->
			 <!--           	</div>-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="black-bg">-->
			 <!--           			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>-->
			 <!--           		</div>-->
			 <!--           	</div>-->
			 <!--           </div>-->

			 <!--           <div class="row">-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="blue-border1"></div>-->
			 <!--           	</div>-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="blue-border2"></div>-->
			 <!--           	</div>-->
			 <!--           </div>-->
		  <!--      	</div>-->

		  <!--      	<div class="page2 box3">-->
				<!--		<div class="row">-->
			 <!--               <div class="col-sm-12 col-12">-->
			 <!--                   <div class="page2-header">-->
			 <!--                       <p>essence 3</p>-->
			 <!--                   </div>-->
			 <!--               </div>-->
			 <!--           </div>-->

			 <!--           <div class="row">-->

    <!--                		<div class="col-sm-8 offset-sm-2 col-12">-->
				<!--				<div class="page2-radio">-->

				<!--					<div class="row">-->
				<!--						@foreach($maintenance as $k => $mechanic)-->
				<!--						<div class="col-sm-6 col-8">-->
				<!--							  <div class="custom-control custom-radio">-->

				<!--							    <input type="radio" class="custom-control-input" id="customRadio2.{{$k}}" name="service" value="{{$mechanic->service_name.'-'.$mechanic->price}}">-->

				<!--							    <label class="custom-control-label" for="customRadio2.{{$k}}">{{$mechanic->service_name}}</label>-->
				<!--							  </div>-->
				<!--						</div>-->

				<!--						<div class="col-sm-6 col-4">-->
				<!--						    <div class="revision-cost">-->
				<!--							    <h5><b>{{$mechanic->price}}</b> €</h5>-->
				<!--							</div>-->
				<!--						</div>-->
				<!--						<?php $k++; ?>-->
				<!--						@endforeach-->
				<!--					</div>-->
									
				<!--				</div>-->
				<!--			</div>-->

			 <!--           </div>-->

			 <!--           <div class="row">-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="black-bg">-->
				<!--					<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>-->
			 <!--           		</div>-->
			 <!--           	</div>-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="black-bg">-->
			 <!--           			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>-->
			 <!--           		</div>-->
			 <!--           	</div>-->
			 <!--           </div>-->

			 <!--           <div class="row">-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="blue-border1"></div>-->
			 <!--           	</div>-->
			 <!--           	<div class="col-sm-6 p-0">-->
			 <!--           		<div class="blue-border2"></div>-->
			 <!--           	</div>-->
			 <!--           </div>-->
		  <!--      	</div>-->

		  <!--      	<div class="row">-->
				<!--		<div class="col-sm-6 offset-sm-3">-->
				<!--			<div class="row">-->
				<!--				<div class="col-sm-4 col-4">-->
				<!--					<div class="footer-icon">-->
				<!--						<label>-->
				<!--							<input type="radio" name="service_type" value="washing" onChange="setSelectedValues()"/>-->
				<!--							<img src="{{ asset('public/assets/images/img1.png')}}" class="img-fluid img1" alt="img" />-->
				<!--						</label>-->
				<!--					</div>-->
				<!--				</div>-->
				<!--				<div class="col-sm-4 col-4">-->
				<!--					<div class="footer-icon">-->
				<!--						<label>-->
				<!--							<input type="radio" name="service_type" value="gasoline" onChange="setSelectedValues()"/>-->
				<!--						<img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid img2" alt="img" />-->
				<!--						</label>-->
				<!--					</div>-->
				<!--				</div>-->
				<!--				<div class="col-sm-4 col-4">-->
				<!--					<div class="footer-icon">-->
				<!--						<label>-->
				<!--							<input type="radio" name="service_type" value="maintenance" onChange="setSelectedValues()"/>-->
				<!--							<img src="{{ asset('public/assets/images/img3.png')}}" class="img-fluid img3" alt="img" />-->
				<!--						</label>-->
				<!--					</div>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</div>-->
		  <!--      	</div>-->

		  <!--      	<div class="page1-btn">-->
		  <!--      		<a href="javascript:void(0);" class="custom-btn2" id="page2Prev-btn">Passer a la derniere etape</a>-->
				<!--		<a href="javascript:void(0);" class="custom-btn" id="page2Next-btn">SUIVANT</a>-->
				<!--	</div>-->
		  <!--      </div>-->
		  <!--  </section>-->
		    <!-- Page 2 Ends -->

		    <!-- Page 3 Starts -->
		    <section id="page3">
				<div class="arrival-time">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 offset-sm-1">

								<div class="row">
									
								        <div class="col-sm-2 col-2">
									      <div class="arrive arri">
									        <label> ARRIVÉE </label>
									        <div class="sdate">03/03</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-2 col-2">
									      <div class="departure arri">
									        <label> DÉPART </label>
									        <div class="edate">03/18</div>
									        <div class="etime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-5 col-5 p-0">
									      <div class="services arri">
									        <label> SERVICE </label>
											<p>Navette gratuite(0€)</p>
									        <div class="service setServiceType">--</div>
									        <!--<div class=""> &nbsp; </div>-->
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> TOTAL </label>
									        <div class="total-price" id="total-price1"> 0.00 € </div>
									        <!--<div class=""> &nbsp; </div>-->
									      </div>
										</div>

								</div>
							</div>
						</div>
			    	</div>
				</div>

				<div class="container">
		    		<div class="row">
		                <div class="col-sm-12 col-12">
		                    <div class="page3-header">
		                        <h3>ETAPE 2: SERVICE</h3>
		                    </div>
		                </div>
		            </div>

		        	<div class="page3">
						<div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="page3-header">
			                        <p>revision</p>
			                    </div>
			                </div>
			            </div>

			            <div class="row">

                    		<div class="col-sm-8 offset-sm-2 col-12">
								<div class="page3-radio">

									<div class="row">
										<div class="col-sm-6 col-8">
										    <div class="revision-text">
										        <h5 class="final_sevice">Changement pneu</h5>    
										    </div>
											  <!--<div class="custom-control custom-radio">-->
											  <!--  <input type="radio" class="custom-control-input" id="customRadio" name="" value="customEx">-->
											  <!--  <label class="custom-control-label" for="customRadio">Changement pneu</label>-->
											  <!--</div>-->
										</div>

										<div class="col-sm-6 col-4">
										    <div class="revision-cost">
											    <h5 class="final_sevice_price">20 €</h5>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-8">
										</div>

										<div class="col-sm-6 col-4">
										    <!-- <div class="revision-cost">
											    <h5>20 €</h5>
											</div> -->
										</div>
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			      <!--      	<div class="col-sm-6 p-0">-->
			      <!--      		<div class="black-bg">-->
									<!--<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>-->
			      <!--      		</div>-->
			      <!--      	</div>-->
			            	<div class="col-sm-12 col-12">
			            		<div class="black-bg">
			            		    <p>Le cout de la prestation (<span>10E</span>) est <span>paye maintenant</span></p>
			            			<p>Grace a la <span>facture</span> du lein de carburant vous reglez <span>a votre retour</span></p>
			            		</div>
			            	</div>
			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border1"></div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="blue-border2"></div>
			            	</div>
			            </div>
		        	</div>

		        	<!--<div class="row">
						<div class="col-sm-6 offset-sm-3">
							<div class="row">
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<img src="{{ asset('public/assets/images/img1.png')}}" class="img-fluid" alt="img" />
									</div>
								</div>
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid" alt="img" />
									</div>
								</div>
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<img src="{{ asset('public/assets/images/img3.png')}}" class="img-fluid" alt="img" />
									</div>
								</div>
							</div>
						</div>
		        	</div>-->

		        	<div class="page1-btn">
		        		<a href="javascript:void(0);" class="custom-btn2" id="page3Prev-btn">retour</a>
						<a href="javascript:void(0);" class="custom-btn" id="page3Next-btn">SUIVANT</a>
					</div>
		        </div>
		    </section>
		    <!-- Page 3 Ends -->
			
			<!-- Page 4 Starts -->
		    <section id="page4">
				<div class="arrival-time">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 offset-sm-1">

								<div class="row">
									
									<div class="col-sm-2 col-2">
								      <div class="arrive arri">
								        <label> ARRIVÉE </label>
								        <div class="sdate">03/03</div>
								        <div class="stime">5:00</div>
								      </div>
									</div>

									<div class="col-sm-2 col-2">
								      <div class="departure arri">
								        <label> DÉPART </label>
								        <div class="sdate">03/18</div>
								        <div class="stime">5:00</div>
								      </div>
									</div>

									<div class="col-sm-5 col-5 p-0">
								      <div class="services arri">
								        <label> SERVICE </label>
								        <p>Navette gratuite(0€)</p>
								        <div class="service setServiceType"> &nbsp; </div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="departure arri">
								        <label> TOTAL </label>
								        <div class="total-price"> 0.00 € </div>
								        <!--<div class=""> &nbsp; </div>-->
								      </div>
									</div>

								</div>
							</div>
						</div>
			    	</div>
				</div>

				<div class="container">
		    		<div class="row">
		                <div class="col-sm-12 col-12">
		                    <div class="page4-header">
		                        <h3>paiement</h3>
		                    </div>
		                </div>
		            </div>


			            <div class="row">
			            	<div class="col-sm-6 offset-sm-3">
					        	<div class="page4">
					        		<div class="row mb-3">
				        		  		<div class="col">
				        		  			<div class="page4-header">
				        		  				<h4>Coordonnees</h4>
				        		  			</div>
				        		  		</div>
				        		  	</div>

								    <div class="row mb-3">

								      <div class="col">
								        <input type="text" class="form-control form-control-lg form-check-input" id="name" placeholder="Nom" name="name" required />
								        <div class="valid-feedback">Valid.</div>
	    								<div class="invalid-feedback">Name Required.</div>
								      </div>

								      <div class="col">
								        <input type="text" class="form-control form-control-lg form-check-input" placeholder="N° de téléphone" id="telephoneNumber" name="phone" required />
								        <div class="valid-feedback">Valid.</div>
	    								<div class="invalid-feedback">Telephone Number Required.</div>
								      </div>
								    </div>

								    <div class="row mb-3">
								      <div class="col">
								        <input type="email" class="form-control form-control-lg form-check-input" placeholder="E-mail" name="email" required />
								        <div class="valid-feedback">Valid.</div>
	    									<div class="invalid-feedback">Email is Empty or Invalid.</div>
								      </div>
								    </div>

								    <div class="row mb-3">
									    <div class="col">
									        <!--<input type="number" class="form-control form-control-lg form-check-input" placeholder="Numero de personne (Navette)" name="no_of_seats" required />-->
									        <select class="form-control custom-select-lg" name="no_of_seats" required>
									            <option value="" disabled selected>Nombre de personne (Navette)</option>
        									    <option value="1">1</option>
        									    <option value="2">2</option>
        									    <option value="3">3</option>
        									    <option value="4">4</option>
        									    <option value="5">5</option>
        									    <option value="6">6</option>
        									    <option value="7">7</option>
        									    <option value="8">8</option>
        									</select>
									        <div class="valid-feedback">Valid.</div>
	    									<div class="invalid-feedback">Seat Number Required.</div>
									    </div>
								    </div>

									<div class="row mb-3">
				        		  		<div class="col">
				        		  			<div class="page4-header">
				        		  				<h4>Paiement</h4>
				        		  				<p>Toutes les transactions sent securisees of cryptees.</p>
				        		  			</div>
				        		  		</div>
				        		  	</div>

				        		  	<div class="credit-card">

					        		  	<div class="row mb-3">
					        		  		<div class="col">
					        		  			<div class="page4-header">
					        		  				<h4>Carte de credit</h4>
					        		  			</div>
					        		  		</div>
					        		  		<div class="col text-right">
					        		  			<img src="{{ asset('public/assets/images/social-icon.jpg')}}" class="img-fluid" alt="img" />
					        		  		</div>
					        		  	</div>
                                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                                 @csrf
    					        		  	<div class="row mb-3">
                                                
    
    									            <div class="col">
    									        <input type="text" class="form-control form-control-lg form-check-input" placeholder="Numero de Carte" name="card_holder" required />
    									        <div class="valid-feedback">Valid.</div>
    	    									<div class="invalid-feedback">Please fill out this field.</div>
    									      </div>
    
    									    </div>
    
    									    <div class="row mb-3">
    
    									      <div class="col">
    									        <input type="text" class="form-control form-control-lg form-check-input card-number" placeholder="Numero sur ta Carte" name="card_number" required />
    									        <div class="valid-feedback">Valid.</div>
    	    									<div class="invalid-feedback">Please fill out this field.</div>
    									      </div>
    
    									    </div>
    
    									    <div class="row mb-3">
    
    									      <div class="col">
    									        <input type="text" class="form-control form-control-lg form-check-input card-expiry-month" placeholder="Date d'expiration (MM/AA)" name="exp_month" id="expiryDate" required />
    									        <div class="valid-feedback">Valid.</div>
    	    									<div class="invalid-feedback">Please fill out this field.</div>
    									      </div>
    									      
    									      <div class="col">
    									        <input type="text" class="form-control form-control-lg form-check-input card-expiry-year" placeholder="Date d'expiration (MM/AA)" name="exp_year" id="expiryDate" required />
    									        <div class="valid-feedback">Valid.</div>
    	    									<div class="invalid-feedback">Please fill out this field.</div>
    									      </div>
    
    									      <div class="col">
    									        <input type="text" class="form-control form-control-lg form-check-input card-cvc" placeholder="Code de securitees" name="cvc"  required />
    									        <div class="valid-feedback">Valid.</div>
    	    									<div class="invalid-feedback">Please fill out this field.</div>
    									      </div>
    									      
    									      <div class="row">
                                                <div class="col">
                                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button>
                                                </div>
                                              </div>
    
    									    </div>
                                        </form>
								    </div>

					        	</div>
				        	</div>
			        	</div>

			        	<div class="page1-btn">
			        		<a href="javascript:void(0);" class="custom-btn2" id="page4Prev-btn">retour</a>
			        		<!--<a href="javascript:void(0);" class="custom-btn2" id="page3Prev-btn">Passer a la derniere etape</a>-->
			        		<!--<a href="javascript:void(0);" class="custom-btn2" id="page3Prev-btn">Passer a la derniere etape</a>-->
							<button type="submit" class="custom-btn">Valider</button>
						</div>

					
		        </div>
		    </section>
		    <!-- Page 4 Ends -->
		    
		    <!-- FAQs page -->
		    <section id="faqs">
	        	<div class="faq-section">
	        	   
	        	    <div class="container">
	        	         <div class="row">
	        	            <div class="col">
        	        	        <div class="faq-heading">
        	        	            <h1>f.a.q</h1>
        	        	        </div>
    	        	        </div>
    	        	    </div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">RÉSERVER</a>
                                        <i class="fa fa-caret-down"></i>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <h3>-COMMENT RÉSERVER ?</h3>
                                        <p>Site internet uniquement “parkme.fr” sur la page d’accueil OU dans le menu en haut en cliquant sur “Réserver”</p>

                                        <h3>-COMMENT ÇA MARCHE ?</h3>
                                        <p>Aller:</p>
                                        <ul>
                                            <li>RÉSERVE EN LIGNE</li>
                                            <li>GARER VOTRE VOITURE</li>
                                            <li>TRANSPORTÉ VERS AÉROPORT EN 2 MIN. (Navette PARKME)</li>
                                            <li>DURANT VOTRE VOYAGE (Lavage/Carburant) voir séction “nos services” dans F.A.Q)</li>
                                        </ul>
                                        <h3>Retour:</h3>
                                        <ul>
                                            <li>J’APPELLE NAVETTE</li>
                                            <li>JE RÉCUPÈRE MA VOITURE</li>
                                        </ul>
                                        <h3>-MODIFIER OU ANNULER MA RÉSERVATION</h3>
                                        <p>Envoyer un message à adresse mail: contact@parkme.fr</p>

                                        <h3>-COMBIEN DE TEMPS J’AI POUR RÉSERVER AVANT MON ARRIVÉE ?</h3>
                                        <p>Minimum 12h avant votre arrivée.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">NOS SERVICES</a>
                                        <i class="fa fa-caret-down"></i>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h3>-OÙ SÉLECTIONNER DES SERVICES ?</h3>
                                        <p>Lors de votre réservation après avoir sélectionné des dates.</p>
                                        
                                        <h3>-QUELLES SONT VOS SERVICES ?</h3>
                                        <ul>
                                            <li><b>Navette:</b> Notre navette parkme vous transporte gratuitement à l’aller et au retour en 2 min, au retour vous n’avez juste qu’à appeler ce numéro: 0786288671.</li>
                                            <li><b>Lavage:</b> Récupérer votre voiture lavée à l’exterieur ET/OU à l’intérieur selon vos choix.</li>
                                            <li><b>Carburant:</b> Récupérer votre voiture avec le plein de carburant.</li>
                                            <li><b>Révision:</b> Contrôle téchnique, pneu, liquide, huile, profitez d’un pannel de révision à sélectionner lors de la réservation.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">LOCALISATION</a>
                                        <i class="fa fa-caret-down"></i>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body location">
                                        <p>Adresse: 32 rue Raymond Grimaud, 31700, Blagnac.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">PAIEMENT</a>
                                        <i class="fa fa-caret-down"></i>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <h3>-QUELLES MÉTHODES DE PAIEMENT ACCEPTEZ-VOUS?</h3>
                                        <p>Carte Bancaire, Paypal.</p>
                                        
                                        <h3>-MON PAIEMENT A-T-IL ÉTÉ EFFECTUÉ AVEC SUCCÈS?</h3>
                                        <p>Si votre paiement a été effectué avec succès, vous recevrez un mail de confirmation de commande.</p>
                                        
                                        
                                        <h2>-SÉCURITÉ ET DEVISE</h2>
                                        
                                        <h3>-MES DONNÉES DE PAIEMENT SONT-ELLES SÉCURISÉES?</h3>
                                        <p>Nous utilisons le leader de paiement Stripe qui assure une sécurité optimale de vos données de paiement.</p>
                                        
                                        <h3>-CONSERVEZ-VOUS MES DONNÉES DE PAIEMENT?</h3>
                                        <p>Non, nous ne conservons pas vos données de paiement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">CONTACT</a>
                                        <i class="fa fa-caret-down"></i>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body contact">
                                        <p><b>MAIL:</b> contact@parkme.fr</p>
                                        <p><b>NUMÉRO DE TÉLÉPHONE:</b> 0786288671</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	        	</div>

		        <div class="section7">
		        	<div class="container" data-aos="fade-up" data-aos-duration="1000">
		        		<div class="row">
		        			<div class="col-sm-2 col-6">
		        				<div class="section7-box section7-box1">
		        					<img src="{{ asset('public/assets/images/call-icon.png') }}" class="img-fluid" alt="img" />
		        					<p>ASSISTANCE</p>
		        					<p>0778682047</p>
		        					<p>parkmemat@gmail.com</p>
		        				</div> 
		        			</div>
		        			<div class="col-sm-3 col-6">
		        				<div class="section7-box section7-box2">
		        					<h3>Menu</h3>
		        					<p><ul>
		        					        <li>Accueli</li>
		        					        <li>Réserver</li>
		        					        <li>Vos questions</li>
		        					    </ul>
		        					</p>
		        				</div>
		        			</div>
		        			<div class="col-sm-2 col-12">
		        				<div class="section7-box section7-box3 d-none d-sm-block">
		        					<img src="{{ asset('public/assets/images/footer-logo.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        				<div class="section7-box section7-box3 d-block d-sm-none">
		        					<img src="{{ asset('public/assets/images/mobile-footer-logo.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        			</div>
		        			<div class="col-sm-3 col-6">
		        				<div class="section7-box section7-box4">
		        					<h3>Mentions legales</h3>
		        					<p>Conditions générales de ventes</p>
		        				</div>
		        			</div>
		        			<div class="col-sm-2 col-6">
		        				<div class="section7-box section7-box5">
		        					<img src="{{ asset('public/assets/images/fb-icon.png') }}" class="img-fluid" alt="img" />
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>

		        <div class="footerSection">
		        	<div class="container">
		        		<div class="row">
		        			<div class="col">
		        				<div class="footerText">
		        					<p>&copy; Copyright 2020 Park Me - All Rights Reserved</p>
		        				</div>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		    </section>
		    <!-- FAQs Ends -->
		    
		    
			</form>
		</main>
		
		<script src="{{ asset('public/assets/js/aos.js')}}"></script>
		<script src="{{ asset('public/assets/js/jquery.caret.js') }}"></script>
		<script src="{{ asset('public/assets/js/jquery.mobilePhoneNumber.js') }}"></script>
		<script src="{{ asset('public/assets/js/custom.js')}}"></script>
        <script src="{{ asset('public/assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
		
        <script type="text/javascript">
	    	//AOS.init({disable: 'mobile'});
	    	AOS.init();
	    </script>
    </body>
</html>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>