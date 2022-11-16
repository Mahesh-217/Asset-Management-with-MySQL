<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT scheme_name,scheme_provider,asset_class,admin_code,active_investors,total_fund_inv from scheme_info";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["scheme_name"]."</td><td>".$row["scheme_provider"]."</td><td>".$row["asset_class"].
                        "</td><td>".$row["admin_code"]."</td><td>".$row["active_investors"]."</td><td>".$row["total_fund_inv"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();
        ?>