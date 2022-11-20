"use strict";

function dest(cCode,cntry) {
    window.location.assign("./dests/destination.html");
    localStorage.setItem('cCode',cCode);
    localStorage.setItem('cntry',cntry);
    console.log(localStorage.getItem('cntry'),localStorage.getItem('cCode'));
 }