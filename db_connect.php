<?php 
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "mmartel2", "2Trwbx81!", "mmartel2");

if(!$db){
    echo "Error - Connection Failed";
}