

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>




<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="projectphpdb";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
?>
<div class="container">
<table class="table table-hover">
<tr><td>ID</td><td>NAME</td><td>DELETE</td></tr>
<?php
$query="SELECT * FROM `jobs`";
$result=mysqli_query($conn, $query);
if (mysqli_num_rows($result)>0) {
    while ($row= mysqli_fetch_array($result)){
        echo "<tr>"."<td>".$row[0]."</td><td>".$row["NAME"] . "</td><td><a href='deleteJobByTable.php?id={$row[0]}' class='btn btn-outline-primary btn-block'>DELETE</a></td></tr>";
    }
}else {
    echo "No jobs .";
}
?>
</table>
</div>
<?php 
if (isset($result)){
    mysqli_free_result($result);
}
if (isset($conn)){
mysqli_close($conn);
}
?>



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>