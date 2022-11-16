/* *****************************
   * Author: Advoidh B
   * for: Travelogue(TM) 
   * Date: 29-10-2022
***************************** */

"use strict";
/* KEEP CLEAR */

document.onload = loadAnim();

function loadAnim() {
  document.body.style.animation = "docLoad 1s linear";
}

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
