export function homeAnimation() {
    console.log("a");
    //
    // 表示アニメーション
    //
    const header = document.getElementById("js-header");
    const status = document.getElementById("js-status");
    const gNav = document.getElementById("js-g-nav");
    const character = document.getElementById("js-character");
    const middleObj = document.getElementsByClassName("obj-middle__item");
    setTimeout(function () {
        header.style.transform = "translateY(0)";
    }, 100);
    setTimeout(function () {
        gNav.style.transform = "translateY(0)";
    }, 300);
    for (let item of middleObj) {
        setTimeout(function () {
            item.style.opacity = "1";
        }, 600);
    }
    setTimeout(function () {
        character.style.opacity = "1";
    }, 900);
    setTimeout(function () {
        status.style.opacity = "1";
    }, 1200);
}

export function itemPageAnimation() {
    //
    // 表示アニメーション
    //
    const header = document.getElementById("js-header");
    const itemSelectBar = document.getElementById("js-itemContainer");
    const character = document.getElementById("js-character");
    setTimeout(function () {
        header.style.transform = "translateY(0)";
    }, 100);
    setTimeout(function () {
        itemSelectBar.style.transform = "translateY(0)";
    }, 300);
    setTimeout(function () {
        character.style.opacity = "1";
    }, 600);
}