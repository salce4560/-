const form = document.getElementById("myForm");
const itemName1 = document.getElementById("itemName1");
const itemPrice1 = document.getElementById("itemPrice1");
const itemCount1 = document.getElementById("itemCount1");
const itemTotal1 = document.getElementById("itemTotal1");

const itemName2 = document.getElementById("itemName2");
const itemPrice2 = document.getElementById("itemPrice2");
const itemCount2 = document.getElementById("itemCount2");
const itemTotal2 = document.getElementById("itemTotal2");

const itemName3 = document.getElementById("itemName3");
const itemPrice3 = document.getElementById("itemPrice3");
const itemCount3 = document.getElementById("itemCount3");
const itemTotal3 = document.getElementById("itemTotal3");

const resultBtn = document.getElementById("resultBtn");
const pResult = document.getElementById("pResult");

form.addEventListener("submit",function(e){
    // console.log(e);
    //預防表單重新整理的預設行為
    e.preventDefault();
    calResult = parseInt(itemPrice1.value) * parseInt(itemCount1.value);
    itemTotal1.value = calResult;
    calResult = parseInt(itemPrice2.value) * parseInt(itemCount2.value);
    itemTotal2.value = calResult;
    calResult = parseInt(itemPrice3.value) * parseInt(itemCount3.value);
    itemTotal3.value = calResult;
    total = parseInt(itemTotal1.value) + parseInt(itemTotal2.value)  + parseInt(itemTotal3.value)  ;

    pResult.innerText = "Result : " + total;
    }
)


