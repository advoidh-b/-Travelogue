/* * Author: Advoidh B
   * for: Travelogue(TM) */

"use strict";

/* Sidebar opening and closing */
const navOpen = () => {
   let sidebar = document.querySelector(".sidebar");

   if(window.innerWidth > 700) {
      sidebar.style.width = "32%";
   }
   else {
   sidebar.style.width = "100%";
   }
};

const navCls = () => {
   let sideBar =  document.querySelector(".sidebar");
   sideBar.style.width = 0;
};

console.log(window.innerWidth, screen.width);
