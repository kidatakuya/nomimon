console.log("start");
$QRcontent = document.getElementById('QRcontent').innerHTML;
$QRcontent = document.getElementById('QRcontent');

// window.setInterval(function(){
//    console.log($QRcontent.innerHTML);
//    document.getElementById('QRtext').value = $QRcontent.innerHTML;
//    if(document.getElementById("QRtext").value.trim() !== ""){
//     aaa();
//    }
// }, 1000);

function QRsecond(){ 
   let QRtimer = setInterval(function(){
   console.log($QRcontent.innerHTML);
   document.getElementById('QRtext').value = $QRcontent.innerHTML;
   if(document.getElementById("QRtext").value.trim() !== ""){
    aaa(QRtimer);
   }
}, 1000);
}


QRsecond();
