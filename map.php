<?php
  define("pagePath","map/");
  define("title","マップ");
  require_once "head.php";
?>
<?php require_once "head.php"; ?>
  <body data-pageType="map" class="body">
    <div class="layout">
      <header class="header">
        <div class="header__container">
          <p class="back-btn"><a href="home.php"><img src="<?= imgPath ?>ico-arrow.svg" alt=""></a></p>
          <h1 class="current-pageName current-pageName--map"><img src="<?= imgPath ?>ico-map.svg" alt=""><span>マップ</span></h1>
        </div>
      </header>
      <div class="map-field">
         <div class="map-field-inner">
            <div class="map-field-inner-box draggable">
               <img src="<?= imgPath ?>img-map.jpg" alt="">
            </div>
         </div>
      </div>

      <div id="mapDetail" class="map-detail">
        <div class="map-detail__item">
          <div class="map-detail__head">
            <p class="map-detail__name">スターバック</p>
            <p class="map-detail__distance">500m</p>
          </div>
          <div class="map-detail__container">
            <p class="map-detail__img"></p>
            <div class="map-detail__wrapper">
              <p class="map-detail__time">09:00-21:00</p>
              <p class="map-detial__address">大阪府大阪市北区中崎西2丁目1-6</p>
              <div class="map-detail__stats">
                <p class="map-detail__experience"><img src="<?= imgPath ?>ico-heart.svg" alt="">可愛さ+1</p>
                <p class="map-detail__get-item"><img src="<?= imgPath ?>ico-get_item.svg" alt=""></p>
              </div>
            </div><!-- map-detail__wrapper -->
          </div><!-- map-detail__container -->
        </div><!-- map-detail__item -->

        <div class="map-detail__item">
          <div class="map-detail__head">
            <p class="map-detail__name">スターバック</p>
            <p class="map-detail__distance">500m</p>
          </div>
          <div class="map-detail__container">
            <p class="map-detail__img"></p>
            <div class="map-detail__wrapper">
              <p class="map-detail__time">09:00-21:00</p>
              <p class="map-detial__address">大阪府大阪市北区中崎西2丁目1-6</p>
              <div class="map-detail__stats">
                <p class="map-detail__experience"><img src="<?= imgPath ?>ico-heart.svg" alt="">可愛さ+1</p>
                <p class="map-detail__get-item"><img src="<?= imgPath ?>ico-get_item.svg" alt=""></p>
              </div>
            </div><!-- map-detail__wrapper -->
          </div><!-- map-detail__container -->
        </div><!-- map-detail__item -->
      </div><!-- map-detail -->

      <div id="mapOpenBtn" class="map-openlBtn"><img src="<?= imgPath ?>ico-list.svg" alt="">リストを表示</div>

    </div><!-- layout -->
<?php require_once "bottom.php"; ?>
