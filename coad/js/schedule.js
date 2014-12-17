$(function(){



	$(".week").click(function(){
		var dayplus = $(this).attr("id");
		$("#slider").slideUp("slow", function(){
			//インマスクにデータを送り見えない状態にする
			$("#inmask").val(dayplus);	
			$('#mask').submit();
		});

	});

	$(".time ul li").click(function(){
		$("#go_ticket").submit();
	});

});



