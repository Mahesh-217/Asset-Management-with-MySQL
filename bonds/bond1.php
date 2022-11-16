<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT scheme_code,investor_code,initial_lending_date,matur_day,matur_month,matur_year,interest_rate,total_months,total_interest from bond_info";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["scheme_code"]."</td><td>".$row["investor_code"]."</td><td>".$row["initial_lending_date"].
                        "</td><td>".$row["matur_day"]."</td><td>".$row["matur_month"]."</td><td>".$row["matur_year"].
                        "</td><td>".$row["interest_rate"]."</td><td>".$row["total_months"]."</td><td>".$row["total_interest"]."</td></tr>";

                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();
        ?>