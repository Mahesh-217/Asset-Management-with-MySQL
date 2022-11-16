<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Table</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="patientsdip.css">
    <title>Patient details</title>




</head>
<style type="text/css">

table
{
    border-collapse: collapse;
    width: 100%;
    color: #2022a8;
    font-size: 20px;
    text-align: left;
}

</style>
<body>
<img src="img/bg/2.jpg" alt="">
    <table>
        <tr>
            <th>scheme_code</th>
            <th>investor_code</th>
            <th>initial_lending_date</th>
            <th>matur_day</th>
            <th>matur_month</th>
            <th>matur_year</th>
            <th>interest_rate</th>
            <th>total_months</th>
            <th>total_interest</th>
            
        </tr>
        <?php 
        include ("temp1.php");
        ?>

</table>
</body>
</html>