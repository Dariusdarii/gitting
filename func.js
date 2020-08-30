/* window.onload = (event) => {
   edi('anto lean')
}; */

function mytask()
{
    var first = document.getElementById('fname').value; //declaring object values
    var last = document.getElementById('lname').value;
    var birth = document.getElementById('dob').value;
    var tHno = document.getElementById('thouseno').value;
    var tst = document.getElementById('tstreet').value;
    var tDistdr = document.getElementById('tdist').value;
    var tState = document.getElementById('tstate').value;
    var tCount = document.getElementById('tcountry').value;
    var tPin = document.getElementById('tpin').value;
    var pHno = document.getElementById('phouseno').value;
    var pst = document.getElementById('pstreet').value;
    var pDistdr = document.getElementById('pdist').value;
    var pState = document.getElementById('pstate').value;
    var pCount = document.getElementById('pcountry').value;
    var pPin = document.getElementById('ppin').value;
    var cNum = document.getElementById('cno').value;
    var eduQual = document.getElementById('edu').value;
    var langKno = document.getElementById('lang').value;
    var father = document.getElementById('fathername').value;
    var mother = document.getElementById('mothername').value;
    var mar = document.getElementById('maritalstats');
    var mardate = document.getElementById('marday').value;
    var spouse = document.getElementById('namespouse').value;

    

    var arr = JSON.parse(localStorage.getItem('test'));
    if (arr == null)
        arr = [];
        var n=1;
    for (let i = 0 ; i < arr.length ; i++) 
    { 
     n = i+2;}   
 

    var myObj = { 'uni' : n , 'fname' : first, 'lname' : last , 'dob' : birth , 'tHno' : tHno, 'tstreet' : tst, 'tDist' : tDistdr ,'tstate' : tState, 'tcountry' : tCount, 'Tpin' : tPin , 'pHouse' : pHno , 'pstreet' : pst , 'pDist' : pDistdr , 'pstate' : pState , 'pcountry' : pCount , 'pPin' : pPin , 'cno': cNum , 'edu' : eduQual, 'lang' : langKno , 'father' : father , 'mother' : mother , 'married' : mar , 'marday' : mardate , 'spouse' : spouse};

    arr.push(myObj);
    localStorage.setItem('test' , JSON.stringify(arr));
}   


function tabl()
{
    let details  = JSON.parse(localStorage.getItem('test'));
    let html = '<legend><table><th><h3>ID </h3></th><th><h3>First Name </h3></th><th><h3> Last Name </h3></th><th><h3> D.O.B </h3></th><th><h3> Actions </h3></th> </legend>';
details.forEach(function( item , index){
    html += '<tr><td>' + item['uni'] + '</td><td>' + item['fname'] + '</td><td>' + item['lname'] + '</td><td>' + item['dob'] +'</td>'; //<td><button type ="button"> View </button>';//<button type = "button" onclick="del(' +  + ')"; "location.load();"> Delete </button></td></tr>' ;

   // html += '<td><button type = "button" > Edit </button>'

    html += '<td><button type="button" onclick="view(\'' + item.fname + '\')">View</button>';
    html += '<button type="button" onClick="editData(\'' + item.fname + '\')">Edit</button>';
    html += '<button type="button" onClick="del(\'' + item.fname + '\')">Delete</button></td></tr>';
});
html += '</table>';
document.getElementById("tbl").innerHTML = html;
}

function del(option)
{
     let delete_entry = JSON.parse(localStorage.getItem('test'));
     for ( var i = 0 ; i < delete_entry.length ; i++)
     { 
        if (delete_entry[i].fname == option)
        delete_entry.splice(i, 1);
     }
  localStorage.setItem('test',JSON.stringify(delete_entry));
  location.reload();
}

function view(opt)
{
    var viewArr = JSON.parse(localStorage.getItem('test'));
    for (let i = 0 ; i < viewArr.length ; i++)
    {
        if ( viewArr[i].fname == opt)
        {       
            var finalView = [viewArr[i]];
            var viewHtml = '<legend><table><th><h3>First Name </h3></th><th><h3> Last Name </h3></th><th><h3> D.O.B </h3></th> <th><h3> House no. </h3></th><th><h3> Street </h3></th><th><h3> District </h3></th> <th><h3> State </h3></th> <th><h3>Country </h3></th><th><h3>Pin Code</h3></th><th><h3>Contact Number</h3></th> <th><h3>Educational Qualification</h3></th><th><h3>Languages</h3></th><th><h3>Father</h3></th><th><h3>Mother</h3></th></legend>';
            finalView.forEach(function ( item , index){ viewHtml += '<tr><td>' + item['fname'] + '</td><td>' + item['lname'] + '</td><td>' + item['dob'] +'</td><td>' + item['pHouse'] + '</td><td>' + item['pstreet'] + '</td><td>' + item['pDist'] + '</td><td>' + item['pstate'] + '</td><td>' + item['pcountry'] + '</td><td>' + item['pPin'] + '</td><td>' + item['cno'] + '</td><td>' + item['edu'] + '</td><td>' + item['lang'] + '</td><td>' + item['father'] + '</td><td>' + item['mother'] + '</td>' ;});
            viewHtml +='</table>';
            document.getElementById("viewTbl").innerHTML = viewHtml;
        }
    }
}

function editData(ediopt)
{
    
var viData = JSON.parse(localStorage.getItem('test'));

for (let i = 0 ; i < viData.length ; i++ )
    {
        if (viData[i].fname == ediopt)
            var vdata = viData[i];
    }
console.log(vdata)
//document.getElementById('firstName').value = ediopt;
 //console.log(vidata.fname)
document.getElementById('firstName').value = vdata.fname;
document.getElementById('lastName').value = vdata.lname;
document.getElementById('dateOfBirth').value = vdata.dob;
document.getElementById('houseNumber').value = vdata.pHouse;
document.getElementById('street').value = vdata.pstreet;
document.getElementById('districtName').value = vdata.pDist;
document.getElementById('state').value = vdata.pstate;
document.getElementById('country').value = vdata.pcountry;
document.getElementById('pinCode').value = vdata.pPin;
document.getElementById('contact').value = vdata.cno;

var text1 = document.getElementById('view1');
text1.style.display = "block";
}

function update(arg)
{
console.log(arg)
 var viData = JSON.parse(localStorage.getItem('test'));
 for (let i = 0 ; i < viData.length ; i++ )
 {
     if (viData[i].fname == arg)
         var vdata = viData[i];
 }
 vdata['fname'] = document.getElementById('firstName').value;
 vdata['lname'] = document.getElementById('lastName').value;
 vdata['dob'] = document.getElementById('dateOfBirth').value;
 vdata['pHouse'] = document.getElementById('houseNumber').value;
 vdata['pstreet'] = document.getElementById('street').value;
 vdata['pDist'] = document.getElementById('districtName').value;
 vdata['pstate'] = document.getElementById('state').value;
 vdata['pcountry'] = document.getElementById('country').value;
 vdata['pPin'] = document.getElementById('pinCode').value;
 vdata['cno'] = document.getElementById('contact').value;

 for (let i = 0 ; i < viData.length ; i++ )
 {
     if (viData[i].fname == arg)
         viData[i] = vdata;
 }

 //viData[]=vdata;
 console.log(viData)
 localStorage.setItem('test',JSON.stringify(viData));
 location.reload();
}