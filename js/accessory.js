var chara = document.getElementById("accessory_chara");
var hat = document.getElementById("accessory_hat");
var ribbon = document.getElementById("accessory_ribbon");
var umbrella = document.getElementById("accessory_umbrella");

hat.onclick = function(event){
   console.log("hat");
   chara.src = "img/rabbit_2_cute_hat.png";
};
ribbon.onclick = function(event){
   console.log("ribbon");
   chara.src = "img/rabbit_2_cute_ribbon.png";
};
umbrella.onclick = function(event){
   console.log("umbrella");
   chara.src = "img/rabbit_2_cute_umbrella.png";
};