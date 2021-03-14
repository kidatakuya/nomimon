<?php
   // データベース接続
   require_once("dbConnect.php");
   session_start();

   if(ISSET($_POST)){
      $loginData = $_POST;
      // 入力情報取得
      $_logEmail = htmlspecialchars($loginData["logEmail"]);
      $_logPassword = htmlspecialchars($loginData["logPassword"]);        // パスワードハッシュ化
      $hashPassword = hash("md5",$_logPassword);

      $result = $db->query("SELECT * FROM nomimon_userData WHERE mail='{$_logEmail}'");

      //ログイン
      if($result){
            if($result -> rowCount()){
               foreach($result as $row){
                  $_password = $row["password"];
                  $_SESSION["id"] = $row["id"];
               }
               if($_password == $hashPassword){
                  print "ログインしました。";
                  header("Location: ../home.php");
               }else{
                  print "ログイン失敗しました。";
               }
            }
      }
   }
?>