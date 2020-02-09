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


// $url="http://api.ipstack.com/".$ip."?access_key=".$api;
$sqlSelect = "SELECT * FROM cdrs WHERE `Customer_ID`=7232
";
$result = mysqli_query($conn, $sqlSelect);
            
if (mysqli_num_rows($result) > 0) {
?>
    <?php
    include 'function.php';
	while ($row = mysqli_fetch_array($result)) {

    ?>
    <div class="card" >
<ul class="list-group list-group-flush">
    <li class="list-group-item"><?php  echo $row['Customer_ID']; ?>,<?php  echo $row['Call_Date']; ?>,
    <?php  echo $row['Duration_in_seconds']; ?>,<?php  echo $row['Dialed_Phone_Number']; ?>,
    <?php  echo $row['Customer_IP']; ?>
</li>
    <li class="list-group-item">phone number <?php  echo $row['Dialed_Phone_Number']; ?> start with country prefix of <?php echo country_code($row['Dialed_Phone_Number']); ?> 
    (<?php  echo pho3($row['Dialed_Phone_Number']); ?>) which is from continent
    "<?php  echo country_Code_convert(country_code($row['Dialed_Phone_Number'])); ?>" (
        <?php 
     $country_Name=country_code($row['Dialed_Phone_Number']);
    echo country_Name_convert($country_Name); 
    ?>)
    
    
    </li>
    <li class="list-group-item"> IP  <?php  echo $row['Customer_IP']; ?> according to ipstack API is from continent 
    "<?php  echo continent_code($row['Customer_IP']); ?>" (<?php  echo continent_name($row['Customer_IP']); ?>)</li>
    <li class="list-group-item"><?php  echo isOrisnot(continent_name($row['Customer_IP']),continent_name($row['Customer_IP'])); ?></li>
  </ul>
  </div><br>

     <?php
     }
     ?>
<?php } ?>

