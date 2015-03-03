<?php

// DB Setting
define('DSN','mysql:host=localhost;dbname=hal_cinema;charset=utf8');
define('DB_USER','user');
define('DB_PASSWORD','user');

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

function getMovieList($dbh) {
  $sql = "SELECT * FROM `movie`";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $r = $stmt -> fetchAll();
  return $r ? $r : FALSE;

}

function getMovieData($dbh, $movieId){
  $sql = "SELECT * FROM `movie` WHERE `movie_id` = :movieId LIMIT 1";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":movieId", $movieId, PDO::PARAM_STR);
  $stmt->execute();
  $r = $stmt -> fetch();
  return $r ? $r : FALSE;
}

function getScheduleList($dbh,$startLimit = 0, $endLimit = 30){
  $sql = "SELECT
  m.*,
  g.`genre_name`,
  s.`start_time`,
  s.`end_time`
  FROM `schedule` AS s
  INNER JOIN
  (
    `movie` AS m
    INNER JOIN
    `genre` AS g
    ON
    m.`genre_id` = g.`genre_id`
  )
  ON
  s.`movie_id` = m.`movie_id`
  LIMIT :startLimit, :endLimit";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":startLimit", $startLimit, PDO::PARAM_INT);
  $stmt->bindParam(":endLimit", $endLimit, PDO::PARAM_INT);
  $stmt->execute();
  $r = $stmt -> fetchAll();
  return $r ? $r : FALSE;
}

function timeFormatYMD($dateTime){
  $Y = substr($dateTime,0,4);
  $m = substr($dateTime,5,2);
  $d = substr($dateTime,8,2);
  $G = substr($dateTime,-8,2);
  $i = substr($dateTime,-5,2);

  $r = $Y."/".$m."/".$d." ".$G.":".$i;
  return $r;
}
function timeFormatArray($dateTime){
  $r['Y'] = substr($dateTime,0,4);
  $r['m'] = substr($dateTime,5,2);
  $r['d'] = substr($dateTime,8,2);
  $r['G'] = substr($dateTime,-8,2);
  $r['i'] = substr($dateTime,-5,2);
  return $r;
}

function inertDataSchedule($dbh, $movieId, $startTime, $endTime){
  $sql = "INSERT INTO
  `schedule`(`start_time`, `end_time`, `movie_id`)
  VALUES
  (:startTime,:endTime,:movieId)";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":movieId", $movieId, PDO::PARAM_INT);
  $stmt->bindParam(":startTime", $startTime, PDO::PARAM_STR);
  $stmt->bindParam(":endTime", $endTime, PDO::PARAM_STR);
  $r = $stmt->execute();
  return $r ? TRUE : FALSE;
}

function updateDataSchedule($dbh, $movieId, $startTime, $endTime, $beforeStartTime, $beforeEndTime){
  $sql = "UPDATE
    `schedule`
  SET
    `start_time`=:startTime,
    `end_time`=:endTime
  WHERE
  `start_time` = :beforeStartTime
  AND
  `end_time` = :beforeEndTime
  AND
  `movie_id` = :movieId";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(":movieId", $movieId, PDO::PARAM_INT);
  $stmt->bindParam(":startTime", $startTime, PDO::PARAM_STR);
  $stmt->bindParam(":endTime", $endTime, PDO::PARAM_STR);
  $stmt->bindParam(":beforeStartTime", $beforeStartTime, PDO::PARAM_STR);
  $stmt->bindParam(":beforeEndTime", $beforeEndTime, PDO::PARAM_STR);
  $r = $stmt->execute();
  return $r ? TRUE : FALSE;
}
function deleteDataSchedule($dbh, $movieId, $beforeStartTime, $beforeEndTime){
  $sql = "DELETE
  FROM
  `schedule`
  WHERE
  `start_time` = :beforeStartTime
  AND
  `end_time` = :beforeEndTime
  AND
  `movie_id` = :movieId";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(":movieId", $movieId, PDO::PARAM_INT);
  $stmt->bindValue(":beforeStartTime", $beforeStartTime, PDO::PARAM_STR);
  $stmt->bindValue(":beforeEndTime", $beforeEndTime, PDO::PARAM_STR);
  $r = $stmt->execute();
  return $r ? TRUE : FALSE;
}
?>
