window.onload = ()=>{
    // ボタン情報取得
    let subButton = document.getElementById("subButton");

    subButton.onclick = ()=>{
        // 入力情報取得
        let newEmail = document.getElementById("email").value;
        let newPassword = document.getElementById("password").value;
        let conPassword = document.getElementById("conPassword").value;
        let regexp = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        // 入力チェック
        if(newEmail == ""){
            alert("メールアドレスが未入力です。");
            return false;
        }
        else{
            if(regexp.test(newEmail == false)){
                event.preventDefault();
                alert("メールアドレスの入力形式が違います。");
                return false;
            }
            else{
                if(newPassword == ""){
                    alert("パスワードが未入力です。")
                    return false;
                }
                else{
                    if(newPassword !== conPassword){
                        alert("確認パスワードが一致しません。");
                        return false;
                    }
                    else{
                        alert("登録完了しました。");
                    }
                }
            }
        }
    }
}