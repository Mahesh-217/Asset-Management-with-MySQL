<?php
    include 'connection.php';
            @$id = $_POST['username'];
            @$pass = $_POST['password'];
            $sql="select * from cust_info3 where inv_uname='$id' AND inv_pass='$pass'";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            if($num==1)
            { 

                session_start();
                //$data = $result->fetch_assoc();
                //$_SESSION['F_name']=$data['inv_uname'];
                echo '<script>alert("Login Successful")</script>';
                echo "  <script>
                window.location = '../dashboard/dashboard.php'
                  </script> ";
             }
             else{
                echo '<script>alert("Invalid Credentials")</script>';
                echo "  <script>
                window.location = 'login.php'
                  </script> ";
             }
?>