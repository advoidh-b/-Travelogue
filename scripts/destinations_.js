/* *****************************
   * Author: Advoidh B
   * for: Travelogue(TM) 
   * Date: 29-10-2022
***************************** */

"use strict";
/* KEEP CLEAR */

function change(n) {
    let imgs = document.getElementsByClassName("img");
    for(let i = 0; i <= imgs.length; ++i) {
        
        imgs[i].style.display = "none";

        if(n == i) {
            imgs[i].style.display = "block";
            if(n > "0") {
                imgs[0].style.display = "none";
            }
        }
    }
}