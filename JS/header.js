/*navbar top*/
//   $(function () {
//   $(document).scroll(function () {
//     var $nav = $("nav");
//     $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
//   });
// });
//var myNav = document.getElementById('mynav');
// window.onscroll = function () { 
//     "use strict";
//     if (document.body.scrollTop >= 200 ) {
//         myNav.classList.add("nav-colored");
//         myNav.classList.remove("nav-transparent");
//     } 
//     else {
//         myNav.classList.add("nav-transparent");
//         myNav.classList.remove("nav-colored");
//     }
// };
/*upto here*/

function openNav() {
  document.getElementById("myNav").style.width = "14%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

