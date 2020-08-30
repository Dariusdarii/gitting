$(document).ready(function () {

    $("#in").hide();
    $("#viewTbl").hide();
    $("#single").click(function () { $.fn.maritalStatus(); });
    $("#married").click(function () { $.fn.maritalStatus(); });
    $.fn.maritalStatus = function () {
        if ($("input[id='single']:checked").val() == 'on')
            $("#in").hide(500);
        else if ($("input[id='married']:checked").val() == 'on')
            $("#in").show(500);
    };

    //$('#count').load(function(){

    $.ajax({
        method: "GET",
        url: "form.php",
        success: function (response) {
            var Number = JSON.parse(response);
            // alert(Number.length);
            htm = Number.length;
            htm += ' Users have Registered Successfully';
            $('#numb').text(htm);
        }
    });
    // })


    $("#dob").change(function () { $.fn.age(); });
    $.fn.age = function () {
        var a = new Date($("#dob").val());
        var b = new Date(Date.now());
        var c = b.getFullYear() - a.getFullYear();
        if (c < 20) {
            alert("Your Age should be more than 20");
            $("#agenow").hide();
            $("#dob").val('');
        }
        else
            $("#agenow").show().text(c);
    };

    $("#goback").click(function () {
        location.href = "index.html";
    });

    $("#addre").click(function () {
        var pHouseNum = $("#thouseno").val();
        $("#phouseno").val(pHouseNum);
        var pStreet = $("#tstreet").val();
        $("#pstreet").val(pStreet);
        var pDist = $("#tdist").val();
        $("#pdist").val(pDist);
        var pCity = $("#tcity").val();
        $("#pcity").val(pCity);
        var pState = $("#tstate").val();
        $("#pstate").val(pState);
        var pCountry = $("#tcountry").val();
        $("#pcountry").val(pCountry);
        var pPin = $("#tpin").val();
        $("#ppin").val(pPin);
    });

    $("#form").submit(function (event) {
        alert("Form Submitted Successfully");
    });

    // });
    // $("#sub").click(function(){ $.fn.dataLoSto();});

    $("#sub").click(function (event) {
        event.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var email = $('#email').val();
        var dob = $('#dob').val();
        var thouseno = $('#thouseno').val();
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
        if ($("input[id='single']:checked").val() == 'on') //$("input[id='single']:checked").val()
        {
            var maritalstats = 'Single';
        }
        else if ($("input[id = 'married']:checked").val() == 'on') {
            var maritalstats = 'Married';
        }

        //var maritalstats = $('#maritalstats').val();
        var marday = $('#marday').val();
        var spouse = $('#namespouse').val();
        $.ajax({
            type: "POST",
            url: "form.php",
            data: {
                'fname': fname,
                'lname': lname,
                'email': email,
                'dob': dob,
                'thouseno': thouseno,
                'tstreet': tstreet,
                'tdist': tdist,
                'tstate': tstate,
                'tcountry': tcountry,
                'tpin': tpin,
                'phouseno': phouseno,
                'pstreet': pstreet,
                'pdist': pdist,
                'pstate': pstate,
                'pcountry': pcountry,
                'ppin': ppin,
                'cno': cno,
                'edu': edu,
                'lang': lang,
                'fathername': fathername,
                'mothername': mothername,
                'maritalstats': maritalstats,
                'marday': marday,
                'spouse': spouse
            }
        })
        alert("You have Registered successfully");
        location.href = "index.html";
    });

    $("#newForm").click(function () { location.href = "Form.html"; });

    $.fn.dataLoSto = function () {
        var first = $('#fname').val();
        var last = $('#lname').val();
        var birth = $('#dob').val();
        var tHno = $('#thouseno').val();
        var tst = $('#tstreet').val();
        var tDistdr = $('#tdist').val();
        var tState = $('#tstate').val();
        var tCount = $('#tcountry').val();
        var tPin = $('#tpin').val();
        var pHno = $('#phouseno').val();
        var pst = $('#pstreet').val();
        var pDistdr = $('#pdist').val();
        var pState = $('#pstate').val();
        var pCount = $('#pcountry').val();
        var pPin = $('#ppin').val();
        var cNum = $('#cno').val();
        var eduQual = $('#edu').val();
        var langKno = $('#lang').val();
        var father = $('#fathername').val();
        var mother = $('#mothername').val();
        var mar = $('#maritalstats').val();
        var mardate = $('#marday').val();
        var spouse = $('#namespouse').val();

        var arr = JSON.parse(localStorage.getItem('test'));
        if (arr == null)
            arr = [];
        var n = 1;
        for (let i = 0; i < arr.length; i++) { n = i + 2; }


        var myObj = { 'uni': n, 'fname': first, 'lname': last, 'dob': birth, 'tHno': tHno, 'tstreet': tst, 'tDist': tDistdr, 'tstate': tState, 'tcountry': tCount, 'Tpin': tPin, 'pHouse': pHno, 'pstreet': pst, 'pDist': pDistdr, 'pstate': pState, 'pcountry': pCount, 'pPin': pPin, 'cno': cNum, 'edu': eduQual, 'lang': langKno, 'father': father, 'mother': mother, 'married': mar, 'marday': mardate, 'spouse': spouse };
        arr.push(myObj);
        // localStorage.setItem('test' , JSON.stringify(arr)); };
    };
    // let details  = JSON.parse(localStorage.getItem('test'));

    $.ajax({
        method: "GET",
        url: "form.php",
        success: function (response) {
            var details = JSON.parse(response);
            showdata(details);
        }
    })

    function showdata(details) {
        let html = '<legend><th><h3>ID </h3></th><th><h3>First Name </h3></th><th><h3> Last Name </h3></th><th><h3> D.O.B </h3></th><th><h3> Actions </h3></th> </legend>';
        details.forEach(function (item, index) {
            html += '<tr><td>' + item.id + '</td><td>' + item.fname + '</td><td>' + item.lname + '</td><td>' + item.dob + '</td>';

            html += '<td><button type="button" id= "vie" class="btn btn-primary btn-sm mb-2 mr-2" onclick="view(\'' + item.id + '\')">View</button>';
            html += '<button type="button" id = "edi" class="btn btn-primary btn-sm mb-2 mr-2" onclick="editData(\'' + item.id + '\')">Edit</button>';
            html += '<button type="button" id = "del" class="btn btn-danger btn-sm mb-2 mr-2" onclick="delData(\'' + item.id + '\')">Delete</button></td></tr>';
            $("#tbl").html(html);
            $("#viewTbl").hide();
        });
    }
});
function delData(opt) {
    //window.confirm("test");
    if (confirm("Are you sure you want to delete this entry?")) {
        $.ajax({
            method: "DELETE",
            url: "form.php?id=" + opt
        })
        alert("Deleted");
        location.reload();
    }
    else {
        location.reload();
    }
}


