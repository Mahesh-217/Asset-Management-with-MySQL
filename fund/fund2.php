<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT scheme_code,fund_alloc,net_profit,approve_status from fund_info2";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["scheme_code"]."</td><td>".$row["fund_alloc"]."</td><td>".$row["net_profit"].
                        "</td><td>".$row["approve_status"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();