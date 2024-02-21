const menu = () => {
    const menu = document.getElementById('menu');
    const mobile = document.getElementById('mobile');

    menu.addEventListener('click', () => {
        mobile.classList.toggle('active');
    }
    );
}
menu();

const setTheme = localStorage.getItem("theme");
console.log("theme", setTheme);
if (setTheme == null) {
  swapStyle("light.css");
} else {
  swapStyle(setTheme);
}

function swapStyle(sheet) {
  document.getElementById("mystylesheet").href = sheet;
  localStorage.setItem("theme", sheet);
}