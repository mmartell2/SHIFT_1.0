<?php
include("db_connect.php");

if(isset($_POST['project']) && !empty($_POST['project']) &&
   isset($_POST['date']) && !empty($_POST['date']) &&
   isset($_POST['start_time']) && !empty($_POST['end_time']) &&
   isset($_POST['end_time']) && !empty($_POST['hours']) &&
   isset($_POST['start_m']) && !empty($_POST['start_m']) &&
   isset($_POST['end_m']) && !empty($_POST['end_m'])){
    $pname = $_POST['project'];
    $date = $_POST['date'];
    $stime = $_POST['start_time'];
    $etime = $_POST['end_time'];
    $sm = $_POST['start_m'];
    $em = $_POST['end_m'];

    $insert_sql = "INSERT INTO shifts(pname, start_time, end_time, start_date,  start_meridiem, end_meridiem) VALUES('$pname', time '$stime', time '$etime', date '$date', '$sm', '$em');";

    $query = mysqli_query($db, $insert_sql);

    echo "it should have worked";

} else {
    echo "something is wrong";
}
?>