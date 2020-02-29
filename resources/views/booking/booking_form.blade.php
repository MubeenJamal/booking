<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Alegreya:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400" rel="stylesheet">

	<!-- Bootstrap -->
	<!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" /> -->

	<!-- Custom stlylesheet -->
	<!-- <link type="text/css" rel="stylesheet" href="css/style.css" /> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form action="" method="post" id="bookingForm">
							<meta name="csrf-token" content="{{ csrf_token() }}" />
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-header">
										<h2>Book Now</h2>
									</div>
								</div>
								<div class="col-md-7">
									<div class="row no-margin">
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Check In</span>
												<input class="form-control" type="date" name="start_date" id="start_date">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">check in time</span>
												<select class="form-control" name="start_time" id="start_time">
													<option>1</option>
													<option>2</option>
													<option>3</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<span class="form-label">Check out</span>
												<input class="form-control" type="date" name="end_date" id="end_date">
											</div>
										</div>
										
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">check out time</span>
												<select class="form-control" name="end_time" id="end_time">
													<option>0</option>
													<option>1</option>
													<option>2</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-btn">
										<button class="submit-btn" type="submit">Check availability</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$(document).ready(function(){
		$('#bookingForm').on('submit', function(e) {
	       e.preventDefault(); 
	       var start_date = $('#start_date').val();
	       var start_time = $('#start_time').val();
	       var end_date = $('#end_date').val();
	       var end_time = $('#end_time').val();
	       $.ajax({

	           type: "POST",
	           url: 'create_booking_details',
	           data: {start_date:start_date, start_time:start_time, end_date:end_date, end_time:end_time},
	           success: function( msg ) {
	               alert( msg );
	           }
	       });
	   });
	});
	
</script>