<?php
    $admin_code=$_POST['admin_code'];
    $admin_uname=$_POST['admin_uname'];
    $admin_pass=$_POST['admin_pass'];
   
    $conn=mysqli_connect("localhost","root","","asset");
    if($conn -> connect_error)
    {
        die("Connection failed:".$conn -> connect_error);
    }
    $stmt=$conn -> prepare("insert into admin_info values('$admin_uname','$admin_pass','$tot_approvals,)");

    $stmt->execute();
    echo "success";
    $stmt->close();
    $conn->close();

?>