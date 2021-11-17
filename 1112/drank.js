const form =document.getElementById("myForm");
const itemName1 = document.getElementById("itemName1");
const itemPrice1 =document.getElementById("itemPrice1");
const itemCount1 =document.getElementById("itemCount1");
const itemTotal1 =document.getElementById("itemTotal1");

const resultBtn = document.getElementById("resultBtn");
const pResult = document.getElementById("pResult");
form.addEventListener("submit",function(e){
    // console.log(e);
    //預防表單重新整理的預設行為
    e.preventDefault();
    calResult = parseInt(itemPrice1.value) * parseInt(itemCount1.value);
    itemTotal1.value = calResult;
    
    }
)