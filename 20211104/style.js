const form = document.getElementById("myForm");
const itemName1 = document.getElementById("itemName1");
const itemPrice1 = document.getElementById("itemPrice1");




form.addEventListener("submit",function(e){
    // console.log(e);
    //預防表單重新整理的預設行為
    e.preventDefault();
    calResult = parseInt(itemPrice1.value) * parseInt(itemCount1.value);
    itemTotal1.value = calResult;

    total = parseInt(itemTotal1.value) + parseInt(itemTotal2.value)  + parseInt(itemTotal3.value)  ;

   
    }
)


