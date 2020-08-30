$(document).ready(function(){

    $("#sub").click(function(event){
        event.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email = $('#email').val();
        var dob = $('#dob').val();
        var thouseno = $('#thouseno').val();
        var tstreet = $('#tstreet').val();
        var tdist = $('#tdist').val();
        var tstate = $('#tstate').val();
        var tcountry = $('#tcountry').val();
        var tpin = $('#tpin').val();
        var phouseno = $('#phouseno').val();
        var pstreet = $('#pstreet').val();
        var pdist = $('#pdist').val();
        var pstate = $('#pstate').val();
        var pcountry = $('#pcountry').val();
        var ppin = $('#ppin').val();
        var cno = $('#cno').val();
        var edu = $('#edu').val();
        var lang = $('#lang').val();
        var fathername = $('#fathername').val();
        var mothername = $('#mothername').val();
if($('#single').val() == 'on')
{
    var maritalstats = 'Single';
}
else if($('#married').val() == 'on')
{
    maritalstats = 'Married';
}

        //var maritalstats = $('#maritalstats').val();
        var marday = $('#marday').val();
        var spouse = $('#namespouse').val();
    $.ajax({
        type : "POST",
        url : "form.php",
        data : {
            'fname' : fname ,
            'lname' : lname,
            'email' : email,
            'dob' : dob,
            'thouseno' : thouseno,
            'tstreet' : tstreet,
            'tdist' : tdist,
            'tstate' : tstate,
            'tcountry' : tcountry,
            'tpin' : tpin,
            'phouseno' : phouseno,
            'pstreet' : pstreet,
            'pdist' : pdist,
            'pstate' : pstate,
            'pcountry' : pcountry,
            'ppin' : ppin,
            'cno' : cno,
            'edu' : edu,
            'lang' : lang, 
            'fathername' : fathername,
            'mothername' : mothername,
            'maritalstats' : maritalstats,
            'marday' : marday,
            'spouse' : spouse
        }
    })
    });
    
});