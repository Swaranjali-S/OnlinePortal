var fs=false;
var time_in_seconds=20;
function start() {
  document.body.requestFullscreen();
  document.getElementById('questions').style.display = "block";
  document.getElementById('starter').style.display = "none";
  setTimeout(()=>{document.getElementById("submit").click();},time_in_seconds*1000);
  fs=true;
  setInterval(()=>{
    time_in_seconds-=1;
    document.getElementById("timer").innerHTML= time_in_seconds;
  },1000);
  console.log("he");
}

//fullscreen checker
setInterval(()=>{
  if (fs==true && document.fullscreen==false){
    document.getElementById("submit").click();}
},300);
document.getElementById("timer").innerHTML=time_in_seconds;
