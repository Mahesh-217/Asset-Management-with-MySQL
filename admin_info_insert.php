<?php
    $admin_uname=$_POST['admin_uname'];
    $admin_pass=$_POST['admin_pass'];
    $tot_approvals=$_POST['tot_approvals'];
    $admin_fname=$_POST['admin_fname'];
    $admin_lname=$_POST['admin_lname'];
   
    $conn=mysqli_connect("localhost","root","","asset");
    if($conn -> connect_error)
    {
        die("Connection failed:".$conn -> connect_error);
    }
    $stmt=$conn -> prepare("insert into admin_info values('$admin_uname','$admin_pass','$tot_approvals','$admin_fname','$admin_lname')");

    $stmt->execute();
    echo "success";
    $stmt->close();
    $conn->close();

?>