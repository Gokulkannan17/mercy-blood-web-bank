<html>
<title>available</title>
<head>
	<style>
		.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 600px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  margin-left: 550px;
  align-items: center;
  font-size:20px;
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
.heading{
  color:white;
  background-color: blue;
}
.mass{
  color: white;
  background-color: red;
}
body{
  background-image: url('back3.jpg');
  background-size:cover;
  background-repeat: no-repeat;
}
</style>
</head>
   <body>
   <table class="content-table">
   	<tr>
      <th class="mass"><strong>MERCY</strong></th>
   		<th colspan="6" class="heading"><strong> DONATERS DETAILS</strong></th>
   <tr>
      <th>Name</th>
      <th>Mobile</th>
      <th>Gender</th>
      <th>BloodGroup</th>
      <th>Address</th>
      <th>DateofBirth</th>
   </tr>
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test";

// Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

   $sql = "SELECT Name, Mobile, Gender, BloodGroup, Address ,DateofBirth FROM blood";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> " . $row["Name"]. "</td><td> " . $row["Mobile"]. "</td><td>" . $row["Gender"]. "</td><td>".$row["BloodGroup"]. "</td><td>".$row["Address"]."</td><td>".$row["DateofBirth"]."</td></tr>";
}
}
?>

  </table>
</body>
</html>



<?php
/*if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Name"]. " Mobile: " . $row["Mobile"]. "Gender: " . $row["Gender"]. "BloodGroup: ".$row["BloodGroup"]. "Address: ".$row["Address"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>*/