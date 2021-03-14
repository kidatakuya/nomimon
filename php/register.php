<?php
    // データベース接続
    require_once("dbConnect.php");
    session_start();

    // 入力情報の取得
    if(ISSET($_POST)){
        $newUserData = $_POST;
        $newEmail = htmlspecialchars($newUserData["mail"]);
        $password = htmlspecialchars($newUserData["pass"]);
        // パスワードのハッシュ化
        $newPassword = hash("md5",$password);

        print $newPassword;

        $db->query("INSERT INTO `nomimon_userData`(`mail`, `password`, `monName`, `stylish`, `cute`, `cool`, `animal`, `accessory`) VALUES ('{$newEmail}','{$newPassword}','default',0,0,0,'nomimon','');");


        // 登録したユーザーデータのIDを赤署にセット
        $result = $db->query("SELECT * FROM nomimon_userData WHERE mail='{$newEmail}'");
            if($result){
                if($result -> rowCount()){
                foreach($result as $row){
                    $_SESSION["id"] = $row["id"];
                }
            }
        }
    }

    header("Location: ../character_name.html")
?>