function view(opt) {
    $.ajax({
        type: "GET",
        url: "form.php?id=" + opt,
        success: function (response) {
            //console.log(response);
            var details = JSON.parse(response);
            viewTable(details);
        }
    });
}

function viewTable(viewArr) {
    $("#view1").hide(500);

    $("#viewTbl").show(500);
    var viewHtml = '<legend><table class="table table-bordered table-responsive" style="width : auto;"><th><h3>First Name </h3></th><th><h3> Last Name </h3></th><th><h3> D.O.B </h3></th> <th><h3> House no. </h3></th><th><h3> Street </h3></th><th><h3> District </h3></th> <th><h3> State </h3></th> <th><h3>Country </h3></th><th><h3>Pin Code</h3></th><th><h3>Contact Number</h3></th> <th><h3>Educational Qualification</h3></th><th><h3>Languages</h3></th><th><h3>Father</h3></th><th><h3>Mother</h3></th></legend>';
    viewArr.forEach(function (item, index) {
        viewHtml += '<tr><td class="col-sm-3">' + item['fname'] + '</td><td>' + item['lname'] + '</td><td>' + item['dob'] + '</td><td>' + item['phouseno'] + '</td><td>' + item['pstreet'] + '</td><td>' + item['pdist'] + '</td><td>' + item['pstate'] + '</td><td>' + item['pcountry'] + '</td><td>' + item['ppin'] + '</td><td>' + item['cno'] + '</td><td>' + item['edu'] + '</td><td>' + item['lang'] + '</td><td>' + item['fathername'] + '</td><td>' + item['mothername'] + '</td>';
        viewHtml += '</table>';
        $("#viewTbl").html(viewHtml);
    });
}

