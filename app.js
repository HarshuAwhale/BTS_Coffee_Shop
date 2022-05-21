let videoBtn = document.querySelectorAll('.vid-btn');
// let formBtn = document.querySelector('#signup-btn')
// let signupForm = document.querySelector('.signup-form-container');
// let formclose = document.querySelector('#form-close');

// formBtn.addEventListener('click', () =>{
//   signupForm.classList.add('active');
// });

// formclose.addEventListener('click', () =>{
//   signupForm.classList.remove('active');
// });


videoBtn.forEach(btn =>{
  btn.addEventListener('click', ()=>{
    document.querySelector('.controls .active').classList.remove('active');
    btn.classList.add('active');
      let src = btn.getAttribute('data-src');
      document.querySelector('#video-slider').src = src;
  });
});

// redirecting to homepage
document.getElementById("myButton").onclick = function () {
  location.href = "#";
};

// Select The Elements
var toggle_btn;
var big_wrapper;
var hamburger_menu;

function declare() {
  toggle_btn = document.querySelector(".toggle-btn");
  big_wrapper = document.querySelector(".big-wrapper");
  hamburger_menu = document.querySelector(".hamburger-menu");
}

const main = document.querySelector("main");

declare();

let dark = false;

function toggleAnimation() {
  // Clone the wrapper
  dark = !dark;
  let clone = big_wrapper.cloneNode(true);
  if (dark) {
    clone.classList.remove("light");
    clone.classList.add("dark");
  } else {
    clone.classList.remove("dark");
    clone.classList.add("light");
  }
  clone.classList.add("copy");
  main.appendChild(clone);

  document.body.classList.add("stop-scrolling");

  clone.addEventListener("animationend", () => {
    document.body.classList.remove("stop-scrolling");
    big_wrapper.remove();
    clone.classList.remove("copy");
    // Reset Variables
    declare();
    events();
  });
}

function events() {
  toggle_btn.addEventListener("click", toggleAnimation);
  hamburger_menu.addEventListener("click", () => {
    big_wrapper.classList.toggle("active");
  });
}

events();