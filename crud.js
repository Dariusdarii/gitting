function myObj(){
 /* if (typeof(Storage)!=="undefined" )
{

} */

    var existing = localStorage.getItem('myArray');

    var first = document.getElementById('fname').value;
    var last = document.getElementById('lname').value;
    var birth = document.getElementById('dob').value;
    
    var myjson = JSON.stringify(obj);
    var obj = {'fname': first , 'lname': last , 'bday': birth};
    var myArray=[];
    myArray.push(myjson);

    var data = existing ? existing.split(',') :  [];
    existing.push(myArray);
    var myjson = JSON.stringify(obj);

    localStorage.setItem('test' , existing.toString());


    /* var myjson = JSON.stringify(obj);

    myArray.push(myjson);
    
    localStorage.setItem('test',myArray); */
}


/* 
    var obj2 = {'fname': "darius" , 'lname': "darii" , 'bday': 1223}
    var Array=[];

    var myjson = JSON.stringify(obj2);

    Array.push(myjson);
    
    localStorage.setItem('test',Array); */
/* 
    var x= localStorage.getItem('test', Array);
   var y = JSON.parse(x); */



 /*      (typeof (Storage) !== "undefined") 
        
       if (localStorage.myObj) 
       {
       localStorage.save_data = Number(localStorage.myObj)+1;
       } else 
       {
       localStorage.myObj = 1;
       }
       
       var details=[];
       
      {
       var objno = Number(localStorage.myObj);
       
       obj[objno] = {name : document.getElementById('fname').value,
       email :document.getElementById('email').value,
       cno : document.getElementById('cno').value,
       do : document.getElementById('dob').value
       };
       
       
       details.push(obj[objno]);
       
       
         localStorage.setItem('test', JSON.stringify(details));
         console.log(details)
        }
    } */



   /*  var myJSON = JSON.stringify(obj);
    localStorage.setItem("test", myJSON);
    var text = localStorage.getItem("test");
    var obj1 = JSON.parse(text);
    console.log(obj1.name) */

