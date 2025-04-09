// assets/js/script-home.js
window.onload = function () {
    const logo = document.getElementById("logo");
    const mainContent = document.getElementById("main-content");
  
    setTimeout(() => {
      logo.classList.add("transform", "scale-50", "top-4", "left-4");
      logo.style.width = "4rem";
      logo.style.height = "4rem";
    }, 2000);
  
    setTimeout(() => {
      logo.classList.remove("flex", "items-center", "justify-center");
      logo.classList.add("absolute", "top-4", "left-4");
      mainContent.classList.remove("hidden");
    }, 3000);
  };
  