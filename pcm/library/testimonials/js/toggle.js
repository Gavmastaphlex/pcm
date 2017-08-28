/*
		To add a new toggle caption in, make sure you add in every other button so that it hides when another button is clicked
*/


$(document).ready(function(){


	/*------------Education-----------*/
	$("#education-1").click(function(){
        $('#education-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#education-1-name').hide();
	});

	$("#education-2").click(function(){
        $('#education-2-name').slideToggle();

	});

	$("#culture-1,#culture-2,#education-1,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#education-2-name').fadeOut();
	});
	
	/*-------------Personal--------------*/
	$("#personal-1").click(function(){
        $('#personal-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#personal-1-name').fadeOut();
	});

	$("#personal-2").click(function(){
        $('#personal-2-name').slideToggle();

	});
	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#personal-2-name').fadeOut();
	});

	/*-------------profesional--------------*/
	$("#professional-1").click(function(){
        $('#professional-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#professional-1-name').fadeOut();
	});

	$("#professional-2").click(function(){
        $('#professional-2-name').slideToggle();

	});
	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#professional-2-name').fadeOut();
	});

	$("#professional-3").click(function(){
        $('#professional-3-name').slideToggle();

	});
	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#professional-3-name').fadeOut();
	});


	/*-------------self--------------*/
	$("#self-1").click(function(){
        $('#self-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#self-1-name').fadeOut();
	});

	$("#self-2").click(function(){
        $('#self-2-name').slideToggle();

	});
	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#self-2-name').fadeOut();
	});

	/*-------------leadership-------------*/
	$("#leadership-1").click(function(){
        $('#leadership-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#leadership-1-name').fadeOut();
	});
	/*-------------culture-------------*/
	$("#culture-1").click(function(){
        $('#culture-1-name').slideToggle();
	});

	$("#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#culture-1-name').fadeOut();
	});

	$("#culture-2").click(function(){
        $('#culture-2-name').slideToggle();
	});

	$("#culture-1,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#culture-2-name').fadeOut();
	});
	/*-------------team-------------*/
	$("#team-1").click(function(){
        $('#team-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-2,#team-3,#team-4").click(function(){
   		$('#team-1-name').fadeOut();
	});

	$("#team-2").click(function(){
        $('#team-2-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-3,#team-4").click(function(){
   		$('#team-2-name').fadeOut();
	});
	
	$("#team-3").click(function(){
        $('#team-3-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-4").click(function(){
   		$('#team-3-name').fadeOut();
	});

	$("#team-4").click(function(){
        $('#team-4-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3").click(function(){
   		$('#team-4-name').fadeOut();
	});
	/*-------------sport-------------*/
	$("#sport-1").click(function(){
        $('#sport-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#sport-1-name').fadeOut();
	});
	/*-------------teaching-------------*/
	$("#teaching-1").click(function(){
        $('#teaching-1-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#teaching-1-name').fadeOut();
	});

	$("#teaching-2").click(function(){
        $('#teaching-2-name').slideToggle();
	});

	$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#personal-2,#professional-1,#professional-2,#professional-3,#self-1,#self-2,#sport-1,#teaching-1,#team-1,#team-2,#team-3,#team-4").click(function(){
   		$('#teaching-2-name').fadeOut();
	});


});