function editData(ediopt) {
    $("#view1").show(500);
    $("#viewTbl").hide(500);

    $.ajax({
        method: "GET",
        url: "form.php?id=" + ediopt,
        success: function (response) {
            var details = JSON.parse(response);
            //console.log(details[0].fname);
            $('#id').val(details[0].id);
            $('#fname').val(details[0].fname);
            $('#lname').val(details[0].lname);
            $('#dob').val(details[0].dob);
            $('#email').val(details[0].email);
            $('#thouseNumber').val(details[0].thouseno);
            $('#tstreet').val(details[0].tstreet);
            $('#tdistrictName').val(details[0].tdist);
            $('#tstate').val(details[0].tstate);
            $('#tcountry').val(details[0].tcountry);
            $('#tpinCode').val(details[0].tpin);
            $('#phouseNumber').val(details[0].phouseno);
            $('#pstreet').val(details[0].pstreet);
            $('#pdistrictName').val(details[0].pdist);
            $('#pstate').val(details[0].pstate);
            $('#pcountry').val(details[0].pcountry);
            $('#ppinCode').val(details[0].ppin);
            $('#contact').val(details[0].cno);
            $('#eduQual').val(details[0].edu);
            $('#langKno').val(details[0].lang);
            $('#fathername').val(details[0].fathername);
            $('#mothername').val(details[0].mothername);

            if (details[0].maritalstats == 'Single') {
                $("input:radio[id='single']").click();
            } else if (details[0].maritalstats == 'Married') {
                console.log('test');
                $("input:radio[id='married']").click();
            }
            // console.log($('#single'):checked.val());

            $('#marday').val(details[0].marday);
            $('#spouse').val(details[0].spouse);
        }
    })

    $('#view1').show(500);
}

function update(arg) {

    console.log(arg)

    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $('#email').val();
    var dob = $('#dob').val();
    var thouseno = $('#thouseNumber').val();
    var tstreet = $('#tstreet').val();
    var tdist = $('#tdistrictName').val();
    var tstate = $('#tstate').val();
    var tcountry = $('#tcountry').val();
    var tpin = $('#tpinCode').val();
    var phouseno = $('#phouseNumber').val();
    var pstreet = $('#pstreet').val();
    var pdist = $('#pdistrictName').val();
    var pstate = $('#pstate').val();
    var pcountry = $('#pcountry').val();
    var ppin = $('#ppinCode').val();
    var cno = $('#contact').val();
    var edu = $('#eduQual').val();
    var lang = $('#langKno').val();
    var fathername = $('#fathername').val();
    var mothername = $('#mothername').val();
    if ($("input[id='single']:checked").val() == 'on') {
        var maritalstats = 'Single';
        var marday = ' ';
        var spouse = ' ';
    }
    else if ($("input[id = 'married']:checked").val() == 'on') {
        var maritalstats = 'Married';
        var marday = $('#marday').val();
        var spouse = $('#spouse').val();
    }


    $.ajax({
        method: "POST",
        url: "form.php?id=" + arg,
        data: {
            'fname': fname,
            'lname': lname,
            'email': email,
            'dob': dob,
            'thouseno': thouseno,
            'tstreet': tstreet,
            'tdist': tdist,
            'tstate': tstate,
            'tcountry': tcountry,
            'tpin': tpin,
            'phouseno': phouseno,
            'pstreet': pstreet,
            'pdist': pdist,
            'pstate': pstate,
            'pcountry': pcountry,
            'ppin': ppin,
            'cno': cno,
            'edu': edu,
            'lang': lang,
            'fathername': fathername,
            'mothername': mothername,
            'maritalstats': maritalstats,
            'marday': marday,
            'spouse': spouse
        }
    });
    alert("Details Updated Successfully!");
    location.reload();
}
// function numb(count){ console.log()
//     $('#count').val(count);
// }