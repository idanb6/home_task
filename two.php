<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

$sqlSelect = "SELECT `Customer_ID`, COUNT(*) as COUNT , SUM(`Duration_in_seconds`) as Sum_Duration_in_seconds	 FROM cdrs GROUP BY `Customer_ID`
";

$result = mysqli_query($conn, $sqlSelect);
            
if (mysqli_num_rows($result) > 0) {
?>
<table id='userTable' class="table">
    <thead>
        <tr>
            <th>Customer_ID</th>
            <th>Total number of all calls</th>
            <th>The total duration of all calls</th>
            <th>press to show log</th>


        </tr>
    </thead>
    <?php
	while ($row = mysqli_fetch_array($result)) {
    ?>

    <tbody>
        <tr>
            <td><?php  echo $row['Customer_ID']; ?></td>
            <td><?php  echo $row['COUNT']; ?></td>
            <td><?php  echo $row['Sum_Duration_in_seconds']; ?></td>
            <td><a href='index.php?ci=<?php  echo $row['Customer_ID']; ?>' class="btn btn-danger">show</a></td>

        </tr>
     <?php
     }
     ?>
    </tbody>
</table>
<?php } ?>

