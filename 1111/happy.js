const form = document.getElementById("myForm");
const price = document.getElementById("price");
const amount = document.getElementById("amount");
const coun = document.getElementById("count");

form.addEventListener("submit",function(e){
    e.preventDefault();
    calResult = parseInt(price.value)*parseInt(amount.value);
    count.value=calResult;
})