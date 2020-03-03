<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome To ParkMe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('public/assets/images/favicon.ico')}}" type="image/x-icon" media="all">
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
					<img src="{{ asset('public/assets/images/logo.svg')}}" style="width: 15%;" class="img-fluid" alt="img" />
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

		    <!-- Index.html page -->
		    <section id="index">
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
										    <input class="form-control form-control-lg" type="text" placeholder="Select Date" name="start_date" id="start_date" />
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
									  <select class="form-control form-control-lg" id="arriveeTime" name="start_time">
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
										    <input class="form-control form-control-lg" type="text" placeholder="Select Date" name="end_date" id="end_date" />
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
									  <select class="form-control custom-select-lg" id="departTime" name="end_time">
									    <option>5:00</option>
									    <option>5:15</option>
									    <option>5:30</option>
									    <option>5:45</option>
									  </select>
									</div>
									<div class="form-group text-right mt-4">
										<a href="javascript:void(0);" class="custom-btn" id="index-btn">Je reserve ></a>
									</div>
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
										
										<div class="col-sm-3 col-3">
									      <div class="arrive arri">
									        <label> ARRIVE </label>
									        <div class="sdate">03/03</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> DEPART </label>
									        <div class="sdate">03/18</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="services arri">
									        <label> SERVICE </label>
									        <div class="service">Navette PARKME (0€)</div>
									        <div class=""> &nbsp; </div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> TOTAL </label>
									        <div class="total-price"> € 0.00 </div>
									        <div class=""> &nbsp; </div>
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
				                <div class="col-sm-12 col-12">
				                    <div class="page1-header">
				                        <p>CLIQUER SUR TAILLE DU VECICULE</p>
				                    </div>
				                </div>
				            </div>

				            <div class="row">
								@foreach($car_types as $car_type)
	                    		<div class="col-sm-4 col-12">
									<div class="page1-car">
										<label>
											<input type="radio" name="cat_type" value="{{$car_type->car_type}}" checked />
											<img src="{{ asset('public/assets/images/'.$car_type->icon)}}" class="img-fluid" alt="img" />
										</label>
									</div>
								</div>
								@endforeach
								<!-- <div class="col-sm-4 col-12">
									<div class="page1-car">
										<label>
											<input type="radio" name="cat_type" value="medium" />
											<img src="{{ asset('public/assets/images/car2.png')}}" class="img-fluid" alt="img" />
										</label>
									</div>
								</div>

								<div class="col-sm-4 col-12">
									<div class="page1-car">
										<label>
											<input type="radio" name="cat_type" value="big" />
											<img src="{{ asset('public/assets/images/car3.png')}}" class="img-fluid" alt="img" />
										</label>
									</div>
								</div> -->
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

			        	<div class="row">
							<div class="col-sm-6 offset-sm-3">
								<div class="row">
									@foreach($services as $service)
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="{{ asset('public/assets/images/'.$service->icon)}}" class="img-fluid" alt="img" />
										</div>
									</div>
									@endforeach
									<!-- <div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid" alt="img" />
										</div>
									</div>
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="{{ asset('public/assets/images/img3.png')}}" class="img-fluid" alt="img" />
										</div>
									</div> -->
								</div>
							</div>
			        	</div>

			        	<div class="page1-btn">
			        		<a href="javascript:void(0);" class="custom-btn2" id="page1Prev-btn">Passer a la derniere etape</a>
							<a href="javascript:void(0);" class="custom-btn" id="page1Next-btn">SUIVANT</a>
						</div>
			        </div>
		    </section>
		    <!-- Page 1 Ends -->

		    <!-- Page 2 Starts -->
		    <section id="page2">
				<div class="arrival-time">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 offset-sm-1">

								<div class="row">
									
									<div class="col-sm-3 col-3">
								      <div class="arrive arri">
								        <label> ARRIVE </label>
								        <div class="sdate">03/03</div>
								        <div class="stime">5:00</div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="departure arri">
								        <label> DEPART </label>
								        <div class="sdate">03/18</div>
								        <div class="stime">5:00</div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="services arri">
								        <label> SERVICE </label>
								        <div class="service">Navette PARKME (0€)</div>
								        <div class=""> &nbsp; </div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="departure arri">
								        <label> TOTAL </label>
								        <div class="total-price"> € 0.00 </div>
								        <div class=""> &nbsp; </div>
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
		                    <div class="page2-header">
		                        <h3>ETAPE 2: SERVICE</h3>
		                    </div>
		                </div>
		            </div>

		        	<div class="page2 box1">
						<div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="page2-header">
			                        <p>essence 1</p>
			                    </div>
			                </div>
			            </div>

			            <div class="row">

                    		<div class="col-sm-12 col-12">
								<div class="page2-radio">

									<div class="row">
										@foreach($washing as $wash)
										<div class="col-sm-6 col-8">
											<form>
											  <div class="custom-control custom-radio">
											    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="{{$wash->service_name}}">
											    <label class="custom-control-label" for="customRadio">{{$wash->service_name}}</label>
											  </div>
											
											</form>
										</div>
										<div class="col-sm-6 col-4">
											<p>
												<!-- <small>1</small> -->
												<b>{{$wash->price}}</b> €
											</p>
										</div>
										@endforeach
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
									<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>
			            		</div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
			            			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>
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
			                <div class="col-sm-12 col-12">
			                    <div class="page2-header">
			                        <p>essence 2</p>
			                    </div>
			                </div>
			            </div>

			            <div class="row">

                    		<div class="col-sm-12 col-12">
								<div class="page2-radio">

									<div class="row">
										@foreach($gasoline as $fuel)
										<div class="col-sm-6 col-8">
											<form>
											  <div class="custom-control custom-radio">

											    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="{{$fuel->service_name}}">

											    <label class="custom-control-label" for="customRadio">{{$fuel->service_name}}</label>
											  </div>

											</form>
										</div>

										<div class="col-sm-6 col-4">
											<p>
												<!-- <small>1</small> -->
												<b>{{$fuel->price}}</b> €
											</p>
										</div>
										@endforeach
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
									<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>
			            		</div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
			            			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>
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

		        	<div class="page2 box3">
						<div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="page2-header">
			                        <p>essence 3</p>
			                    </div>
			                </div>
			            </div>

			            <div class="row">

                    		<div class="col-sm-12 col-12">
								<div class="page2-radio">

									<div class="row">
										@foreach($maintenance as $mechanic)
										<div class="col-sm-6 col-8">
											<form>
											  <div class="custom-control custom-radio">

											    <input type="radio" class="custom-control-input" id="customRadio" name="example1" value="{{$mechanic->service_name}}">

											    <label class="custom-control-label" for="customRadio">{{$mechanic->service_name}}</label>
											  </div>

											</form>
										</div>

										<div class="col-sm-6 col-4">
											<p>
												<!-- <small>1</small> -->
												<b>{{$mechanic->price}}</b> €
											</p>
										</div>
										@endforeach
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
									<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>
			            		</div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
			            			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>
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

		        	<div class="row">
						<div class="col-sm-6 offset-sm-3">
							<div class="row">
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<label>
											<input type="radio" name="example1" value="washing" checked />
											<img src="{{ asset('public/assets/images/img1.png')}}" class="img-fluid img1" alt="img" />
										</label>
									</div>
								</div>
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<label>
											<input type="radio" name="example1" value="gasoline" />
										<img src="{{ asset('public/assets/images/img2.png')}}" class="img-fluid img2" alt="img" />
										</label>
									</div>
								</div>
								<div class="col-sm-4 col-4">
									<div class="footer-icon">
										<label>
											<input type="radio" name="example1" value="maintenance" />
											<img src="{{ asset('public/assets/images/img3.png')}}" class="img-fluid img3" alt="img" />
										</label>
									</div>
								</div>
							</div>
						</div>
		        	</div>

		        	<div class="page1-btn">
		        		<a href="javascript:void(0);" class="custom-btn2" id="page2Prev-btn">Passer a la derniere etape</a>
						<a href="javascript:void(0);" class="custom-btn" id="page2Next-btn">SUIVANT</a>
					</div>
		        </div>
		    </section>
		    <!-- Page 2 Ends -->

		    <!-- Page 3 Starts -->
		    <section id="page3">
				<div class="arrival-time">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 offset-sm-1">

								<div class="row">
									
									<div class="col-sm-3 col-3">
								      <div class="arrive arri">
								        <label> ARRIVE </label>
								        <div class="sdate">03/03</div>
								        <div class="stime">5:00</div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="departure arri">
								        <label> DEPART </label>
								        <div class="sdate">03/18</div>
								        <div class="stime">5:00</div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="services arri">
								        <label> SERVICE </label>
								        <div class="service">Navette PARKME (0€)</div>
								        <div class=""> &nbsp; </div>
								      </div>
									</div>

									<div class="col-sm-3 col-3">
								      <div class="departure arri">
								        <label> TOTAL </label>
								        <div class="total-price"> € 0.00 </div>
								        <div class=""> &nbsp; </div>
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

                    		<div class="col-sm-12 col-12">
								<div class="page3-radio">

									<div class="row">
										<div class="col-sm-6 col-8">
											<form>
											  <div class="custom-control custom-radio">

											    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">

											    <label class="custom-control-label" for="customRadio">Changement pneu</label>
											  </div>

											
										</div>

										<div class="col-sm-6 col-4">
											<p>20 €</p>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 col-8">
											
											  <div class="custom-control custom-radio">

											    <input type="radio" class="custom-control-input" id="customRadio1" name="example" value="customEx">

											    <label class="custom-control-label" for="customRadio1">Vidange</label>
											  </div>

											</form>
										</div>

										<div class="col-sm-6 col-4">
											<p>20 €</p>
										</div>
									</div>
									
								</div>
							</div>

			            </div>

			            <div class="row">
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
									<p>Le cout de la prestation (<span>10E</span>) <br> est <span>paye maintenant</span></p>
			            		</div>
			            	</div>
			            	<div class="col-sm-6 p-0">
			            		<div class="black-bg">
			            			<p>Grace a la <span>facture</span> du lein de carburant<br> vous reglez <span>a votre retour</span></p>
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

		        	<div class="row">
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
		        	</div>

		        	<div class="page1-btn">
		        		<a href="javascript:void(0);" class="custom-btn2" id="page3Prev-btn">Passer a la derniere etape</a>
						<a href="javascript:void(0);" class="custom-btn">SUIVANT</a>
					</div>
		        </div>
		    </section>
		    <!-- Page 3 Ends -->
		</main>

	    <!-- JavaSrcipts -->

	    <script src="{{ asset('public/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('public/assets/js/custom.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

    </body>
</html>

<!-- <script type="text/javascript">
	
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$(document).ready(function(){
		$('#submit_date').on('click', function(e) {
	       e.preventDefault(); 
	       var start_date = $('#start_date').val();
	       var start_time = $('#arriveeTime').val();
	       var end_date = $('#end_date').val();
	       var end_time = $('#departTime').val();
	       $.ajax({

	           type: "POST",
	           url: 'cars',
	           data: {start_date:start_date, start_time:start_time, end_date:end_date, end_time:end_time},
	           success: function( msg ) {

	           	msg = JSON.parse(msg)
	           	// console.log(msg);
	           	console.log(msg.car_types);
	           	// console.log(car_types);
	           	// var html = '<section>'+msg.car_types+'</section>';
	           	document.getElementsByTagName('main')[0].innerHTML = msg.car_types;
	           	// $('.car_type').html(msg.car_types);
	               // $(document.body).prepend(html);
	           }
	       });
	   });
	});
	
</script> -->