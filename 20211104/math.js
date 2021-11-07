const from=document.getElementById("form");

const num1 = document.getElementById("num1");
const num2 = document.getElementById("num2");
const submit =document.getElementById("submit1");
const result =document.getElementById("result");

form.addEventListener("submit",function(e){
    e.preventDefault();
    calResult=parseInt(num1.value)*parseInt(num2.value);
    result.innerText="Result:"+calResult;
}

)