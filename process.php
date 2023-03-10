<?php
include 'connectDB.php';
if(isset($_POST["Manage Users"]))
{
    $serialnumber=$_POST["serialNumber"];
    $finger_print_id=$_POST["fingerid"];
    $user_name=$_POST["name"];
    $user_email=$_POST["email"];
    $additional_info=$_POST["timein"];
    $gender=$_POST["gender"];
    $chk="";
    foreach($finger_print_id as $chk1)
    {
        $chk.=$chk1.","; //if we do multiple selection this will access data continuously.
    }
    $sql="insert into manage_users(S.No, Finger .ID, Name, Gender, Date, Time in) 
    values($serialnumber, $finger_print_id, $user_name, $gender,$chk)";
    if(mysqli_query($con, $sql))
    {
        echo"<script>alert('new record inserted')</script>";
    }

}
?>