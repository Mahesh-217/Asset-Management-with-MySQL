<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT investment_code,investor_code from fund_info1";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["investment_code"]."</td><td>".$row["investor_code"]."</td></tr>";

                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();