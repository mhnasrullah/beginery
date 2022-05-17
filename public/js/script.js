console.log('ready');
// Set the date we're counting down to
// var countDownDate1 = new Date("Mar 16, 2022 19:00:00").getTime();
// var countDownDate2 = new Date("Mar 25, 2022 19:00:00").getTime();
// var countDownDate3 = new Date("Feb 22, 2022 12:12:12").getTime();
// var countDownDate4 = new Date("Feb 22, 2022 12:12:12").getTime();

// Set the date we're counting down to

// Update the count down every 1 second


// // Update the count down every 1 second
// var timer1 = setInterval(function () {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate1 - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result
//   document.getElementById("timer-day-1").innerHTML = days;
//   document.getElementById("timer-hour-1").innerHTML = hours;
//   document.getElementById("timer-min-1").innerHTML = minutes;
//   document.getElementById("timer-sec-1").innerHTML = seconds;


//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(timer1);
//     document.getElementById("timer-day-1").innerHTML = 0;
//     document.getElementById("timer-hour-1").innerHTML = 0;
//     document.getElementById("timer-min-1").innerHTML = 0;
//     document.getElementById("timer-sec-1").innerHTML = 0;
//   }
// }, 1000);

// var timer2 = setInterval(function () {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate2 - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result
//   document.getElementById("timer-day-2").innerHTML = days;
//   document.getElementById("timer-hour-2").innerHTML = hours;
//   document.getElementById("timer-min-2").innerHTML = minutes;
//   document.getElementById("timer-sec-2").innerHTML = seconds;


//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(timer2);
//     document.getElementById("timer-day-2").innerHTML = 0;
//     document.getElementById("timer-hour-2").innerHTML = 0;
//     document.getElementById("timer-min-2").innerHTML = 0;
//     document.getElementById("timer-sec-2").innerHTML = 0;
//   }
// }, 1000);

// var timer3 = setInterval(function () {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate3 - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result
//   document.getElementById("timer-day-3").innerHTML = days;
//   document.getElementById("timer-hour-3").innerHTML = hours;
//   document.getElementById("timer-min-3").innerHTML = minutes;
//   document.getElementById("timer-sec-3").innerHTML = seconds;


//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(timer3);
//     document.getElementById("timer-day-3").innerHTML = 0;
//     document.getElementById("timer-hour-3").innerHTML = 0;
//     document.getElementById("timer-min-3").innerHTML = 0;
//     document.getElementById("timer-sec-3").innerHTML = 0;
//   }
// }, 1000);

// var timer4 = setInterval(function () {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate4 - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result
//   document.getElementById("timer-day-4").innerHTML = days;
//   document.getElementById("timer-hour-4").innerHTML = hours;
//   document.getElementById("timer-min-4").innerHTML = minutes;
//   document.getElementById("timer-sec-4").innerHTML = seconds;


//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(timer4);
//     document.getElementById("timer-day-4").innerHTML = 0;
//     document.getElementById("timer-hour-4").innerHTML = 0;
//     document.getElementById("timer-min-4").innerHTML = 0;
//     document.getElementById("timer-sec-4").innerHTML = 0;
//   }
// }, 1000);