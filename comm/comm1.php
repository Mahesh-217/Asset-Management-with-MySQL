<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT scheme_code,investor_code,comm_type,transaction_status,buy_price,sell_price,country_source,purchase_tdate from comm_info";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["scheme_code"]."</td><td>".$row["investor_code"]."</td><td>".$row["comm_type"].
                        "</td><td>".$row["transaction_status"]."</td><td>".$row["buy_price"]."</td><td>".$row["sell_price"]."</td><td>".$row["country_source"]."</td><td>".$row["purchase_tdate"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();
        ?>