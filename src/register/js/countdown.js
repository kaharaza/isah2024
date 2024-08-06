//  // Set the target end date and time
//  let endDate = new Date("September 11, 2023 16:00:00");
    
//  // Function to update the countdown
//  function updateCountdown() {
//      let currentDate = new Date();
//      let timeLeft = endDate - currentDate;
     
//      // Check if the countdown has reached the end date
//      if (timeLeft <= 0) {
//          clearInterval(countdownInterval); // Stop updating the countdown
//          $('.was-validated').css('display','flex');
//          $('#countdown-none').css('display', 'none');
//      } else {
//          let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
//          let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//          let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
//          let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

//          let registerOp = document.getElementsByClassName('registeropen')[0];
//          registerOp.innerHTML = `
//          <button class="btn text-uppercase">Registration Opens on December 1, 2023</button>
//          `;
         
//          let countdownElement = document.getElementsByClassName('countdown')[0]; // Select the first element
//          countdownElement.innerHTML = `
         
//              <div class="box-countdown"> 
//                  <span>${days}</span>
//                  <p id="day">Day</p>
//              </div>
//              <div class="box-countdown">  
//                  <span>${hours}</span>
//                  <p id="hours">Hours</p>
//              </div>
//              <div class="box-countdown">  
//                  <span>${minutes}</span>
//                  <p id="minutes">Minutes</p>
//              </div>
//              <div class="box-countdown box-countdown2">
//                  <span>${seconds}</span>
//                  <p id="seconds">Seconds</p>
//              </div>
//          `;
//      }
//  }

//  // Call the updateCountdown function every second
//  let countdownInterval = setInterval(updateCountdown, 1000);
  