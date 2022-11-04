/* * Author: Advoidh B
   * for: Travelogue(TM) */

"use strict";

/* Sidebar opening and closing */
const navOpen = () => {
    document.querySelector(".sidebar").style.width = '32%';
};
const navCls = () => {
   let sideBar =  document.querySelector(".sidebar");
   sideBar.style.width = 0;
};


