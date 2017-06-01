var time = 1500000;
var interval;

function convertToMillisecs(minutes){

  return minutes*60*1000;
}

// Start up the timer
function startTimer(){
// Update the count down every 1 second
  console.log("Timer started");

  interval = setInterval(function() {

  // Display the result in the element with id="demo"
 
  var minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((time % (1000 * 60)) / 1000);

  
  document.getElementById("timer").innerHTML = "<h1>" + minutes + ":" + (seconds<10 ? ("0" + seconds) : seconds) + "</h1>";

  time-=1000;

  // If the count down is finished, write some text 
  if (time < 0) {
    clearInterval(interval);
    document.getElementById("timer").innerHTML = "FINISHED!";
  }
}, 1000);

}

function setTimeDisplay(){

  $("#timer").html("<h1>25:00</h1>");
}

function resetTimer(){

  clearInterval(interval);
  console.log("Timer stopped");
  setTimeDisplay();
}

// Start cycle
function bindStartEvent(e){
  e.preventDefault();
  startTimer();
  console.log("Value of interval is: " + interval);
  // Fade in stop icon
  $("#action").unbind('click');
  $("#action").click(bindStopEvent).html("Stop");


}

// Stop cycle
function bindStopEvent(e){
  e.preventDefault();
  resetTimer();
  $("#action").unbind('click');
  $("#action").click(bindStartEvent).html("Start");
}

// Increase pomodoro time event

// Decrease pomodoro time event

// Increase rest time event

//Decrease rest time event

// Increase cycles

// Decrease cycles

function bindEvents(){

  $("#action").click(bindStartEvent);

}

$(document).ready(function(){

  // Do event binding
  bindEvents();
  
  //startTimer();
});