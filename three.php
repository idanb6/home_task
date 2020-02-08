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
$api="d9f000dbc0237078dfb39bf8033d244c";
$ip="1111";
$url="http://api.ipstack.com/".$ip."?access_key=".$api;
$sqlSelect = "SELECT * FROM cdrs WHERE `Customer_ID`=7232
";
$result = mysqli_query($conn, $sqlSelect);
            
if (mysqli_num_rows($result) > 0) {
?>
    <?php
	while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="card" >

<ul class="list-group list-group-flush">
    <li class="list-group-item"><?php  echo $row['Customer_ID']; ?>,<?php  echo $row['Call_Date']; ?>,
    <?php  echo $row['Duration_in_seconds']; ?>,<?php  echo $row['Dialed_Phone_Number']; ?>,
    <?php  echo $row['Customer_IP']; ?>
</li>
    <li class="list-group-item"><?php  echo "http://api.ipstack.com/".$row['Customer_IP']."?access_key=".$api; ?></li>
    <li class="list-group-item"></li>
    <li class="list-group-item"></li>
    <li class="list-group-item"></li>
  </ul>
  </div><br>

     <?php
     }
     ?>
<?php } ?>