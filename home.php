<?php
  define("pagePath","home/");
  define("title","ホーム画面");
  require_once "head.php";

  require_once("php/dbConnect.php");
  session_start();
  $id = $_SESSION["id"];
  
//   print $id;
//   print_r($_SESSION);
  
  $instance = mysqli_connect("localhost", "root", "root", "nomimon");
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
  

?>
  <body data-pageType="home" class="body">
    <div class="layout">
      <header id="js-header" class="header">
        <div class="header__container">
          <h1 class="chara-name"><img src="<?= imgPath ?>ico-chara_thumb.svg" alt=""><span><?= $result["monName"]?></span></h1>
          <p class="settingBtn"><a href="setting.html"><img src="<?= imgPath ?>btn-setting.svg" alt=""></a></p>
        </div>
      </header>
      <main class="main">
        <div class="main__container">
          <div class="backWall">
            <div id="js-status" class="status">
                <ul class="status__list">
                  <!-- かわいさ -->
                  <li class="status__item">
                    <p class="status__silhouette"><img src="<?= imgPath ?>ico-chara1.svg" alt=""></p>
                    <p class="status__type">かわいさ</p>
                    <p class="status__txt"><span>あと</span><span class="status__num"><?= $cuteDisplay ?></span></p>
                    <div class="status__meter"><span class="status__meter status__meter--cute" style="width:<?= $cutePercent ?>%""></span></div>
                  </li>
                  <!-- かっこよさ -->
                  <li class="status__item">
                    <p class="status__silhouette"><img src="<?= imgPath ?>ico-chara2.svg" alt=""></p>
                    <p class="status__type">かっこよさ</p>
                    <p class="status__txt"><span>あと</span><span class="status__num"><?= $coolDisplay ?></span></p>
                    <div class="status__meter"><span class="status__meter status__meter--cool" style="width:<?= $coolPercent ?>%"></span></div>
                  </li>
                  <!-- おしゃれさ -->
                  <li class="status__item">
                    <p class="status__silhouette"><img src="<?= imgPath ?>ico-chara3.svg" alt=""></p>
                    <p class="status__type">おしゃれさ</p>
                    <p class="status__txt"><span>あと</span><span class="status__num"><?= $stylishDisplay ?></span></p>
                    <div class="status__meter"><span class="status__meter status__meter--fashion" style="width:<?= $stylishPercent ?>%"></span></div>
                  </li>
                </ul>
            </div><!-- status -->
            
            <div class="objects">
              <div class="obj-top">
                <p class="obj-top__item obj-top__item--one"><img src="<?= imgPath ?>obj-lamp.svg" alt=""></p>
                <p class="obj-top__item obj-top__item--two"><img src="<?= imgPath ?>obj-lamp__long.svg" alt=""></p>
              </div>
              <div id="js-obj-middle" class="obj-middle">
                <p id="js-character" class="character"><img src="<?= imgPath ?><?= $result["animal"]?><?= $levelx ?><?= $style?><?= $result["accessory"]?>.png" alt=""></p>
                <p class="obj-middle__item obj-middle__item--one"><img src="<?= imgPath ?>obj-window.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--two"><img src="<?= imgPath ?>obj-paint.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--three"><img src="<?= imgPath ?>obj-stand_lamp.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--four"><img src="<?= imgPath ?>obj-cabinet.svg" alt=""></p>
                <p class="obj-middle__item obj-middle__item--five"><img src="<?= imgPath ?>obj-door.svg" alt=""></p>
              </div>
            </div><!-- objects -->
          </div><!-- topWall -->
          <div class="floor"></div>
        </div><!-- main__container -->
      </main>
      <footer class="footer">
        <div class="footer__container">
          <nav id="js-g-nav" class="g-nav">
            <ul class="g-nav__list">
              <li class="g-nav__item"><a href="qr_scan.php"><img src="<?= imgPath ?>btn-qr.svg" alt=""></a><span class="g-nav__txt">QRコード</span></li>
              <li class="g-nav__item"><a href="map.php"><img src="<?= imgPath ?>btn-map.svg" alt=""></a><span class="g-nav__txt">使えるお店</span></li>
              <li class="g-nav__item"><a href="item.php"><img src="<?= imgPath ?>btn-item.svg" alt=""></a><span class="g-nav__txt">アイテム</span></li>
            </ul>
          </nav>
        </div>
      </footer>
    </div><!-- layout -->

<?php require_once "bottom.php"; ?>
