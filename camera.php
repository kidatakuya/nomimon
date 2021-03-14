<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <script src="https://unpkg.com/vue@2.6.10/dist/vue.min.js"></script>
   <script src="https://unpkg.com/vue-qrcode-reader@2.0.3/dist/vue-qrcode-reader.browser.js"></script>
   <!-- <link rel="stylesheet" href="https://unpkg.com/vue-qrcode-reader@2.0.3/dist/vue-qrcode-reader.css"></head> -->
   <link rel="stylesheet" href="css/index.css"></head>
   <body>
      <div id="app">
         <p>
         Last result:
         </p>
         <p id="QRcontent">
         {{ decodedContent }}
         </p>

         <form action="#" method="POST" enctype="multipart/form-data">
            <input type="text" name="stylish" id="QRtext" value="nomi">
            <input type="submit" name="submitQR" id="submitQR" value="送信">
         </form>
         <button type="button" id="next">次へ</button>
         <p id="count">30</p>

         <p class="error">
         {{ errorMessage }}
         </p>
   
         <qrcode-stream @decode="onDecode" @init="onInit"></qrcode-stream>
      </div>
   </body>
   <script src="js/qrConfirm.js"></script>
   <script src="js/qrcamera.js"></script>
   <script src="js/qrcontent.js"></script>
</html>

<?php

require_once("php/dbConnect.php");
session_start();
$id = $_SESSION["id"];


print $id;


   if(ISSET($_POST['submitQR'])){
      // DBに保存
      $stylish =$_POST["stylish"];
      $st = explode (",", $stylish);
      $stylish = $st["0"];
      $cute = $st["1"];
      $cool = $st["2"];

      $result = $db->query("SELECT stylish,cute,cool FROM nomimon_userData WHERE id='{$id}'");

      if($result -> rowCount()){
         foreach($result as $row){
            $newStylish = $row["stylish"];
            $newCute = $row["cute"];
            $newCool = $row["cool"];
            $newStylish += intval($stylish);
            $newCute +=intval($cute);
            $newCool += intval($cool);
         }
      }
      


   
      
      $query = $db->query("UPDATE nomimon_userData SET stylish='{$newStylish}',cute='{$newCute}',cool='{$newCool}' WHERE id='{$id}';");
      if($query) {
            $result = $db->query("SELECT `stylish`, `cute`, `cool` FROM `nomimon_userData` WHERE id = '{$id}' ");
            if($result -> rowCount()){
               foreach($result as $row){
                  $newStylish = $row["stylish"];
                  $newCute = $row["cute"];
                  $newCool = $row["cool"];
               }
            if($row["stylish"] > 100 || $row["cute"] >100 || $row["cool"] > 100){
               $db->query("UPDATE `nomimon_userData` SET `animal`='dog' WHERE `ID` = '{$id}'");
               print "あああ";
            }
            else{
               print "失敗";
            }
               


            // echo "
            //    <script>
            //    alert(\"登録しました。\");
            //    </script>";å
            // echo"<script>location.href='http://localhost/nomimon-test/send%20to%20database%202/camera.php'</script>";
               exit;
            }
            else {
               //失敗した場合
               echo "
               <script>
               alert(\"登録を失敗しました。\");
               </script>";
               return false;
         }
   }
}

?>