<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Find Your Doctor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1>View all Doctor Records</h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Doctor by Email">
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

<p><b>View All</b> | <a href="view-paginated.php">View Paginated</a></p>

<?php
// connect to the database
include('connect-db.php');

// get the records from the database
if ($result = $mysqli->query("SELECT * FROM doctor_entries" ))
{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table id='myTable' border='2' cellpadding='10'>";

// set table headers
echo "<tr><th>user_id</th><th>username</th><th>email</th><th>city</th><th>pincode</th><th>practice_type</th><th>erx_facility</th><th>teleconsultation</th><th>chat</th></tr>";

while ($row = $result->fetch_object())
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row->user_id . "</td>";
echo "<td>" . $row->username . "</td>";
echo "<td>" . $row->email . "</td>";
echo "<td>" . $row->city . "</td>";
echo "<td>" . $row->pincode . "</td>";
echo "<td>" . $row->practice_type . "</td>";
echo "<td>" . $row->erx_facility . "</td>";
echo "<td>" . $row->teleconsultation . "</td>";
echo "<td>" . $row->chat . "<a href='http://localhost/chat/login.php'><img src='chat.svg' width=32 height=16 alt='Chat Now' /></a></td>";
echo "</tr>";
}

echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
// show an error if there is an issue with the database query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>


</body>
</html>