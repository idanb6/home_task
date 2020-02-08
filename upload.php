<?php
$conn = mysqli_connect("localhost", "root", "", "mytower");

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into cdrs (Customer_ID,Call_Date,Duration_in_seconds,Dialed_Phone_Number,Customer_IP)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "')";
            $result = mysqli_query($conn, $sqlInsert);
            
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                $message = "Problem in Importing CSV Data";
            }
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-horizontal" action="" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row">
        <label class="col-md-4 control-label">Choose CSV File</label> <input
            type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="submit" name="import"
            class="btn-submit">Import</button>
        <br />

    </div>
    <div id="labelError"></div>
</form>

</body>
</html>
<?php

$sqlSelect = "SELECT * FROM cdrs";
$result = mysqli_query($conn, $sqlSelect);
            
if (mysqli_num_rows($result) > 0) {
?>
<table class="table">
    <thead>
        <tr>
            <th>Customer_ID</th>
            <th>Call_Date</th>
            <th>Duration_in_seconds</th>
            <th>Dialed_Phone_Number</th> 
            <th>Customer_IP</th>

        </tr>
    </thead>
    <?php
	while ($row = mysqli_fetch_array($result)) {
    ?>

    <tbody>
        <tr>
            <td><?php  echo $row['Customer_ID']; ?></td>
            <td><?php  echo $row['Call_Date']; ?></td>
            <td><?php  echo $row['Duration_in_seconds']; ?></td>
            <td><?php  echo $row['Dialed_Phone_Number']; ?></td>
            <td><?php  echo $row['Customer_IP']; ?></td>

        </tr>
     <?php
     }
     ?>
    </tbody>
</table>
<?php } ?>