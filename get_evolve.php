<?php 
  define("pagePath","get_evolve/");
  define("title","キャラが進化しました");
  require_once "head.php";

// - - - - - - - - - - - - - - - - - - -
// - - - - - - - - - - - - - - - - - - -
// - - - - - - - - - - - - - - - - - - -

require_once("php/dbConnect.php");
session_start();
$id = $_SESSION["id"];

//   print $id;
//   print_r($_SESSION);

$instance = mysqli_connect("localhost", "murayamam", "eccMyAdmin", "murayamam");
if($instance){
   mysqli_set_charset($instance,"utf8");
   $sql = "SELECT * FROM nomimon_userData WHERE id = '{$id}'";
   $response = mysqli_query($instance,$sql);
   if($response){
      $result = [];
      while($row=mysqli_fetch_assoc($response)){
         $result = $row;
       //   print_r ($row);
      }
   }
}

//= = = = = = = = = = = = = = = = = = = = =
// データベースから数値を取る
//= = = = = = = = = = = = = = = = = = = = =

$stylish = $result["stylish"];
$cute = $result["cute"];
$cool = $result["cool"];

//= = = = = = = = = = = = = = = = = = = = =
// imgパス
//= = = = = = = = = = = = = = = = = = = = =
$level = [];
if($stylish>=300 || $cute>=300 || $cool>=300)
{
   $level = 3;
}
elseif($stylish>=200 || $cute>=200 || $cool>=200)
{
   $level = 2;
}
elseif($stylish>=100 || $cute>=100 || $cool>=100)
{
   $level = 1;
}
elseif($stylish<=100 && $cute<=100 && $cool<=100)
{
   $level = 0;
}

$levelx = [];
if($stylish<=100 && $cute<=100 && $cool<=100)
{
   $levelx = "_0";
}
elseif($stylish>=300 || $cute>=300 || $cool>=300)
{
   $levelx = "_3";
}
elseif($stylish>=200 || $cute>=200 || $cool>=200)
{
   $levelx = "_2";
   
}
elseif($stylish>=100 || $cute>=100 || $cool>=100)
{
   $levelx = "_1";
   
}
//   print $levelx;


$style = [];
if( $stylish >= $cute && $stylish >= $cool && $stylish >= 100){
   $style = "_stylish";
}
elseif( $cute >= $stylish && $cute >= $cool && $cute >= 100){
   $style = "_cute";
}
elseif( $cool >= $stylish && $cool >= $cute && $cute >= 100){
   $style = "_cool";
}
elseif( $cool <= 100 && $cool <= 100 && $cute <= 100){
 $style = "";
}

//= = = = = = = = = = = = = = = = = = = = =
// 数値の表示
//= = = = = = = = = = = = = = = = = = = = =


$stylishDisplay = [];
$cuteDisplay = [];
$coolDisplay = [];
if($level==0){
   $stylishDisplay = 100 - $stylish;
   $cuteDisplay = 100 - $cute;
   $coolDisplay = 100 - $cool;
}
elseif($level==1){
   $stylishDisplay = 200 - $stylish;
   $cuteDisplay = 200 - $cute;
   $coolDisplay = 200 - $cool;
}
elseif($level==2){
   $stylishDisplay = 300 - $stylish;
   $cuteDisplay = 300 - $cute;
   $coolDisplay = 300 - $cool;
}
elseif($level==3){
   $stylishDisplay = 400 - $stylish;
   $cuteDisplay = 400 - $cute;
   $coolDisplay = 400 - $cool;
}

$stylishPercent = [];
$cutePercent = [];
$coolPercent = [];
if($level==0){
   $stylishPercent = (1-($stylishDisplay / 100))*100;
   $cutePercent = (1-($cuteDisplay / 100))*100;
   $coolPercent = (1-($coolDisplay / 100))*100;
}
elseif($level==1){
   $stylishPercent = (1-($stylishDisplay / 200))*100;
   $cutePercent = (1-($cuteDisplay / 200))*100;
   $coolPercent = (1-($coolDisplay / 200))*100;
}
elseif($level==2){
   $stylishPercent = (1-($stylishDisplay / 300))*100;
   $cutePercent = (1-($cuteDisplay / 300))*100;
   $coolPercent = (1-($coolDisplay / 300))*100;
}
elseif($level==3){
   $stylishPercent = (1-($stylishDisplay / 400))*100;
   $cutePercent = (1-($stylishDisplay / 400))*100;
   $coolPercent = (1-($stylishDisplay / 400))*100;
}



// - - - - - - - - - - - - - - - - - - -
// - - - - - - - - - - - - - - - - - - -
// - - - - - - - - - - - - - - - - - - -



?>
  <body class="body">
    <div class="layout">
        <header class="header">
          <div class="header__container">
            <h1 class="header__heading bounce"><img src="<?= imgPath ?>txt-omedetou.svg" alt="おめでとうございます"></h1>
          </div>
        </header>
        <main class="main">
          <div class="main__container">
            <div class="get-evolve">
              <img src="<?= imgPath ?>ico-decoCircle2.svg" alt="">
              <img src="<?= imgPath ?><?= $result["animal"]?><?= $levelx ?><?= $style?><?= $result["accessory"]?>.png" alt="" style="position:absolute; width: 200px; top: 50%; margin-top: -80px; left: 50%; margin-left: -100px;">
            </div>
            <div class="txtBox">
              <h2 class="txtBox__evolve-heading"><span class="accentColor">「フクロウ」</span>に<br>進化しました。</h2>
            </div>
          </div><!-- main__container -->
        </main>
          <footer class="footer">
          <div class="footer__container">
            <p class="goHomeBtn"><a href="home.php"><img src="<?= imgPath ?>btn-goHome.svg" alt="ホームに戻る"></a></p>
            <div class="background-bottom"></div>
          </div><!-- footer__container -->
        </footer>
    </div><!-- layout -->

<?php require_once "bottom.php"; ?>
