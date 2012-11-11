function addemail() {
	$('.em-itemheader').show();
	var nE = $(".new-email").val();
	$(".email-list").append("<div class='il-item item-checked'><div class='il-name'>"+nE+"</div><div class='il-spot'><input type='checkbox' name='option2' value='a2' class='il-friend'></div></div>");
	$(".email-list").css({"margin":"0px 0 20px 0"});
	$(".email-list .il-name").click(function() {
	  	$(this).parent().remove();
	  	var S = $(".email-list .il-item").length;
	  	if (S == '0') $('.em-itemheader').hide();
	});	
}

function clickemail() {
	$(".b-email").click(function() {
		$(".changeemailbox").remove();
		$(this).parent().parent().append("<div class='changeemailbox'><p>Would you like to send the invitation to <a href='#'>some@domain.com</a>?</p><div class='email-buttons'><button type='button' class='btn btn-success b-emailok' onClick='okemail();'>Yes</button><button type='button' class='btn  b-emailchange' onClick='changeemail();'>Change</button></div></div>");
	});	
}

function okemail() {
	$(".b-emailok").parent().parent().remove();
}

function changeemail() {
	$(".b-emailok").parent().parent().html("<p>Please, input a new email</p><input type='email' class='ch-email'><div class='email-buttons'><button type='button' class='btn btn-success b-emailok' onClick='okemail();'>Save</button></div");	
}

function hoverdesc() {
	$(".desc-text").parent().mouseenter(function() {
		$(this).append("<div class='edit-opt'><span class='pencil'></span>edit</div>");
	});
	$(".desc-text").parent().mouseleave(function() {
		$(".edit-opt").remove();
	});
	
	$(".desc-text").parent().click(function() {
		Desc = $(".desc-text").text();
		$(this).parent().append("<textarea class='desc-textarea'>"+Desc+"</textarea><div class='desc-buttons'><button type='button' class='btn b-textc' onClick='closedesc();'>Close</button><button type='button' class='btn btn-success b-textch' onClick='savedesc();'>Save</button></div>");
		$(this).remove();
	});
}

function closedesc() {
	$(".b-textc").parent().parent().append("<div class='invite-desc edit'><div class='desc-text'><p>"+Desc+"</p></div></div>");
	$(".desc-textarea").remove();
	$(".b-textc").parent().remove();
	hoverdesc();
}
	
function savedesc() {
	var aT = $(".desc-textarea").val();
	$(".b-textc").parent().parent().append("<div class='invite-desc edit'><div class='desc-text'><p>"+aT+"</p></div></div>");
	$(".desc-textarea").remove();
	$(".b-textc").parent().remove();
	hoverdesc();
}

$(document).ready( function() {
	  
	hoverdesc();
	clickemail();	
	
	$(".il-name").click(function() {
		if ($(this).parent().hasClass('item-checked')) {
  			$(this).parent().removeClass('item-checked');
			$(this).parent().children('.il-fb').children().children().removeClass("active");
		}
  		else {
  			$(this).parent().addClass('item-checked');
			$(this).parent().children('.il-fb').children().children(".b-fb").addClass("active");
		}
 		
	});
	
	$(".event-img").mouseenter(function() {
	    	$(this).append("<div class='edit-opt'><span class='pencil'></span>edit</div>");
      });
	$(".event-img").mouseleave(function() {
	    	$(".edit-opt").remove();
      });

	$(".il-friend .btn").click(function() {
		$(this).parent().parent().parent().addClass('item-checked');
	});
	
	$(".invite-filter").keyup(function() {
		var inpText = $(".invite-filter").val();
		var inpSize = $(".invite-filter").val().length;
		if (inpSize >= '3') {
			$(".il-item").hide();
    		$(".il-name").each(function() {
				var newText = $(this).text().split(" ").join("</span> <span>");
				newText = "<span>" + newText + "</span>";
  				$(this).html( newText ).find(":contains("+inpText+")").parent().parent().show();
			});
			$(".invite-filter").keydown(function() {
			 	
			});
		}
		if (inpSize < '3') {
			$(".il-item").show();
		}
  	});
	
	$('.b-invite').button();
	
	$('.il-spot a').tooltip();
	$('.cvc-info').tooltip();
	
	
	$(".open-limits").click(function() {
	  $('.invite-limits').slideToggle();
    });
	
	$(".open-email").click(function() {
	  $('.invite-f-email').slideToggle();
    });
	
	$(".b-invite").click(function () {
      window.location = "event-wall.html";
    });
	
	$(".b-maybe").click(function () {
      window.location = "event-wall-maybe.html";
    });
	
	$(".b-no").click(function () {
      window.location = "event-wall.html";
    });
	
	$('#element').tooltip('show');
	
	$(".topmenu").mouseenter(function() {
	  $(this).stop().animate({
	    top: 0,
	  }, 400);
    });
	
	$(".topmenu").mouseleave(function() {
	  $(this).stop().animate({
	    top: -40,
	  }, 400);
    });
	
	
});