<?php 
  define("pagePath","qr_scan/");
  define("title","QRスキャン");
  require_once "head.php";

?>
  <body data-pageType="qrScan" class="body">
    <div class="layout">
        <header class="header">
          <div class="header__container">
            <p class="back-btn"><a href="home.php"><img src="<?= imgPath ?>ico-arrow__brown.svg" alt=""></a></p>
            <h1 class="header__heading"><img src="<?= imgPath ?>ico-qr.svg" alt="">QRコード</h1>
          </div>
        </header>
        <main class="main">
          <div class="main__container">
            <div class="qrContent">
              <div class="qrContent__wrap">
                <h2 class="qrContent__ttl">QRコード リーダー</h2>
                <p class="qrContent__time">制限時間:<span id="second">30</span>秒</p>
              </div>
              <div class="qrContent__scan">
                <!-- QRCamera -->
                <script src="https://unpkg.com/vue@2.6.10/dist/vue.min.js"></script>
                <script src="https://unpkg.com/vue-qrcode-reader@2.0.3/dist/vue-qrcode-reader.browser.js"></script>
                <link rel="stylesheet" href="css/qr.css">

                <div id="app">
                    <div class="cameraSystem">
                      <p>
                      Last result:
                      </p>
                      <p id="QRcontent">
                      {{ decodedContent }}
                      </p>

                      <p class="error">
                      {{ errorMessage }}
                      </p>
                    </div>
                    <div class="camera">
                      <qrcode-stream @decode="onDecode" @init="onInit"></qrcode-stream>
                    </div>
                </div>
              </div>
              <div class="cameraSystem">
                <form id="submit" action="php/qrSubmit.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="stylish" id="QRtext" value="nomi">
                    <button type="submit"name="submitQR" id="submitQR" >送信</button>
                </form>
                <button type="button" id="next">次へ</button>
                <p id="count">30</p>
                <script src="js/qrcamera.js"></script>
                <script src="js/qrConfirm.js"></script>
                <script src="js/qrcontent.js"></script>
              </div>
              <p id="message" class="qrContent__note">QRコードを画面に合わせれば自動で認識します。</p>
            </div>
            <div id="js-qrErrorModal" class="qrErrorModal">
              <p class="qrErrorModal__txt">QRを確認できませんでした。<br>もう一度読み取って下さい。</p>
              <p class="qrErrorModal__ico"><img src="<?= imgPath ?>ico-question.svg" alt=""></p>
              <p id="js-qrmodalClose" class="btn btn--color1"><a href="#">閉じる</a></p>
            </div>
            <div id="js-qrModalBackground" class="qrModalBackground"></div>
          </div><!-- main__container -->
        </main>
    </div><!-- layout -->
    

<?php require_once "bottom.php"; ?>
