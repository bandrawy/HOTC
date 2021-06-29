<?php
session_start();
if (!isset($_SESSION['nID']))
{
    header("Location: adminLogin.php");
}else{
    
}
?>

<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="utf-8">
  <title>Admin Page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/Tableutil.css" rel="stylesheet">
    <link href="css/TableMain.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
border-radius:5px;
}
th {
background-color: #2eca6a;
color: white;
height:60px;
}
tr {
	background-color: #f2f2f2;
border-radius:5px;
}
.table-responsive
{
	max-height:1000;
}
</style>
</head>
<body >
<div class="container-fluid" style="margin-top:2%;">
<div style="margin-bottom:1%; float:right;">
<a href="logout.php" class="btn btn-a">Log Out</a>
</div>
<table class="table-responsive table-outline mb-0 overflow-auto">
<tr>
<th style="width:5%;">#</th>
<th style="width:15%;">Name</th>
<th style="width:10%;">Mobile</th>
<th style="width:15%;">Email</th>
<th style="width:15%;">Date</th>
<th style="width:40%;">Message</th>
</tr>
<?php
//$conn = mysqli_connect("107.180.40.29", "eadesign", "B0lt_D3v", "eaDesign");
$conn = mysqli_connect("localhost", "root", "", "hocapital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name , mobile, email, Date , message FROM interesteduser";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["mobile"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["Date"]. "</td><td>" . $row["message"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>

</body>
</html>

}
