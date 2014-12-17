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

?>