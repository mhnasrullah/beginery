// var cntdown = (year,month,day,hour,minute,second) => 
var cntdowndisplay = (id,e,time,mode) => {
    var id = e;
    // var {{"ids".$event->id}} = "{{'s'.$event->id}}";
    var e = document.getElementById(id);
    setInterval(() => {
      if(mode == "s"){
        e.innerHTML = cntdown(time).seconds
      }
    }, 1000);
}
 
var cntdown = (time) => 
{
//   console.log(year);
//   console.log(month);
//   console.log(day);
//   console.log(hour);
//   console.log(minute);
//   console.log(second);

  // var countDownDate = new Date(year,month,day,hour,minute,second,0).getTime();
  var countDownDate = new Date(time.replace(' ','T')).getTime();
//   return setInterval(function() {
  // var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    days = 0;
    hours = 0;
    minutes = 0;
    seconds = 0;
  }

  return {days,hours,minutes,seconds};
// }, 1000);

}