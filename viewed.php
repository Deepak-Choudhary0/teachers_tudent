<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
tr:hover {background-color: #D6EEEE;}
</style>
    <title>View Single Student Information</title>
</head>
<body>
<center>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$database ="php";
$input = $_GET["r"];
$conn = mysqli_connect($servername, $username, $password, $database);
$flag=0;
$sql="SELECT * FROM `student`;";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
    if($input==$row[0]){
        $flag=1;
        echo "<h1>$input Details Are :- </h1> <br><br> <br><br>";
    }
}
if($flag==1){
$sql="SELECT * FROM `student` WHERE `roll`='$input';";
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
}}
else{
    echo "<h1>Roll No Not Found</h1> <br><br> <br><br>";
}
echo "</table>";
?>
<a href="index.php"><button>Go to Home Page</button></a><br><br>
<a href="./add.php"><button> Add Student's information</button></a><br><br>
<a href="./view_all.php"><button> View All Student's Information</button></a><br><br>
<a href="./delete.php"><button>Delete student's information</button></a>
</center>
</body>
</html>