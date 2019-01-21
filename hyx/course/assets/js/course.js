/**
 * 
 */
$(function(){
    $(".toggle dl dt").click(function(){
    	if($(".toggle dl dt").hasClass("currents")){
    		$(".toggle dl dt").removeClass("currents");
    		$(this).next().slideToggle(500);
    		if($(this).find('i').hasClass("fa-minus-square")){
    			$(this).find('i').removeClass("fa-minus-square");
    			$(this).find('i').addClass("fa-plus-square");
    		}else{
    			$(this).find('i').removeClass("fa-plus-square");
    			$(this).find('i').addClass("fa-minus-square");
    		}
    		$(this).addClass("currents");
    	}else{
    		$(".toggle dl dt").removeClass("currents");
    	    $(this).next().slideToggle(500);
    	    $(this).find('i').removeClass("fa-minus-square");
    	    $(this).find('i').addClass("fa-plus-square");
    		$(this).addClass("currents");
    	}
    });
    
    $("#categoryid").change(function(){
      var _cat = $("#categoryid").val();
      if(_cat == 'Lab'){
        	$('.Lab').show();
        	$('.Unit').hide();
      } else if(_cat == 'Unit'){
        	$('.Unit').show();
        	$('.Lab').hide();
      } else {
        	$('.Unit').show();
        	$('.Lab').show();
      }
        //$('#formsearch').submit();
    });
});

