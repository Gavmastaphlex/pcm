$(document).ready(function() {

	/*

	When adding a new video add in the speaker and the id of the speech's button to be changed to the color red. 
	Also make sure you add it into every other line of code to turn it black once the button has been clicked else where.

	*/

	//adele 
	$("#personal-1, .myvideopeople").click(function(){ 
 		$(".myvideopeople, #personal-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople2,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});
	$("#team-2").click(function(){ 
 		$(".myvideopeople, #team-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-3,#team-4,.myvideopeople2,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	//william 
	$("#personal-2").click(function(){ 
 		$(".myvideopeople2, #personal-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});
	$("#professional-2").click(function(){ 
 		$(".myvideopeople2, #professional-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});
	$("professional-3").click(function(){ 
 		$(".myvideopeople2, #professional-3").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});
 	$("#teaching-1").click(function(){ 
 		$(".myvideopeople2, #teaching-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	$("#team-3").click(function(){ 
 		$(".myvideopeople2, #personal-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-4,.myvideopeople,.myvideopeople3,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	//wayne
 	 $("#leadership-1").click(function(){ 
 		$(".myvideopeople3, #leadership-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	 $("#professional-1").click(function(){ 
 		$(".myvideopeople3, #professional-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	 $("#self-1").click(function(){ 
 		$(".myvideopeople3, #self-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	 $("#self-2").click(function(){ 
 		$(".myvideopeople3, #self-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	 $("#sport-1").click(function(){ 
 		$(".myvideopeople3, #sport-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	 $("#teaching-2").click(function(){ 
 		$(".myvideopeople3, #teaching-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople4,.myvideopeople5").css("color","black");
 	});

 	 //anthony

 	 $("#culture-1").click(function(){ 
 		$(".myvideopeople4, #culture-1").css("color","red");
 		$("#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople3,.myvideopeople5").css("color","black");
 	});

 	  $("#culture-2").click(function(){ 
 		$(".myvideopeople4, #culture-2").css("color","red");
 		$("#culture-1,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople3,.myvideopeople5").css("color","black");
 	});

 	 $("#education-1").click(function(){ 
 		$(".myvideopeople4, #education-1").css("color","red");
 		$("#culture-1,#culture-2,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople3,.myvideopeople5").css("color","black");
 	});

 	  $("#education-2").click(function(){ 
 		$(".myvideopeople4, #education-2").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople3,.myvideopeople5").css("color","black");
 	});

 	 $("#team-1").click(function(){ 
 		$(".myvideopeople4, #team-1").css("color","red");
 		$("#culture-1,#culture-2,#education-1,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-2,#team-3,#team-4,.myvideopeople,.myvideopeople2,.myvideopeople3,.myvideopeople5").css("color","black");
 	});

 	 $(".myvideopeople, .myvideopeople2, .myvideopeople3, .myvideopeople4 ").click(function(){ 
 		$("#culture-1,#culture-2,#education-1,#education-2,#leadership-1,#personal-2,#personal-1,#professional-3,#professional-1,#professional-2,#self-1,#self-2,#sport-1,#teaching-1,#teaching-2,#team-1,#team-2,#team-3,#team-4").css("color","black");
 	});
  
});










