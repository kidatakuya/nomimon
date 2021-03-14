<?php 
  define("pagePath","item/");
  define("title","アイテム管理");
  require_once "head.php";
?>
<?php require_once "head.php"; ?>
<body data-pageType="item" class="body">
    <div class="layout">
      <header id="js-header" class="header">
        <div class="header__container">
          <p class="back-btn"><a href="home.php"><img src="<?= imgPath ?>ico-arrow.svg" alt=""></a></p>
          <h1 class="current-pageName current-pageName--item"><img src="<?= imgPath ?>ico-stick__white.svg" alt=""><span>アイテム管理</span></h1>
        </div>
      </header>
      <div class="topWall">
          <div class="objects">
            <div id="js-character" class="character"><img src="<?= imgPath ?>character_rabbit_3.png" alt="" id="accessory_chara"></div>
            <div class="obj-middle">
              <p class="obj-middle__item obj-middle__item--one"><img src="<?= imgPath ?>obj-window.svg" alt=""></p>
              <p class="obj-middle__item obj-middle__item--two"><img src="<?= imgPath ?>obj-paint.svg" alt=""></p>
              <p class="obj-middle__item obj-middle__item--three"><img src="<?= imgPath ?>obj-stand_lamp.svg" alt=""></p>
              <p class="obj-middle__item obj-middle__item--four"><img src="<?= imgPath ?>obj-cabinet.svg" alt=""></p>
              <p class="obj-middle__item obj-middle__item--five"><img src="<?= imgPath ?>obj-door.svg" alt=""></p>
            </div>
          </div><!-- objects -->
      </div>

      <div class="floor"></div>

      <div id="js-itemContainer" class="itemContainer">
        <div class="itemSelector">
          <ul class="itemCategory">
            <li data-btn="all" class="itemTab itemTab--current">全て</li>
            <li data-btn="accessory" class="itemTab">アクセサリー</li>
            <li data-btn="room" class="itemTab">部屋コーディネート</li>
          </ul>
        </div><!-- itemSelector -->
        <div class="itemContents__container">
          <div class="itemContents">
            <ul class="itemContents__wrapper">
              <li data-item="accessory" class="itemContents__item js-itemContents__item" id="accessory_hat">
                <span class="itemContents__img"><img src="img/hat.png" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
              <li data-item="accessory" class="itemContents__item js-itemContents__item" id="accessory_ribbon">
                <span class="itemContents__img"><img src="img/ribbon.png" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
              <li data-item="accessory" class="itemContents__item js-itemContents__item" id="accessory_umbrella">
              <span class="itemContents__img"><img src="img/umbrella.png" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
              <li data-item="room" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">背景</span>
              </li>
              <li data-item="accessory" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
              <li data-item="room" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">背景</span>
              </li>
              <li data-item="accessory" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
              <li data-item="accessory" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
              <li data-item="room" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">背景</span>
              </li>
              <li data-item="accessory" class="itemContents__item js-itemContents__item">
                <span class="itemContents__img"><img src="img/obj-stand_lamp.svg" alt=""></span>
                <span class="itemContents__name">アクセサリ</span>
              </li>
            </ul><!-- itemContents__wrapper -->
          </div><!-- itemContents -->
        </div>
      </div><!-- itemContainer -->
    </div><!-- layout -->
<?php require_once "bottom.php"; ?>


