<?php

require_once("dbConnect.php");
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
            if($row["stylish"] >= 100 || $row["cute"] >= 100 || $row["cool"] >= 100){
               $db->query("UPDATE `nomimon_userData` SET `animal`='owl' WHERE `ID` = '{$id}'");
               // print "あああ";
               header('Location: ../get_evolve.php');
            }
            else{
               // print "失敗";
               header('Location: ../home.php');
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
