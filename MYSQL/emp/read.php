<body onload="font()">
<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="projectphpdb";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {//die stop conn
    die("Connection failed :".mysqli_connect_error()." No. :".mysqli_connect_errno());
}
?>
<div id="header"></div>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>PHONE</th>
    <th>EMAIL</th>
    <th>UPDATE</th>
  </tr>

<?php
$query="SELECT * FROM `emp` ";
$result=mysqli_query($conn, $query);

if (mysqli_num_rows($result)>0) {
    while ($row= mysqli_fetch_array($result)){
        
        echo "<form action='update.php' method='GET'>";
        echo "<tr>";
        
        echo "<td><input name='ID' type='hidden' value='{$row[0]}' />{$row[0]}</td>";
        
        echo "<td><input onkeydown='add()' name='NAME' type='text' value='{$row["NAME"]}' /></td>";
        
        echo "<td><input name='PHONE' type='text' value='{$row["PHONE"]}' /></td>";
        
        echo "<td><input name='EMAIL' type='text' value='{$row["EMAIL"]}' /></td>";
        
        echo "<td>"."<input type='submit' name='btnupdate' value='update' />"."</td>";
        echo "</tr>";
        echo "</form>";
    
    }
}else {
    echo "No Employees";
}
?>
</table>
<?php 
if (isset($result)){
    mysqli_free_result($result);
}
if (isset($conn)){
    mysqli_close($conn);
}
?>
<button id="btn" onclick="hiddenbtnupdate()">hidden btn update</button>
<button id="btn" onclick="visiblebtnupdate()">visible btn update</button>
<script type="text/javascript">
var divheader = document.getElementById("header");
divheader.innerHTML = "Employee Info..<br>";
var btnupdate = document.getElementsByName("btnupdate");

function hiddenbtnupdate(){
	for (var i = 0; i < btnupdate.length; i++) {
		btnupdate[i].style.visibility = "hidden";
	}
}
function visiblebtnupdate(){
	for (var i = 0; i < btnupdate.length; i++) {
		btnupdate[i].style.visibility = "visible";
		btnupdate[i].style.color = "RED";
	}
}
function add(){
	divheader.innerHTML += "."; 
}
function font(){
	divheader.style.color = "BLUE"; 
}
</script>
</body>