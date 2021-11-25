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
  const divPage = document.querySelector('.main-content')
  const footerPage = document.querySelector('.footer-content')
  divSidebar.classList.toggle("sidebar-action")
  divPage.classList.toggle("main-content-action")
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
// SCROLL
(function(){

    let doc = document.querySelector('.main-content');
    let w = window;
  
    let prevScroll = w.scrollY || doc.scrollTop;
    let curScroll;
    let direction = 0;
    let prevDirection = 0;
  
    let header = document.querySelector('.header');
    let sidebar = document.querySelector('.bg1');
  
    let checkScroll = function() {

      curScroll = w.scrollY || doc.scrollTop;
      if (curScroll > prevScroll) { 
        //scrolled up
        direction = 2;
      }
      else if (curScroll < prevScroll) { 
        //scrolled down
        direction = 1;
      }
  
      if (direction !== prevDirection) {
        toggleHeader(direction, curScroll);
      }
  
      prevScroll = curScroll;
    };
  
    let toggleHeader = function(direction, curScroll) {
      if (direction === 2 && curScroll > 58) { 

        header.classList.add('hide');
        sidebar.classList.add('bg-no-margin');
        prevDirection = direction;
      }
      else if (direction === 1) {
        header.classList.remove('hide');
        sidebar.classList.remove('bg-no-margin');
        prevDirection = direction;
      }
    };
  
    window.addEventListener('scroll', checkScroll);
  
  })();