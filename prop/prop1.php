<?php
            $conn=mysqli_connect("localhost","root","","asset");
            if($conn -> connect_error)
            {
                die("Connection failed:".$conn -> connect_error);
            }
            $sql = "SELECT scheme_code,investor_code,prop_type,buying_price,cur_selling_price,total_growth_value from prop_info";
            $result=$conn -> query($sql);
            if($result -> num_rows>0)
            {
                while($row=$result -> fetch_assoc())
                {

                        echo "<tr><td>".$row["scheme_code"]."</td><td>".$row["investor_code"]."</td><td>".$row["prop_type"].
                        "</td><td>".$row["buying_price"]."</td><td>".$row["cur_selling_price"]."</td><td>".$row["total_growth_value"]."</td></tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "0 result";
            }
            $conn -> close();
        ?>