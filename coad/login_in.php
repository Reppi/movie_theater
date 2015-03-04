<?php
//データベースに接続
$host_name = "localhost";
$dbms_user = "user";
$dbms_pass = "user";

$con = mysqli_connect($host_name,$dbms_user,$dbms_pass);
mysqli_query($con,"SET NAMES utf8");

 mysqli_select_db($con,"hal_cinema");

$user_id = $_POST['user_id'];
$password = $_POST['password'];

//データ未入力チェック
  if (strlen($user_id)==0){
    echo "IDが未入力です";
  }
  else if(strlen($password)==0){
    echo "パスワードが未入力です";
  }
  else{
     $sql="SELECT * FROM user where user_custom_id='$user_id' AND password='$password'";
     $result=mysqli_query($con,$sql);

     if($row = mysqli_fetch_array($result)){
        //認証成功なら、セッションIDを新規に発行する
        // セッション開始
        session_start();
        session_regenerate_id(true);
        $_SESSION["USERID"] = $_POST["user_id"];
        header("Location: index.php");
        exit;
    }
    else {
      // 認証失敗
      $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
    }

  }

// データベースの切断
    mysqli_close($con);
?>
