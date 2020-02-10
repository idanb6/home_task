<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>My Tower</title>
</head>
<body>
<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">My Tower</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#one">one</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#two">two</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#three">three</a>
    </li>
  </ul>
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <h4 id="one">You are required to create a form for uploading file in this format with these fields.</h4>
  <div class="container">
   <?php require 'upload.php' ?> 
    </div>
 
  <div class="container">
  <h4 id="two">The resulting page should show the statistics table with the following fields:<br>
● CustomerId <br>
● Number of calls within the same continent<br>
● Total Duration of calls within the same continent<br>
● Total number of all calls<br>
● The total duration of all calls</h4><br>
   <?php require 'two.php' ?> 
    </div>
    <div class="container">

    <h4 id="three">3. In order to define the continent of initiating IP use ipstack.com service -  <?php  
        if (isset($_GET['ci'])) {
         echo $Customer_ID=$_GET['ci'];  }?>
</h4>

   <?php require 'three.php' ?> 
    </div>
</div>


</body>
</html>