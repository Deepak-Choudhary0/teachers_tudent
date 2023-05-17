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
            $query="SELECT tname, tid FROM `teacher`;";
        $result = mysqli_query($conn, $query);
            echo "<h1>Teacher Details are:-</h1> <br><br> <br><br>";
            echo "<table width=80%>
                <tr>
                    <th>Teacher's List:-</th>
                </tr>";
            while($row=mysqli_fetch_array($result)){
            echo "<tr>
                    <form action='teacherdetails.php'>
                    <td>
                    <button style='width:100%;text-align:left;border:none;background-color:none;'>
                    $row[0]
                    <input name='n' style='display:none;' value='$row[1]'>
                    </button>
                    </td>
                    </form>

                </tr>";
            }
            echo "</table><br><br>";
        }
    ?>
    <a href="index.php"><button>Go to Home Page</button></a><br><br>
    </center>
</body>
</html>