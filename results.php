


<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="search.css">
	<!-- <link rel="stylesheet" type="text/css" href="apartment_signin.css"> -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">HousingHoos</a>
        <!-- Hamburger collapsible -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Collapse class -->

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>              
                        
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log Out</a>
            </li>
            
          </ul>
        </div>  
</nav>
<?php
  		
		//require('connect-data.php');
		$servername = "localhost";
		$username = "Housing";
		$password = "password";
		$dbname = "Housing";
		$conn = new mysqli($servername, $username, $password, $dbname);
    	$sql = "SELECT * FROM `TABLE 3`";
    	$result = $conn->query($sql);
    	//$result = $db->prepare($sql);
  //   	if ($result->num_rows > 0) {
		//     // output data of each row
		//     while($row = $result->fetch_assoc()) {
		//         echo "type: " . $row["COL 1"]. " Price: " . $row["COL 2"]. "Address" . $row["COL 3"]. "Availability" . $row["COL 4"] . "Photo" . $row["COL 5"] . "Beds" . $row["COL 6"]."Baths" . $row["COL 7"];
		//    	}
		// } else {
		//     echo "0 results";
		// }
		echo "<table border='1'>
		<tr>
		<th>Type</th>
		<th>Price</th>
		<th>Address</th>
		<th>Availability</th>
		<th>Photo</th>
		<th>Beds</th>
		<th>Baths</th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td href="">" . $row['COL 1'] . "</td>";
		echo "<td>" . $row['COL 2'] . "</td>";
		echo "<td>" . $row['COL 3'] . "</td>";
		echo "<td>" . $row['COL 4'] . "</td>";
		echo "<td>" . $row['COL 5'] . "</td>";
		echo "<td>" . $row['COL 6'] . "</td>";
		echo "<td>" . $row['COL 7'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";

		mysqli_close($conn);
		?>


 ?>




</body>	
</html>
