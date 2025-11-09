<?php  

$host = "localhost";
$user = "dartwind";
$pass = "cisterntheBasilica1";
$dbnm = "jail database";

$connect = mysqli_connect($host,$user,$pass,$dbnm);

function isAgeValid($birth_date) {
    $birth_date_check = new DateTime($birth_date);
    $current_date = new DateTime();
    $age = $current_date->diff($birth_date_check)->y;  //difference between current date and birth date
    return $age >= 21;
}

function wasItBefore($date) {
    $date_check = new DateTime($date);
    $current_date = new DateTime();
    return $date_check<$current_date;
}

if (isset($_POST['reg_staff_submit'])){

    $a = $_POST['reg_staff_name'];
    $b = $_POST['reg_staff_surname'];
    $c = $_POST['reg_staff_gender'];
    $d = $_POST['reg_staff_birthday'];
    if (!isAgeValid($d)){
        die("Age is too low" . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }
    $e = $_POST['reg_staff_acess'];
    $f = $_POST['reg_staff_position'];
    if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f)) {
        die("All fields are required" . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }
    $query1= mysqli_query($connect,"INSERT INTO staff(name,surname,gender,birth_date,acess_level,position) 
    VALUES ('$a','$b','$c','$d','$e','$f');");

    if($query1){
        header("Location:../Main_page.php");
    }
}


if (isset($_POST['search_staff_submit'])) {
    
    $a =$_POST['search_staff_name'];
    $b =$_POST['search_staff_surname'];
    $c =$_POST['search_staff_id'];
  
    session_start();
    $_SESSION['staff_name'] = $a;
    $_SESSION['staff_surname'] = $b;
    $_SESSION['staff_id'] = $c;
    $_SESSION['query']='STAFF';

    header("Location: ../result_page.php");
    
}

if (isset($_POST['delete_staff_submit'])){

    $a = $_POST['delete_staff_id'];
    if (empty($a)) {
        die("ID wasn't filled: " . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }
    $query6= mysqli_query($connect,"DELETE FROM staff WHERE staff_id=$a");

    if($query6){
        header("Location:../Main_page.php");
    }
}

if (isset($_POST['reg_incident_submit'])){

    $a = $_POST['reg_incident_inmate_id'];
    $query_inmate_check=mysqli_query($connect,"SELECT * FROM prisoners WHERE inmate_id = '$a'");
    $data = mysqli_fetch_array($query_inmate_check);
    if(!($data['inmate_id']==$a)){
        die("There is no prisoner with this id" . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }

    $b = $_POST['reg_incident_officer_id'];
    $query_officer_check=mysqli_query($connect,"SELECT * FROM staff WHERE staff_id = '$b'");
    $data = mysqli_fetch_array($query_officer_check);
    if(!($data['staff_id']==$b)){
        die("There is no staff with this id" . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }

    $c = $_POST['reg_incident_datetime'];
    if (!(wasItBefore($c))){
        die("Only past incidents can be recorded" . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }
    $d = $_POST['reg_incident_description'];
    $e = $_POST['reg_incident_action'];
    if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e)) {
        die("All fields are required" . mysqli_connect_error());
        header("Location: ../STAFF_page.php");
        exit();
    }
    $query5= mysqli_query($connect,"INSERT INTO incident_reports(inmate_id,officer_id,incident_time,description,action_taken) 
    VALUES ('$a','$b','$c','$d','$e');");

    if($query5){
        header("Location:../Main_page.php");
    }
}

if (isset($_POST['search_inmate_submit'])) {
    
    $a =$_POST['search_inmate_name'];
    $b =$_POST['search_inmate_surname'];
    $c =$_POST['search_inmate_id'];
    session_start();
    $_SESSION['inmate_name'] = $a;
    $_SESSION['inmate_surname'] = $b;
    $_SESSION['inmate_id'] = $c;
    $_SESSION['query']='inmate';

    header("Location: ../result_page.php");
    
}

if (isset($_POST['delete_inmate_submit'])){

    $a = $_POST['delete_inmate_id'];
    if (empty($a)) {
        die("ID wasn't filled: " . mysqli_connect_error());
        header("Location: ../prisoners_page.php");
        exit();
    }
    $query6= mysqli_query($connect,"DELETE FROM prisoners WHERE inmate_id=$a");

    if($query6){
        header("Location:../Main_page.php");
    }
}

if (isset($_POST['reg_inmate_submit'])){

    $a = $_POST['reg_inmate_name'];
    $b = $_POST['reg_inmate_surname'];
    $c = $_POST['reg_inmate_birthday'];
    $d = $_POST['reg_inmate_containment'];
    $e = $_POST['reg_inmate_gender'];
    $f = $_POST['reg_inmate_offence'];
    $g = $_POST['reg_inmate_month'];
    $h = $_POST['reg_inmate_release'];
    $i = $_POST['reg_inmate_description'];
    if (empty($a) || empty($b) || empty($c) || empty($d) || empty($e) || empty($f) || empty($g) || empty($h) || empty($i)) {
        die("All fields are required: " . mysqli_connect_error());
        header("Location: ../prisoners_page.php");
        exit();
    }
    $query2= mysqli_query($connect,"INSERT INTO prisoners(name,surname,birth_date,containment_level,gender,offence,term_month,release_date,description) 
    VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i');");

    if($query2){
        header("Location:../Main_page.php");
    }
}


if (isset($_POST['reg_visit_submit'])){

    $a = $_POST['reg_visit_name'];
    $b = $_POST['reg_visit_surname'];
    $c = $_POST['reg_visit_inmate_id'];
    $query_check=mysqli_query($connect,"SELECT * FROM prisoners WHERE inmate_id='$c';");
    $data = mysqli_fetch_array($query_check);
    if(!($data['inmate_id']==$c)){
        die("There is no prisoner with this id" . mysqli_connect_error());
        header("Location: ../visit_page.php");
        exit();
    }
    $d = $_POST['reg_visit_date'];
    if (empty($a) || empty($b) || empty($c) || empty($d)) {
        die("All fields are required: " . mysqli_connect_error());
        header("Location: ../visit_page.php");
        exit();
    }
    $query3= mysqli_query($connect,"INSERT INTO visits(inmate_id,visit_date,visitor_name,visitor_surname) 
    VALUES ('$c','$d','$a','$b');");

    if($query3){
        header("Location:../Main_page.php");
    }
}

if (isset($_POST['job_table_submit'])) { 
    session_start();
    $_SESSION['query']='job_table';
    header("Location: ../result_page.php");   
}

if (isset($_POST['incident_table_submit'])) { 
    session_start();
    $_SESSION['query']='incident_table';
    header("Location: ../result_page.php");   
}

if (isset($_POST['psyhology_table_submit'])) { 
    session_start();
    $_SESSION['query']='psyhology_table';
    header("Location: ../result_page.php");   
}

if (isset($_POST['execution_table_submit'])) { 
    session_start();
    $_SESSION['query']='execution_table';
    header("Location: ../result_page.php");   
}

?>