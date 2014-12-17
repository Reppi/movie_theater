<?php

// DB Setting
define('DSN','mysql:host=localhost;dbname=hal_cinema;charset=utf8');
define('DB_USER','root');
define('DB_PASSWORD','');

function connectDb() {
  try {
    return new PDO(DSN, DB_USER, DB_PASSWORD);
  } catch(PDOException $e) {
    echo $e->getMessage();
    exit;
  }
}

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}


function getTicketData($dbh){
  $sql = "SELECT * FROM `ticket`";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array());
  $r = $stmt -> fetchAll();
  return $r ? $r : FALSE;
}
function getFoodData($dbh){
  $sql = "SELECT * FROM `food`";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array());
  $r = $stmt -> fetchAll();
  return $r ? $r : FALSE;
}
function getMovieData($dbh){
  $sql = "SELECT * FROM `movie`";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array());
  $r = $stmt -> fetchAll();
  return $r ? $r : FALSE;
}
function getTargetMovieData($dbh, $targetId){
  $sql = "SELECT * FROM `movie` WHERE `movie_id` = :targetId";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array("targetId"=>$targetId));
  $r = $stmt -> fetch();
  return $r ? $r : FALSE;
}

function InsertTicketReserved($dbh,$ticketStrSet,$movieId,$screenId){
  $sql = "INSERT INTO `ticket_reserved`
  (`ticket_no`, `reserved_time`, `reserved_movieid`, `reserved_screenid`)
  VALUES
  (:ticket_no,now(),:movieId,:screenId)";
  $stmt = $dbh->prepare($sql);
  $params = array(":ticket_no"=> $ticketStrSet,":movieId"=>$movieId,":screenId"=>$screenId);
  $stmt->execute($params);
  return $stmt ? TRUE : FALSE;
}

?>