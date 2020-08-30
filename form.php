<?php

// print_r($_SERVER);exit;
// function num(){
//   $conn = new mysqli('localhost', 'root', 'knackforge', 'Training');
//   $query = "select count(*) from employee";
//   $sql = mysqli_query($conn , $query);
//   echo ($sql);
// }

if (isset($_SERVER['REQUEST_METHOD'])) {
  switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
      if ($_GET['id']) {
        viewdata($_GET['id']);
      }
      // else if('count'==1){
      //   num();
      // }
      else {
        showData();
      }
      break;
    case 'POST':
      if ($_GET['id']) {
        updateData($_GET['id']);
      } else {
        insertData();
      }
      break;
    case 'DELETE':
      deleteData($_GET['id']);
      break;
  }
} else {
  echo "Failed to get method";
}
function insertData()
{
  $conn = new mysqli('localhost', 'root', 'knackforge', 'Training');
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $thouseno = $_POST['thouseno'];
  $tstreet = $_POST['tstreet'];
  $tdist = $_POST['tdist'];
  $tstate = $_POST['tstate'];
  $tcountry = $_POST['tcountry'];
  $tpin = $_POST['tpin'];
  $phouseno = $_POST['phouseno'];
  $pstreet = $_POST['pstreet'];
  $pdist = $_POST['pdist'];
  $pstate = $_POST['pstate'];
  $pcountry = $_POST['pcountry'];
  $ppin = $_POST['ppin'];
  $cno = $_POST['cno'];
  $edu = $_POST['edu'];
  $lang = $_POST['lang'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $maritalstats = $_POST['maritalstats'];
  $marday = $_POST['marday'];
  $spouse = $_POST['spouse'];


  if ($conn->connect_error) {
    die("ERROR" . $conn->connect_error);
  }
  // $sql = "CREATE TABLE  EMPLOYEE(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fname VARCHAR(30) NOT NULL, lname VARCHAR(30) NOT NULL, email VARCHAR(50), birth DATE, tHno VARCHAR(4), tst VARCHAR(20), tDistdr VARCHAR(25), tState VARCHAR(25), tCount VARCHAR(25), tPin VARCHAR(10), pHno VARCHAR(4), pst VARCHAR(20), pDistdr VARCHAR(25), pState VARCHAR(25), pCount VARCHAR(25), pPin VARCHAR(10), cNum VARCHAR(10), eduQual VARCHAR(50), langKno VARCHAR(50), father VARCHAR(30), mother VARCHAR(30), maritalstats VARCHAR(10), mardate VARCHAR(15), spouse VARCHAR(30))";

  $sql = "INSERT INTO employee ( fname , lname , email , birth , tHno , tst , tDistdr , tState , tCount , tPin , pHno , pst , pDistdr , pState , pCount , pPin , cNum , eduQual , langKno , father , mother , maritalstats , mardate , spouse ) VALUES (  '$fname' , '$lname' , '$email' , '$dob' , '$thouseno' , '$tstreet' , '$tdist' , '$tstate' , '$tcountry' , '$tpin' , '$phouseno' , '$pstreet' , '$pdist' , '$pstate' , '$pcountry' , '$ppin' , '$cno' , '$edu' , '$lang' , '$fathername' , '$mothername' , '$maritalstats' , '$marday' , '$spouse' );";

  //$sql = "INSERT INTO EMPLOYEE (fname, lname, email, birth , cNum) VALUES ( '$fname' ,'$lname', '$email' , '$dob' , '$cno');  ";
  if ($conn->query($sql) === TRUE) {
    echo "Inserted into Table successfully";
  } else {
    echo "Error Inserting into table: " . $conn->error;
  }
  $conn->close();
}

function showData()
{

  $conn = new mysqli('localhost', 'root', 'knackforge', 'Training');
  $data = mysqli_query($conn, "select * from employee ;");
  while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
    $userData[] = [
      'id' => $row['id'],
      'fname' => $row['fname'],
      'lname' => $row['lname'],
      'dob' => $row['birth']
    ];
  }
  echo json_encode($userData);
}

function viewData($opt)
{ //print_r($opt);exit;
  $conn = new mysqli('localhost', 'root', 'knackforge', 'Training');
  $data = mysqli_query($conn, "select * from employee WHERE id=" . $opt);
  while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
    $dataArray[] = [
      'id' => $row['id'],
      'fname' => $row['fname'],
      'lname' => $row['lname'],
      'dob' => $row['birth'],
      'email' => $row['email'],
      'thouseno' => $row['tHno'],
      'tstreet' => $row['tst'],
      'tdist' => $row['tDistdr'],
      'tstate' => $row['tState'],
      'tcountry' => $row['tCount'],
      'tpin' => $row['tPin'],
      'phouseno' => $row['pHno'],
      'pstreet' => $row['pst'],
      'pdist' => $row['pDistdr'],
      'pstate' => $row['pState'],
      'pcountry' => $row['pCount'],
      'ppin' => $row['pPin'],
      'cno' => $row['cNum'],
      'edu' => $row['eduQual'],
      'lang' => $row['langKno'],
      'fathername' => $row['father'],
      'mothername' => $row['mother'],
      'maritalstats' => $row['maritalstats'],
      'marday' => $row['mardate'],
      'spouse' => $row['spouse']
    ];
    // print_r($row['maritalstats']);exit;
  }
  echo json_encode($dataArray);
}

function deleteData($opt)
{
  $conn = new mysqli('localhost', 'root', 'knackforge', 'Training');
  $query = mysqli_query($conn, "DELETE FROM employee WHERE id =" . $opt);
}

function updateData($opt)
{
  $conn = new mysqli('localhost', 'root', 'knackforge', 'Training');
  //print_r($opt);exit;
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $thouseno = $_POST['thouseno'];
  $tstreet = $_POST['tstreet'];
  $tdist = $_POST['tdist'];
  $tstate = $_POST['tstate'];
  $tcountry = $_POST['tcountry'];
  $tpin = $_POST['tpin'];
  $phouseno = $_POST['phouseno'];
  $pstreet = $_POST['pstreet'];
  $pdist = $_POST['pdist'];
  $pstate = $_POST['pstate'];
  $pcountry = $_POST['pcountry'];
  $ppin = $_POST['ppin'];
  $cno = $_POST['cno'];
  $edu = $_POST['edu'];
  $lang = $_POST['lang'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $maritalstats = $_POST['maritalstats'];
  $marday = $_POST['marday'];
  $spouse = $_POST['spouse'];
  $query = mysqli_query($conn, "UPDATE employee SET fname = '$fname'  , lname = '$lname' , email = '$email' , birth = '$dob' , tHno = '$thouseno' , tst = '$tstreet' , tDistdr = '$tdist' , tState = '$tstate' , tCount = '$tcountry' , tPin = '$tpin' , pHno = '$phouseno' , pst = '$pstreet' , pDistdr ='$pdist' , pState = '$pstate' , pCount = '$pcountry' , pPin = '$ppin' , cNum = '$cno' , eduQual = '$edu' , langKno = '$lang' , father = '$fathername' , mother = '$mothername' , maritalstats = '$maritalstats' , mardate = '$marday' , spouse = '$spouse' WHERE id = " . $opt);
}
