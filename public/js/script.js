// Function to create age options
function createAgeOptions() {
    let selectAge = document.getElementById('select-age');
    if (selectAge) {
        for(let i = 18; i <= 60; i++) {
            let option = document.createElement('option');
            option.value = i;
            option.text = i + " years";
            selectAge.appendChild(option);
        }
    } else {
        console.log('select-age element not found');
    }
}

// Call function to create age options
createAgeOptions();

document.addEventListener("DOMContentLoaded", function() {
    // Initialize WOW.js
    new WOW().init();
    AOS.init();

});


/* contact form*/

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
