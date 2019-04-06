


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
<?php
  	session_start();

    if (isset($_SESSION['create']))
    { 

       require('connect-data.php');
       $email = $_SESSION['email'];
       $password = $_SESSION['password'];

       
       $query = "INSERT INTO accounts (email, password) VALUES (:email, :password)";
       $statement = $db->prepare($query);

       $statement->bindValue(':email', $email);
       $statement->bindValue(':password', $password);
       $statement->execute();
       $statement->closeCursor();
    }

    if(!empty($_POST)){
    	$type = $_POST['type'];
    	$bdrms = $_POST['bdrms'];
    	$bath = $_POST['bath'];
    	$location = $_POST['location'];
    	$avail = $_POST['avail'];
    	
    	header('Location: results.php');
    	

    }


 ?>
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

<div class="container">

</div>


<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://housing.virginia.edu/sites/housing.virginia.edu/files/styles/homepage_image/public/Lawn_header.jpg?itok=a5ZNOXAG" class="d-block w-100" alt="...">

            </div>
            
        </div>
        
    </div>

</section>
<section class="search-sec">
    <div class="container">
    
        <form method="post" >
			<table id="search-table" cellpadding="0px" cellspacing="0px">
				<tr>
					<td id="search-sml">
						<select name="type" class="form-control search-slt">
							<option value="" selected="selected">Type</option>
								<option value="House" > &nbsp; House</option>
								<option value="Apartment" > &nbsp; Apartment</option>
						</select>
					</td>
					<td id="search-sml">
						<select name="bdrms" class="form-control search-slt">
							<option value="" selected="selected">Bedrooms</option>
								<option value="0" > &nbsp; Efficiency</option>
								<option value="1" > &nbsp; 1 Bedroom</option>
								<option value="2" > &nbsp; 2 Bedroom</option>
								<option value="3" > &nbsp; 3 Bedroom</option>
								<option value="4" > &nbsp; 4 Bedroom</option>
								<option value="5" > &nbsp; 5 Bedroom</option>
								<option value="6" > &nbsp; 6+ Bedrooms</option>
							
						</select>
					</td>
					<td id="search-sml">
						<select name="bath" class="form-control search-slt">
							<option value="" selected="selected">Bathrooms</option>
								<option value="0" > &nbsp; Efficiency</option>
								<option value="1" > &nbsp; 1 </option>
								<option value="2" > &nbsp; 2 </option>
								<option value="3" > &nbsp; 3 </option>
								<option value="4" > &nbsp; 4 </option>
								<option value="5" > &nbsp; 5+</option>
							
						</select>
					</td>
					<td id="search-wide">
						<select name="location" class="form-control search-slt">
							<option value="" selected="selected">Location</option>	
								<option value="1" > &nbsp; Rugby Road/The Corner</option>
								<option value="2" > &nbsp; South Lawn / JPA </option>
								<option value="3" > &nbsp; North Grounds</option>
								<option value="5" > &nbsp; Downtown / West Main St.</option>
																								
						</select>
					</td>	
					<td id="search-sml">

						<select name="avail" class="form-control search-slt">
							<option value="0" selected="selected">Availability</option>
							<option value="Immediate" > &nbsp; Immediate</option>
							<option value="Summer" > &nbsp; Summer 2019</option>
							<option value="Portfolio" > &nbsp; Portfolio</option>

						</select>
					</td>
					
					<td id="search-sml">
						<input type="text" name="price" class="form-control search-slt" placeholder="Min Price"> 
					</td>
							<!-- <td id="search-go">
								<a class="search-btn" href="javascript:doSearch();" >
									SEARCH
								</a>
							</td> -->	
					<td>
						<div >
                            <input type="submit" name="create" value="Submit" class="btn float-right login_btn">
                        </div>
                    </td>
				</tr>
			</table>
		</form>

    </div>
</section>

<div class="container text-center">    
  <h3>Featured Properties</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="https://www.rentjungle.com/google/getStaticMapImage/38.0284661/-78.5099107.png" class="img-responsive" style="width:100%" alt="Image" >
      <p>Jefferson Park Avenue</p>
    </div>
    <div class="col-sm-4"> 
      <img src="https://maps.googleapis.com/maps/api/staticmap?size=336x286&channel=www.groupon.com--local--merchant%2Fshow--smallMap&sensor=false&markers=icon%3Ahttp%3A%2F%2Fimg.grouponcdn.com%2Fmpp%2Fg9dn3n9uqPEeFJPkZwNf%2Fcr-33x50.png%7C38.035687%2C-78.501077&zoom=15&client=gme-grouponinc1&signature=ackdEtzjyjtERU9KKByqG8bHCnc=" class="img-responsive" style="width:100%" alt="Image">
      <p>The Corner</p>    
    </div>
    <div class="col-sm-4"> 
      <img src="https://images1.apartments.com/m2/2jspjWrI2tgpWxc0xvnrmMUmKmlHAMBWD3fcjV22Qpk/H240W360/norcross-station-charlottesville-va-map-image-of-the-property.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Downtown</p>    
    </div>
  </div>
</div><br>

</body>
	
	
</html>
