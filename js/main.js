// DARKMODE
let checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function() {
    if(this.checked) {
        trans()
        document.documentElement.setAttribute('data-theme', 'dark')
    } else {
        trans()
        document.documentElement.setAttribute('data-theme', 'light')
    }
})

let trans = () => {
    document.documentElement.classList.add('transition');
    window.setTimeout(() => {
        document.documentElement.classList.remove('transition')
    }, 200)
}
// SIDEBAR
const sidebarClose = document.querySelector('.sidebar-close')
sidebarClose.addEventListener('click', () => {
  console.log("click", sidebarClose)
  const divSidebar = document.querySelector(".general-sidebar")
  const divPage = document.querySelector('.general-content')
  const footerPage = document.querySelector('.footer-content')
  divSidebar.classList.toggle("sidebar-action")
  divPage.classList.toggle("general-content-action")
  footerPage.classList.toggle("footer-content-action")
})
// DROPDOWN MENU
let dropdown = document.querySelectorAll('.dropdown');
let dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
	let button = el.querySelector('[data-toggle="dropdown"]'),
    menu = el.querySelector('.dropdown-menu'),
    arrow = button.querySelector('i.fas');
    button.onclick = function(event) {
      event.preventDefault();
      menu.classList.toggle('dropdown-menu-hidden');
      arrow.classList.toggle('arrow-open');
    };
});