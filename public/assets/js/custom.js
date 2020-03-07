function init(){
	new SmoothScroll(document,120,12)
}

function SmoothScroll(target, speed, smooth) {
	if (target === document)
		target = (document.scrollingElement 
              || document.documentElement 
              || document.body.parentNode 
              || document.body) // cross browser support for document scrolling
      
	var moving = false
	var pos = target.scrollTop
  	var frame = target === document.body 
              && document.documentElement 
              ? document.documentElement 
              : target // safari is the new IE
  
	target.addEventListener('mousewheel', scrolled, { passive: false })
	target.addEventListener('DOMMouseScroll', scrolled, { passive: false })

	function scrolled(e) {
		e.preventDefault(); // disable default scrolling

		var delta = normalizeWheelDelta(e)

		pos += -delta * speed
		pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)) // limit scrolling

		if (!moving) update()
	}

	function normalizeWheelDelta(e){
		if(e.detail){
			if(e.wheelDelta)
				return e.wheelDelta/e.detail/40 * (e.detail>0 ? 1 : -1) // Opera
			else
				return -e.detail/3 // Firefox
		}else
			return e.wheelDelta/120 // IE,Safari,Chrome
	}

	function update() {
		moving = true
    
		var delta = (pos - target.scrollTop) / smooth
    
		target.scrollTop += delta
    
		if (Math.abs(delta) > 0.5)
			requestFrame(update)
		else
			moving = false
	}

	var requestFrame = function() { // requestAnimationFrame cross browser
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(func) {
				window.setTimeout(func, 1000 / 50);
			}
		);
	}()
}

// $(function () { $("#arrivalDate,#departureDate").datepicker({ minDate: 0 }) });
$(function () {
    $("#arrivalDate, #expiryDate").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        yearRange: new Date().getFullYear().toString() + ':' + new Date().getFullYear().toString(),
        onClose: function (selectedDate) {
            $("#departureDate").datepicker("option", "minDate", selectedDate);
        }
    });
    $("#departureDate").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        yearRange: new Date().getFullYear().toString() + ':' + new Date().getFullYear().toString(),
        onClose: function (selectedDate) {
            $("#arrivalDate").datepicker("option", "maxDate", selectedDate);
        }
    });
});


/* Page 2 Grey Circle show hide boxes starts here*/

$(".box2,.box3").hide();
$(".box1").show();

$(".img1").click(function(){
  $(".box1").show();
  $(".box2,.box3").hide();
});

$(".img2").click(function(){
  $(".box2").show();
  $(".box1,.box3").hide();
});

$(".img3").click(function(){
  $(".box3").show();
  $(".box1,.box2").hide();
});

/* Page 2 Grey Circle show hide boxes ends here*/

/* Index button css starts here */

$("#page1, #page2, #page3, #page4, #arrivalError, #departError, #essenceError").hide();
$("#index").show();

$("#index-btn").click(function(){

if($("#arrivalDate").val() == "") {
	$("#arrivalError").show();
}
if($("#departureDate").val() == ""){
	$("#departError").show();
}
if($("#arrivalDate").val() != "") {
	$("#arrivalError").hide();
}

if($("#departureDate").val() != ""){
	$("#departError").hide();
}
if($("#departureDate").val() != "" && $("#arrivalDate").val() != ""){
	setSelectedValues();
  $("#page1").show();
  $("#page2,#page3,#index").hide();
  $("body").addClass("inner-bg");
  $("body").removeClass("bg-img");
  $(".navbar").addClass("inner-custom-navbar");
  $(".navbar").removeClass("custom-navbar");
}

});



/* Index button css ends here */

function setSelectedValues(){
	// document.getElementById("arrive_date").innerHTML = $("#arrivalDate").val();
	// document.getElementById("arrive_time").innerHTML = $("#arriveeTime").val();
	// document.getElementById("depart_date").innerHTML = $("#departureDate").val();
	// document.getElementById("depart_time").innerHTML = $("#departTime").val();
	// console.log($("input[name='service_type']:checked").val());
	// $('.setServiceType').innerHTML = $("input[name='service_type']:checked").val();
	console.log();
	$('.sdate').html( $("#arrivalDate").val());
	$('.stime').html( $("#arriveeTime").val());
	$('.edate').html( $("#departureDate").val());
	$('.etime').html($("#departTime").val());
	$('.setServiceType').html($("input[name='service_type']:checked").val());
	//total price 
	$price = $("input[name='service']:checked").val();
	if($price){
    console.log($price);
    // console.log($price.split('-')[-1]);
    console.log($price.split('-')[0]);
    // console.log($price.split('-')[1]);
    // console.log($price.split(' ')[1]);
    // console.log($price.split(' ')[0]);
    $('.final_sevice').html($price.split('-')[0]);
		$price = $price.split('-')[1];
		$('.total-price').html('€'+$price);

    
    $('.final_sevice_price').html('€'+$price);

	}

}

// Change on Service radio button
$('input[type=radio][name=service]').change(function() {
  setSelectedValues();
});

/* Page 1 button css starts here */

$("#page1Next-btn").click(function(){
	setSelectedValues();
  $("#page2").show();
  $("#index,#page1,#page3").hide();
});

$("#page1Prev-btn").click(function(){
  $("#index").show();
  $("#page1,#page2,#page3").hide();
  $("body").removeClass("inner-bg");
  $("body").addClass("bg-img");

  $(".navbar").removeClass("inner-custom-navbar");
  $(".navbar").addClass("custom-navbar");
});

/* Page 1 button css ends here */

/* Page 2 button css starts here */

// $("#page2Next-btn").click(function(){
// 	setSelectedValues();
//   $("#page3").show();
//   $("#index,#page1,#page2").hide();
// });

$("#page2Next-btn").click(function(){

    if($('input:radio[name=service]').is(':not(:checked)')){
     $("#essenceError").show();
    }

    if($('input:radio[name=service_type]').is(':not(:checked)')){
      $("#essenceError").html('Service type is not selected');
      $("#essenceError").show();
     }

    if($('input:radio[name=service]').is(':checked') && $('input:radio[name=service_type]').is(':checked')){
      setSelectedValues();
      $("#page3").show();
      console.log($('.setServiceType').text($("input[name='service_type']:checked").val()));
      $("#index,#page1,#page2").hide();
    }
});

$("#page2Prev-btn").click(function(){
  $("#page1").show();
  $("#index,#page2,#page3").hide();
});

/* Page 2 button css starts here */

/* Page 3 button css starts here */

$("#page3Next-btn").click(function(){
  $("#page4").show();
  $("#index,#page1,#page2,#page3").hide();
});

$("#page3Prev-btn").click(function(){
  $("#essenceError").hide();
  $("#page2").show();
  $("#index,#page1,#page3").hide();
});

/* Page 3 button css ends here */

/* Page 4 button css starts here */

$("#page4Prev-btn").click(function(){
  $("#page3").show();
  $("#index,#page1,#page2,#page4").hide();
});

/* Page 4 button css ends here */


/*Credit Card Form Validation start here*/
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
/*Credit card form validation ends here*/

/*Owl COursel start here*/
$(document).ready(function () {
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
 	dotsEach: true,
 	nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
});

/*Owl Coursel ends here*/