<?php
	error_reporting(E_ALL & ~E_NOTICE);
	//ここからはりつける

	//POST受け取り
    if(isset($_POST["month"])){
       $month = $_POST["month"];
    }

	$host_name = "localhost";
	$dbms_user = "user";
	$dbms_pass = "user";

	$con = mysql_connect($host_name,$dbms_user,$dbms_pass);
	mysql_query("SET NAMES utf8");

	mysql_select_db("hal_cinema",$con);

	//reserved_time SQL
	//$sql = "SELECT reserved_time as rtime FROM ticket_reserved";

	//チケットSQL
	//$sql = "SELECT * FROM ticket_reserved WHERE ".substr($reserved_time, 6, 2)."reserved_time";

	$sql = "SELECT COUNT(reserved_movieid) AS movie FROM ticket_reserved WHERE DATE_FORMAT(reserved_time, '%m')=$month GROUP BY reserved_movieid";
	$result = mysql_query($sql,$con);
	$booking_human = array();
	$cnt = 0;
	while($reserved = mysql_fetch_array($result)){
		$booking_human[$cnt] = $reserved["movie"];
		$cnt++;
	}
	//タイトルSQL
	$sql = "SELECT movie.movie_title FROM ticket_reserved INNER JOIN movie ON ticket_reserved.reserved_movieid = movie.movie_id GROUP BY movie_title";
	//SQL実行
	$result = mysql_query($sql,$con);
	$cnt = 0;
	$movie_title = array();
	while($reserved = mysql_fetch_array($result)){
		$movie_title[$cnt] = $reserved["movie_title"];
		$cnt++;
	}



	require("fpdf/mbfpdf.php");
	$pdf = new MbfPDF('P','pt','A4');
	$pdf -> addPage();

	$pdf -> addMbFont(PMINCHO,'SJIS');
	$pdf -> setFont(PMINCHO,'',16);
	$pdf -> write( 30 , $month."月の予約は" );
	$pdf -> Ln( 20 );

	for($i=0; $i<$cnt; $i++){
	$movie_title[$i] = mb_convert_encoding($movie_title[$i],"SJIS");

	$pdf -> Ln( 20 );
	$pdf -> write( 20 , $movie_title[$i]."の予約数は　" );
	if($booking_human[$i] < 1 ){
	$booking_human[$i] = 0;
	}
	$pdf -> write( 20 , $booking_human[$i]."件です" );
}

	$pdf -> output("test.pdf","I");	
?>