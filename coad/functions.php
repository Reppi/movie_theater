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

function InsertTicketReserved($dbh,$ticketStrSet,$movieId,$screenId,$lastUserId,$lastCardId){
  $sql = "INSERT INTO `ticket_reserved`
  (`ticket_no`,
  `reserved_time`,
  `reserved_movieid`,
  `reserved_screenid`,
  `reserved_user_id`,
  `card_id`)
  VALUES
  (:ticket_no,
  now(),
  :movieId,
  :screenId,
  :lastUserId,
  :cardId)";
  $stmt = $dbh->prepare($sql);
  $params = array(
    ":ticket_no"=> $ticketStrSet,
    ":movieId"=>$movieId,
    ":screenId"=>$screenId,
    ":lastUserId"=>$lastUserId,
    ":cardId"=>$lastCardId
  );
  $stmt->execute($params);
  var_dump($params);
  var_dump($stmt);
  return $stmt ? TRUE : FALSE;

}

function getMovieDetailData($dbh,$movieId){
  $sql = "SELECT * FROM `movie` WHERE `movie_id` = :movieId limit 1";
  $stmt = $dbh->prepare($sql);
  $stmt->execute(array(":movieId"=>$movieId));
  $r = $stmt -> fetch();
  return $r ? $r : FALSE;
}

function InsertUserTicket($dbh,$nameSei,$nameMei,$addressPrefecture,$addressMunicipalities,$email,$userFlag){
  $sql = "INSERT INTO
  `user`
  (
    `name_sei`, `name_mei`, `address_prefecture`,
    `address_municipalities`, `email`,
    `add_day`, `delete_day`, `user_flag`)
  VALUES
  (
    :nameSei,:nameMei,:addressPrefecture,
    :addressMunicipalities,:email,
    now(),now(),:userFlag
  )";
  $stmt = $dbh->prepare($sql);
  $params = array(
    ":nameSei"=>$nameSei,
    ":nameMei"=>$nameMei,
    ":addressPrefecture"=>$addressPrefecture,
    ":addressMunicipalities"=>$addressMunicipalities,
    ":email"=>$email,
    ":userFlag"=>$userFlag
  );
  $stmt->execute($params);
  return $stmt ? TRUE : FALSE;
}

function getLastUserId($dbh){
  $sql = "SELECT
  `user_id`
  FROM
  `user`
  ORDER BY
  `user_id` DESC
  LIMIT 1";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  $r = $stmt -> fetch();
  return $r ? $r : FALSE;
}

function InsertCardTicket($dbh,$cardNumber,$validYear,$validMonth,$cardName,$userId){
  $sql = "INSERT INTO
  `card`
  (
    `card_number`, `valid_year`, `valid_month`,
    `card_name`, `user_id`,
    `created`, `modified`
  )
  VALUES
  (
    :cardNumber,:validYear,:validMonth,
    :cardName,:userId,
    now(),now()
  )";
  $stmt = $dbh->prepare($sql);
  $params = array(
    ":cardNumber"=>$cardNumber,
    ":validYear"=>$validYear,
    ":validMonth"=>$validMonth,
    ":cardName"=>$cardName,
    ":userId"=>$userId
  );
  $stmt->execute($params);
  return $stmt ? TRUE : FALSE;
}

function InsertCardTicketLastId($dbh){
  $sql = "SELECT
  *
  FROM
  card
  ORDER BY
  card_id DESC
  LIMIT 1";
  $stmt = $dbh->prepare($sql);
  $params = array();
  $stmt->execute($params);
  $r = $stmt -> fetch();
  return $r ? $r : FALSE;
}

function InsertTicketLastId($dbh){
  $sql = "SELECT
  *
  FROM
  ticket_reserved
  ORDER BY
  reserved_id DESC
  LIMIT 1";
  $stmt = $dbh->prepare($sql);
  $params = array();
  $stmt->execute($params);
  $r = $stmt -> fetch();
  return $r ? $r : FALSE;
}

function InsertFoodFlag($dbh,$foodValue,$InsertTicketLastId){
  $sql = "INSERT INTO
  `food_reserved`
  (`food_id`,
  `ticket_id`,
  `Created`,
  `Modified`)
  VALUES
  (:foodId,
  :InsertTicketLastId,
  now(),
  now())";
  $stmt = $dbh->prepare($sql);
  $params = array(
    ":foodId"=>$foodValue,
    ":InsertTicketLastId"=>$InsertTicketLastId
  );
  $stmt->execute($params);
  return $stmt ? TRUE : FALSE;
}
?>
