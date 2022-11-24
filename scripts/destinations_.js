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

function change(n) {
    let imgs = document.getElementsByClassName("img");
    for(let img_i = 0; img_i <= imgs.length; ++img_i) {
        
        imgs[img_i].style.display = "none";

        if(n == img_i) {
            imgs[img_i].style.display = "block";
            if(n > "0") {
                imgs[0].style.display = "none";
            }
        }
    }
}

function populatePage() {
    let cntry = localStorage.getItem('cntry'),
        c_code = localStorage.getItem('cCode'),
        fhr = localStorage.getItem('fhr'),
        rating = localStorage.getItem('rating');

        let mT = document.getElementById('mainT'),
        flightH = document.querySelector('.flight-time'),
        review = document.querySelector('.ic-rate');

        let cntryStr = localStorage.getItem('cntry').toString(),
            c_codeStr = localStorage.getItem('cCode').toString(),
            fhrStr = localStorage.getItem('fhr').toString(),
            ratingStr = localStorage.getItem('rating').toString();

         mT.textContent = cntryStr;
         flightH.textContent = fhrStr + " Hours";
         review.textContent = ratingStr + "  Reviews";

         let imgarr = ["1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg"],
             imgs = document.getElementsByClassName("img");

            for(let i = 0; i <= imgs.length; ++i) {
             
             let showC = document.querySelector('.left');

             if(c_codeStr) {
              
              showC.style.backgroundImage = "url('../images/loc/" + c_codeStr + "/1.jpeg')";
              imgs[i].src = "../images/loc/" + c_codeStr + "/" + imgarr[i];
                
            }
            
            }

}
populatePage();
