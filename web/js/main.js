
$(document).ready( function() {

	$(".number").spinner({
	  min: 0,
	  max: 100,
	});
	
	$(".number-wrap").hover(function() {
		var Price = $(".priceevent").html();
		var Num = $(".number").val();
		var Sum = Num*Price;
		$(".price").html(Sum);
    });
	
	$('.b-invite').button();
	
	$('.il-spot a').tooltip();
	$('.cvc-info').tooltip();
	
	
	$(".open-limits").click(function() {
	  $('.invite-limits').toggle('slow');
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
	
	$(".b-join").click(function() {
	  $(".result").html("<span class='accepted'>Thank You. You was accepted.</span>");
    });
	
	
	$(".friend").mouseover( function(){
      alert("123");
    });
	
	
	$(".friend").change(function() {
		$(this).parent().remove(); 
    });
	
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
	
	$(function() {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $( ".choose-friend" ).autocomplete({
            source: availableTags,
			
			select: function(event, ui) {
				var fr = ui.item.value;
				$(".friends-result").prepend("<div class='friendchecked-wrap'><span class='friendchecked'>"+fr+"</span><input type='checkbox' name='option2' value='a2' class='friend' checked='checked' onClick='$(this).prev().addClass(\"lineincenter\");'></div>");
	    	}
        });
    });

});