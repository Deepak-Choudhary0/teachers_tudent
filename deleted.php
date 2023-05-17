<!DOCTYPE html>
<html>
<head>
    <title>Deleted Student Information</title>
</head>
<body>
<center>
<h1>Student Information Deletion Status</h1> <br><br>
<?php
$servername = "localhost";
$username = "root";
$password ="";
$database ="php";
$input= $_GET["r"];
$conn = mysqli_connect($servername, $username, $password, $database);
$flag=0;
$sql="SELECT * FROM `student`;";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
    if($input==$row[0]){
        $flag=1;
        echo "$row[0] Found...";
    }}
if($flag==1){
    $sql="delete from student where `roll`='$input';";
    $res=mysqli_query($conn,$sql);
    if ($res==1){
        echo "Roll NO $input Deleted<br><br>";
    }
}
else{
    echo "<h1>Roll No $input Not Found in Student Database...</h1> <br><br> <br><br>";
}
?>
<a href="index.php"><button>Go to Home Page</button></a><br><br>
<a href="./add.php"><button> Add Student's information</button></a><br><br>
<a href="./view.php"><button> View Single Student's information</button></a><br><br>
<a href="./view_all.php"><button> View All Student's Information</button></a><br><br>
</center>
</body>
</html>