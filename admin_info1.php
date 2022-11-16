<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT admin_uname,admin_pass,tot_approvals,admin_fname,admin_lname from admin_info";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["admin_uname"]."</td><td>".$row["admin_pass"]."</td><td>".$row["tot_approvals"]."</td><td>".$row["admin_fname"].
                        "</td><td>".$row["admin_lname"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();
        ?>