
window.onload = setInterval(clock,1000);

function clock(){
  var i = new Date();

  	  var date = i.getDate();

  	  var month = i.getMonth();
  	  var monthArray = ["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
  	  month = monthArray[month];

  	  var year = i.getFullYear();

  	  var day = i.getDay();
  	  var dayArray = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  	  day = dayArray[day];

  	  var hour =i.getHours();
      var min = i.getMinutes();
  	  var sec = i.getSeconds();

  	  document.getElementById("myDate").innerHTML=day+" "+date+" "+month+" "+year;
  	  document.getElementById("myClock").innerHTML=hour+":"+min+":"+sec;

}
