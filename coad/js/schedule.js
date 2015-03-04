$(function(){



	$(".week").click(function(){
		var dayplus = $(this).attr("id");
			$("#inmask").val(dayplus);
			$('#mask').submit();
	});

	$(".gogo").click(function(){
		$(".go_ticket").submit();
	});

});
