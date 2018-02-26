// On loading the page start function 'clock' with an interval of 1000ms
window.onload = setInterval(clock,1000);

function clock(){
  var i = new Date(); // Todays date

  	  var date = i.getDate(); // Gets todays date

  	  var month = i.getMonth(); // Gets current month (value)
  	  var monthArray = ["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"]; // Array to hold all the different months
  	  month = monthArray[month]; // value of 'month' used within the Array to get current month

  	  var year = i.getFullYear(); // Gets current year

  	  var day = i.getDay(); // Gets current day (value)
  	  var dayArray = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  	  day = dayArray[day]; // value of 'day' used within the Array to get current day

  	  var hour =i.getHours(); // Gets current hour (digital)
      var min = i.getMinutes(); // Gets current minute
  	  var sec = i.getSeconds(); // Gets current second

  	  document.getElementById("myDate").innerHTML=day +" "+ date +" "+ month +" "+ year +" | "; // Assigns the collective values to an ID to be used within HTML/CSS
  	  document.getElementById("myClock").innerHTML=hour +":"+ min +":"+ sec; // Assigns the collective values to an ID to be used within HTML/CSS

}
///**************************************************************************
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 600, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End of the if statement
  });
});
