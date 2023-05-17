<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
    border: 1px solid black;
}
tr:hover {background-color: #D6EEEE;}
</style>
    <title>Document</title>
</head>
<body>
    <center>
    <?php
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="ayush";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $query="SELECT * FROM `course`;";
        $result = mysqli_query($conn, $query);
        echo "<h1>Course Details are:-</h1> <br><br> <br><br>";
        echo "<table width=80%>
            <tr>
                <th>Course Id:-</th>
                <th>Course Name:-</th>
                <th>Course Fee:-</th>
            </tr>";
        while($row=mysqli_fetch_array($result)){
        echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
            </tr>";
            }
            echo "</table><br><br>";
        }
    ?>
    <a href="index.php"><button>Go to Home Page</button></a><br><br>
    </center>
</body>
</html>