<?php
    $admin_uname=$_POST['admin_uname'];
    
    $conn=mysqli_connect("localhost","root","","asset");
    if($conn -> connect_error)
    {
        die("Connection failed:".$conn -> connect_error);
    }
    $stmt=$conn -> prepare("delete from admin_info where admin_uname = (admin_uname)");

    $stmt->execute();
    echo "column deleted";
    $stmt->close();
    $conn->close();

?>