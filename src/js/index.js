
//
// 関数インポート
//
import { itemSort } from "./itemSelector";
import { itemSelect } from "./itemSelector";
import { qrModal } from "./qr_modal";
import { mapSlide } from "./map_slide";
import { homeAnimation } from "./animation";
import { itemPageAnimation } from "./animation";


//
// ページに合わせて関数をだし分けて実行
//
const pageType = document.body.getAttribute("data-pageType");
switch (pageType) {
    case "home":
        homeAnimation();
        break;
    case "map":
        mapSlide();
        break;
    case "item":
        itemSort();
        itemSelect();
        itemPageAnimation();
        break;
    case "qrScan":
        qrModal();
        break;
}




//
// ブラウザーのアドレスバーを除く高さを算出
//
window.onload = () => {
    const deviceWidth = window.innerWidth;
    const deviceHeight = window.innerHeight;
    // アドレスバーを除いた高さを指定する
    if (deviceHeight < 667) {
        const layout = document.getElementsByClassName("layout")[0];
        const objects = document.getElementsByClassName("objects")[0];
        layout.style.height = deviceHeight + "px";
        objects.style.height = "65vh";
    }
    // デバイスに合わせてスクロールバーのスタイルを変更
    if (deviceWidth > 430) {
        const itemContentsWrap = document.getElementsByClassName("itemContents__container")[0];
        const itemContents = document.getElementsByClassName("itemContents")[0];
        itemContentsWrap.style.oveflow = "hidden";
        itemContents.classList.add("viewScrollBar");
    }
}

// }
