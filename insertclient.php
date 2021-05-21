<!doctype html>
<html lang="en">
<head>
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
        
                       
                
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
              
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                       
                        

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="searchclient.php" class="nav-item nav-link">Search record</a>
                                <a href="insertclient.php" class="nav-item nav-link">Insert client</a>
                               
                             
                                
                 
                            
                    </nav>
                
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
$newDate = date('F d, Y ', strtotime($originalDate));
// SQL query 
$sql = "SELECT * FROM checkdate 
WHERE DATE(createdat) = '$newDate'"; 
$result = mysqli_query($conn, $sql); 
$name = $_POST['name'];
$datepicker = $newDate;
$casenumber = $_POST['casenumber'];
$courtname = $_POST['courtname'];
if(!$result ||mysqli_num_rows($result) == 0) {
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

?> 

  <title>Insert Client hearing date</title>
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
<h2>Insert Client hearing date</h2>
<form action="" method="post">
<p>Name: <input type="text" name="name" id="name" value="" autocomplete="off"></p><p>Date: <input type="text" id="datepicker" name="datepicker" autocomplete="off"></p>
<p>Case Number: <input type="text" name="casenumber" id="casenumber" value="" autocomplete="off"></p><p>Court name:<input type="text" id="courtname" name="courtname" autocomplete="off"></p>
<input type="submit" value="Submit" name="submit">

</form>
<table class="table table-bordered" border="2" align="left" width="50%" >
<tr> <td colspan="7"><center><h3>List of clients added with dates</h3></center></td></tr>
  <tr> 
      <tr><center><th>Name</th><th>Date</th><th>Case Number</th><th>Court Name</th></center></tr>
    <?php $fetchqry = "SELECT * FROM `checkdate`"; 
    $result1= mysqli_query($conn,$fetchqry);
    $num = mysqli_num_rows($result1);
    if($num > 0){
    while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC)){ ?>
      <tr><td><p><?php echo $row['name']; ?></p></td><td><?php echo $row['Hearing Date']?> </td><td><?php echo $row['casenumber']; ?></td> 
      <td><?php echo $row['courtname']; ?></td></tr>  
      <?php
    }
    }
    ?>
  </tr>
</table>
</div> 
</body>
</html>