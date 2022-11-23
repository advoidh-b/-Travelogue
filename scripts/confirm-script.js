/* *****************************
   * Author: Advoidh B
   * for: Travelogue(TM) 
   * Date: 29-10-2022
***************************** */

"use strict";
/* KEEP CLEAR */
function fillDetails() {
    let dest = document.querySelector('.dest'),
        hotel = document.querySelector('.hotel');

        let lcDest = localStorage.getItem('cntry').toString(),
            lcHot = localStorage.getItem('hname').toString();
        dest.value = lcDest;
        hotel.value = lcHot;
}
fillDetails();

function validateBook() {

    let dei = document.getElementById('day').value,
    month = document.getElementById('month').value,
    yer = document.getElementById('year').value,
    err_p = document.querySelector('.e-date');

    let p_date = new Date(),
     date_n = p_date.toUTCString().slice(4, 8).trim(''),
     month_n = p_date.getMonth().toString(),
     year_n = p_date.getFullYear().toString();

     let nMn = Number(month),
         nYr = Number(yer),
         nDay = Number(dei);

     let dt = Number(date_n),
         mt = Number(month_n) + 1,
         yr = Number(year_n);

         console.log(dt, mt, yr);
         console.log("Hello");

    if( nDay < dt || nDay > 28 || nMn > 12 || nMn < mt || nYr > yr+2 || nYr < yr) {
        alert("WARNING : Invalid Date Received");
        location.reload();
        return false;
    }
    
}


