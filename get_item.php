<?php 
  define("pagePath","get_item/");
  define("title","アイテム獲得");
  require_once "head.php";

?>
  <body class="body">
    <div class="layout">
        <header class="header">
          <div class="header__container">
            <h1 class="header__heading"><img src="<?= imgPath ?>txt-item_get.svg" alt="アイテムを獲得しました。"></h1>
            <p class="header__telop"><span>「</span>素敵なステッキ<span>」</span></p>
          </div>
        </header>
        <main class="main">
          <div class="main__container">
            <div class="item-getBox">
              <img class="item-getBox__getItem" src="<?= imgPath ?>ico-stick.svg" alt="">
              <img src="<?= imgPath ?>ico-decoCircle.svg">
            </div>
            <div class="txtBox">
              <h2 class="txtBox__heading"><img src="<?= imgPath ?>ico-heart.svg" alt="">＋１</h2>
              <p class="txtBox__desc">経験値<span class="accentColor">「</span><span class="accentColor bold">可愛さ</span><span class="accentColor">」</span>を獲得</p>
            </div>
          </div><!-- main__container -->
        </main>
        <!-- <footer class="footer"> -->
          <footer class="footer">
          <div class="footer__container">
            <p class="goHomeBtn"><a href="home.php"><img src="<?= imgPath ?>btn-goHome.svg" alt="ホームに戻る"></a></p>
            <div class="background-bottom"></div>
          </div>
        </footer>
    </div><!-- layout -->

<?php require_once "bottom.php"; ?>
