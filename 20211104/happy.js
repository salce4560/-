const itemName1 =document.getElementById(itemName1);
const itemPrice1 =document.getElementById(itemName1);
const itemCount1 =document.getElementById(itemName1);
const itemTotal1 =document.getElementById(itemName1);

const itemName1 =document.getElementById(itemName2);
const itemPrice1 =document.getElementById(itemPrice2);
const itemCount1 =document.getElementById(itemCount2);
const itemTotal1 =document.getElementById(itemTotal2);

const itemName1 =document.getElementById(itemName3);
const itemPrice1 =document.getElementById(itemPrice3);
const itemCount1 =document.getElementById(itemCount3);
const itemTotal1 =document.getElementById(itemTotal3);

form.addEventListener("submit",function(e){
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
