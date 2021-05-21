<!doctype html>
<html lang="en">
<head>>
        <meta charset="utf-8">
        <title>Kanun - Law Firm Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>Lexsoft</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                               <!-- <div class="text">
                                    <h2>8:00 - 9:00</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+123 456 7890</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Lexsoft Client Manager</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="searchclient.php" class="nav-item nav-link">Search client</a>
                                <a href="insertclient.php" class="nav-item nav-link">Insert client</a>
                               
                             
                                
                 
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="insertclient.php">Insert hearing date</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection 
if (!$conn) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 
if(isset($_POST['submit']) && $_POST['submit'] =='Submit' ){
$originalDate = $_POST['datepicker'];
$newDate = date("Y-m-d", strtotime($originalDate));
// SQL query 
$sql = "SELECT * FROM checkdate 
WHERE DATE(Hearing Date) = '$newDate'"; 
$result = mysqli_query($conn, $sql); 
$name = $_POST['name'];
$datepicker = $newDate;
$casenumber = $_POST['casenumber'];
$courtname = $_POST['courtname'];
if (mysqli_num_rows($result) == 0) {
  // output data of each row
    $sql = "INSERT INTO `checkdate` (`name`, `Hearing Date`, `casenumber`, `courtname`) VALUES ('$name','$datepicker','$casenumber','$courtname');";
	 if (mysqli_query($conn, $sql)) { 
		echo "New record created successfully"; 
	} else { 
		echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
	} 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
if(isset($_POST["search"]))
		{
			echo"<h2> Search results</h2>";
			$res=mysqli_query($conn,"select * from checkdate where name='$_POST[name]'");
			echo "<table border=1>";
			echo "<tr>";
				echo "<th>"; echo "casenumber"; echo "</th>";
				echo "<th>"; echo "name"; echo "</th>";
				
				echo "<th>"; echo "courtname"; echo "</th>";
				echo "<th>"; echo "Hearing Date"; echo "</th>";
			echo "</tr>";	
			while($row=mysqli_fetch_array($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row["casenumber"]; echo "</td>";
				echo "<td>"; echo $row["name"]; echo "</td>";
				
				echo "<td>"; echo $row["courtname"]; echo "</td>";
				echo "<td>"; echo $row["Hearing Date"]; echo "</td>";
				
				
				echo "</tr>";
			}
			
			echo "</table>";
			
		}
?> 

  <title>Search a client</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
<div style="background-color:#e5bcbc;" align="center">
<h2>Search a client</h2>
<form action="" method="post">
<p>Enter Name: <input type="text" name="name" id="name" value="" autocomplete="off"></p>



<input type="submit" value="Search Client" name="search">
</form>

</table>
</div> 
</body>
</html>