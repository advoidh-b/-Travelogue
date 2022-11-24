"use strict";

function dest(cCode, cntry, fhr, rating) {
    window.location.assign("./dests/destination.html");
    localStorage.setItem('cCode', cCode);
    localStorage.setItem('cntry', cntry);
    localStorage.setItem('fhr', fhr);
    localStorage.setItem('rating', rating);
    
 }

