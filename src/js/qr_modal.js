export function qrModal() {
    let modalContent = document.getElementById("js-qrErrorModal");
    let qrBack = document.getElementById("js-qrModalBackground");
    let btn = document.getElementById("js-qrmodalClose").children[0];
    

    // モーダルを閉じるイベント
    btn.addEventListener("click", () => {
        modalContent.classList.add("modalHide");
        qrBack.classList.add("modalHide");
    });
    modalContent.addEventListener("animationend", () => {
        modalContent.style.display = "none";
        qrBack.style.display = "none";
    });
}
