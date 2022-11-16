<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT scheme_code,investor_code,tot_shares,shares_owned,share_val,share_ipo,share_growth_trend from stock_info";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                    echo "<tr><td>".$row["scheme_code"]."</td><td>".$row["investor_code"]."</td><td>".$row["tot_shares"].
                    "</td><td>".$row["shares_owned"]."</td><td>".$row["share_val"]."</td><td>".$row["share_ipo"].
                    "</td><td>".$row["share_growth_trend"]."</td></tr>";

                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();
        ?>