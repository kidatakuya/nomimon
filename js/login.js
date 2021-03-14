window.onload = ()=>{
    // ボタン情報取得
    let logButton = document.getElementById("logButton");

    logButton.onclick = ()=>{
        // 入力情報取得
        let logEmail = document.getElementById("logEmail").value;
        let logPassword = document.getElementById("logPassword").value;

        // 入力チェック
        if(logEmail == ""){
            alert("メールアドレスが未入力です。");
            return false;
        }
        else{
            if((logPassword == "")){
                alert("パスワードが未入力です。");
                return false;
            }
            else{
                // alert("ログインできました");
            }
        }
    } 
}