function valid(){
	alert	("Form Submitted Successfully");
         }
         

function myFunction() {
   var radio = document.getElementById("single");
   var radio2 = document.getElementById("married");
   var text = document.getElementById("in");
   if (radio.checked == true)
   {
      text.style.display ="none";
   } 
   else if (radio2.checked==true) {
      text.style.display ="block";
   }
}

function age(){
  var a = document.getElementById("dob").value;
  date = new Date(a);
 var b = date.getFullYear();

 var c = Date.now();
  date = new Date(c);
var d = date.getFullYear();
var f= d-b;

if (f<20)
{
   alert("Your Age should be more than 20");
   document.getElementById("dob").value="null";
   f=" ";
}
document.getElementById("agenow").innerHTML= f;
}
