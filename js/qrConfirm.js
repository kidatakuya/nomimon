
console.log(document.getElementById("QRtext"));
    // 飲み物QR処理
function aaa(QRtimer) {
        clearInterval(QRtimer);
        console.log("a");
        // ステータス情報セット
        var qrTxt = document.getElementById("QRtext").value.trim();
        // QR情報の文字数取得
        let txtCount = qrTxt.length;

        console.log(txtCount);
    
        // 飲み物QRかチェック
        if(txtCount !== 8){
            let modalContent = document.getElementById("js-qrErrorModal");
            let qrBack = document.getElementById("js-qrModalBackground");
            modalContent.style.display = "block";
            qrBack.style.display = "block";
            
            const qrModalClose = document.getElementById("js-qrmodalClose");
            qrModalClose.addEventListener('click', ()=> {
                location.reload();
            });
        } else{
            qrCheck = "nomi";

            document.getElementById("message").innerHTML = "飲み物QR認証完了！次はゴミ箱QRを読み込んでください。";

            // タイムアウト処理
            let displayCount = 30;
            let count = 0;
            // ID:disPlayCountにカウントダウン表示
            var countUp = ()=>{
                if(count < 30){
                    count ++;
                    displayCount --;
                    document.getElementById("second").innerHTML = displayCount;
                    setTimeout(countUp,1000);
                }
                else{
                    // カウント0になったら処理を停止しカウント再セット
                    count = 0;
                    displayCount = 30;
                    document.getElementById("second").innerHTML = displayCount;
                    modalContent.style.display = "block";
                    qrBack.style.display = "block";
                    return false;
                }
            }
            setTimeout(countUp,1000);


            
            // ゴミ箱QR処理
            if(qrCheck == "nomi"){
                bbb();
        }
        QRnomimon();
    }
    function QRnomimon(){ 
        let QRnomitimer = setInterval(function(){
        console.log($QRcontent.innerHTML);
        document.getElementById('QRtext').value = $QRcontent.innerHTML;
        if(document.getElementById("QRtext").value.trim() !== ""){
         bbb(QRnomitimer);
        }
     }, 1000);

     }
    
    function bbb(QRnomitimer) {
        console.log("nnnn");

        let qrCheck = document.getElementById("QRtext").value.trim();
        if(qrCheck == "nomimon"){
            console.log("ok");
            document.getElementById("QRtext").value = qrTxt;

            // alert("認証できました。");
            document.getElementById("submitQR").click();
        }
        else{
            console.log("ng");
        }    
    }
}
