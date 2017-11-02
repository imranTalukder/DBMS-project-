<!DOCTYPE html>
<html>
<head>
<title>table</title>
</head>
<body>
<?php

    $sql=mysqli_connect("localhost","root","");
    $connect=mysqli_select_db($sql,'cse');
    if($sql){
	    echo "Connected!    ";
    }
	if($connect){
	    echo " Connected with database";
	}
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$session=$_POST['session'];
	$id=$_POST['id'];
	
	if($session=="2014-15"){
	    $insert="INSERT INTO `2014_15` (`ID`, `firstname`, `lastname`) VALUES ('$id', '$fname', '$lname')";
		
	}
	$q=mysqli_query($sql,$insert);
	$ss="SELECT * FROM 2014_15";
	$result = mysqli_query($sql,$ss);

    echo "<table border='1'>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>";
    if(mysqli_num_rows($result)>0){
	    while($row=mysqli_fetch_assoc($result){
		    echo "Name". $row["firstname"]. "<br>";
		}
	}

    echo "</table>";

	mysqli_close($sql);
?>
</body>
</html>