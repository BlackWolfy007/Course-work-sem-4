
//Default additional time for timer
var addtime = 60*1000;

//Based on post office location, we choose the coefficient for the delivery speed
var postOfficeID = document.getElementById("postOfficeID");
if (postOfficeID.textContent=="1"||postOfficeID.textContent=="3"){
    addtime*=4;
}
else if (postOfficeID.textContent=="2"){
    addtime*=0.5;
}
else if (postOfficeID.textContent=="4"){
    addtime*=2;
}
else {
    addtime*=2.1;
}
//There is forming delivery date
const delivery = new Date().getTime() + addtime;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var CurrentTime = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = delivery - CurrentTime;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  //Delivery timer
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  //Stages of transportation
  if (distance>=addtime*0.9){
    document.getElementById("status").innerHTML = "Доставка на склад";
  }
  else if (distance<addtime*0.9 && distance>=addtime*0.33){
    document.getElementById("status").innerHTML = "Доставка на почтамат";
  }
  else if (distance<addtime*0.33&&distance>=0){
    document.getElementById("status").innerHTML = "Ожидает в пункте выдачи";
  }
  else if (distance < 0) {
    clearInterval(x);
    document.getElementById("status").innerHTML = "Получено";
    document.getElementById("timer").style.visibility = "hidden";
    document.getElementById("infoText").style.visibility = "hidden";
  }
}, 1000); 