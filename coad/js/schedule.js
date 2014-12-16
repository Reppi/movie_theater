$(function(){

$(".week").click(function(){
	var dayplus = $(this).attr("id");
	location.href="schedule.php?id="+dayplus;
});

});


