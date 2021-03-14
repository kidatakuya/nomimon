const item = document.getElementsByClassName("js-itemContents__item");
const categoryBtns = document.getElementsByClassName("itemTab");

//
// アイテムソート機能
//
export function itemSort() {
    for (let i = 0; i < categoryBtns.length; i++) {
        categoryBtns[i].addEventListener("click", (e) => {
            let element = e.toElement;
            let elementDataBtn = element.getAttribute("data-btn");

            //
            // タブ切り替え
            //
            for (let j = 0; j < categoryBtns.length; j++) {
                categoryBtns[j].classList.remove("itemTab--current");
            }
            element.classList.add("itemTab--current");

            //
            // ソート機能
            //
            for (let j = 0; j < item.length; j++) {
                let itemDataAttr = item[j].getAttribute("data-item");
                // Allボタンで全表示, アクセサリー、背景の表示/非表示
                if (elementDataBtn === "all") {
                    fadeIn(j);
                } else if (itemDataAttr === elementDataBtn) {
                    fadeIn(j);
                } else {
                    fadeOut(j);
                }
            }
        });
    }
}
// ソート機能のフェードイン関数
function fadeIn(j) {
    item[j].classList.remove("none");
    item[j].classList.remove("fade-out");
    item[j].classList.add("fade-in");
}
// ソート機能のフェードアウト関数
function fadeOut(j) {
    item[j].classList.remove("fade-in");
    item[j].classList.add("fade-out");
    item[j].classList.add("none");
}

//
// アイテム選択機能
//
export function itemSelect() {
    for (let i = 0; i < item.length; i++) {
        item[i].addEventListener("click", (e) => {
            const arrowElement = document.createElement("span");
            arrowElement.setAttribute("class", "item-checked");
            const itemCheck = item[i].getElementsByClassName("item-checked")[0];
            const itemImg = item[i].getElementsByClassName("itemContents__img")[0]

            // アイテム全体をチェック、チェックついたアイテムを初期化
            for (let j = 0; j < item.length; j++) {
                const allItemChecked = item[j].getElementsByClassName("item-checked")[0];
                const allItemImg = item[j].getElementsByClassName("itemContents__img")[0];
                if (allItemChecked) {
                    let allItemCheckedParent = allItemChecked.parentNode;
                    allItemCheckedParent.removeChild(allItemChecked)
                    allItemImg.classList.remove("opacity05");
                }
            }

            // クリックした要素にチェックをつける、既についてるなら削除
            if (itemCheck) {
                item[i].removeChild(itemCheck);
                itemImg.classList.remove("opacity05");
            } else {
                item[i].appendChild(arrowElement);
                itemImg.classList.add("opacity05");
            }
        });
    }
}