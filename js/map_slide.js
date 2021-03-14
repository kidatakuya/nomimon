export function mapSlide() {
    const mapDetail = document.getElementById("mapDetail");
    const mapOpenBtn = document.getElementById("mapOpenBtn");
    mapOpenBtn.addEventListener("click", () => {
        mapDetail.style.transform = `translateY(0)`;
        mapOpenBtn.style.transform = `translateY(100%)`;
    });

    let count = 0;
    let eventNum = 30;
    let eventType = "";

    // デバイス・ブラウザ取得
    let userAgent = navigator.userAgent;
    if (userAgent.indexOf("iPhone") > 0 || userAgent.indexOf("iPod") > 0 || userAgent.indexOf("Mobile") > 0 && userAgent.indexOf("Android") > 0) {
        // Monile && Android はアンドロイド機種かつスマートフォン
        eventNum = 20;
        eventType = "touchmove";
        mapSlideMobile(eventNum, eventType);

    } else if (userAgent.indexOf("iPad") > 0 || userAgent.indexOf("Android") > 0) {
        // iPadは対応してない
    } else {
        mapDetail.addEventListener("click", () => {
            mapDetail.style.transform = `translateY(100%)`;
            mapOpenBtn.style.transform = `translateY(0)`;
        });
    }

    // ドラッグでスライド表示処理
    function mapSlideMobile(eventNum, eventType) {
        mapDetail.addEventListener("touchstart", (event) => {
            event.preventDefault();
        });
        mapDetail.addEventListener(eventType, () => {
            count++;
            console.log(count);

            mapDetail.style.transform = `translateY(${count}%)`;
            if (count > eventNum) {
                mapDetail.style.transform = `translateY(100%)`;
                mapOpenBtn.style.transform = `translateY(0)`;
            }
        });
        mapDetail.addEventListener("transitionend", () => {
            count = 0;
        });
    }

}
