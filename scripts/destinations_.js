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

function populatePage() {
    let cntry = localStorage.getItem('cntry');
    let c_code = localStorage.getItem('cCode');

        let mT = document.getElementById('mainT');
        let parsD = localStorage.getItem('cntry');
        
        let cntryStr = localStorage.getItem('cntry').toString(),
            c_codeStr = localStorage.getItem('cCode').toString();

         mT.textContent = cntryStr;

         let imgarr = ["1.jpeg", "2.jpeg", "3.jpeg", "4.jpeg"],
             imgs = document.getElementsByClassName("img");

            for(let i = 0; i <= imgs.length; ++i) {
             
             let showC = document.querySelector('.left');

             if(c_codeStr == "sw") {
              
              showC.style.backgroundImage = "url('../images/sw/1.jpeg')";
              imgs[i].src = "../images/sw/" + imgarr[i];
                
            }
             if(c_code == "nwr") {
                showC.style.backgroundImage = "url('../images/nwr/1.jpeg')";
              imgs[i].src = "../images/nwr/" + imgarr[i];
             }
            }

}
populatePage();