function task()
{
    var first = document.getElementById('fname').value; //declaring object values
    var last = document.getElementById('lname').value;
    var birth = document.getElementById('dob').value;

    let existingData =localStorage.getItem('rando'); //storing existing entries
    let userData = '';
    console.log(existingData)
    // if user data is null or have values
    if (existingData){
        test = '[' + existingData +']';
        console.log(JSON.parse(test))
        userData = existingData + ',';
    }
    
        let Obj1 = { 'fname' : first , 'lname' : last , 'birth' : birth}; 
        userData = userData + JSON.stringify(Obj1);
        localStorage.setItem('rando', userData);
        console.log(JSON.parse(JSON.stringify(userData)))
    
}