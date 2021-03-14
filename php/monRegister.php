<?php
    require_once("dbConnect.php");
    session_start();

    if(ISSET($_POST)){
        // データセット
        $newMon = $_POST["monName"];
        $id = $_SESSION["id"];

        $query = $db->query("UPDATE nomimon_userData SET monName='{$newMon}' WHERE id='{$id}';");
    }

    header("Location: ../home.php")
?>