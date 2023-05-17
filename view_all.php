<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
tr:hover {background-color: #D6EEEE;}
</style>

    <title>View All Student Information</title>
</head>
<body>
<center>
    <h1>All Students Information</h1> <br><br> <br><br>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$database ="php";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql="SELECT * FROM `student`;";
$result = mysqli_query($conn, $sql);
$num =mysqli_num_rows($result);
echo "<table width=80%>
    <tr>
        <th>Roll No</th>
        <th>Student Name</th>
        <th>Age</th>
        <th>Department</th>
        <th>Subject 1 Marks</th>
        <th>Subject 2 Marks</th>
        <th>Subject 3 Marks</th>
    </tr>";
while($row=mysqli_fetch_array($result)){
    echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
    </tr>";
}
echo "</table>";
?>
<br><br>
<a href="index.php" style="text-decoration: none;"><button>Go to Home Page</button></a><br><br>
<a href="./add.php" style="text-decoration: none;"><button> Add Student's information</button></a><br><br>
<a href="./view.php" style="text-decoration: none;"><button> View Single Student's information</button></a><br><br>
<a href="./delete.php" style="text-decoration: none;"><button>Delete student's information</button></a>
</center>
</body>
</html>