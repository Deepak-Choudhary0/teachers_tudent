<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
    border: 1px solid black;
}
tr:hover {background-color: #D6EEEE;}
</style>
    <title>Student Information Added</title>
</head>
<body>
    <center>
    <h1>Student's Information Added</h1> <br><br> <br><br>
    <?php
        $n = $_GET["n"];
        $r = $_GET["r"];
        $d = $_GET["d"];
        $a = $_GET["a"];
        $m1 = $_GET["m1"];
        $m2 = $_GET["m2"];
        $m3 = $_GET["m3"];
        $host="localhost";
        $user="root";
        $pw="";
        $db="php";
        $conn = mysqli_connect($host,$user,$pw,$db);
        $flag=0;
        $sql="SELECT * FROM `student`;";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result)){
            if($r==$row[0]){
                $flag=1;
                echo "<h1>$r STUDENT already exist </h1> <br><br> <br><br>";
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
                echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                    </tr></table><br><br><br>";
                }
            }
        if($flag==1){
            echo "<h1>$input Details Are :- </h1> <br><br> <br><br>";
            echo "<a href='index.php'><button>Go to Home Page</button></a><br><br>";
        }
        else{
            $sql="insert into student values('$r','$n',$a,'$d',$m1,$m2,$m3)";
            $resULT=mysqli_query($conn, $sql);
            echo "STUDENT ALREADY PRESENT";
        }
    ?>
    <a href="index.php"><button>Go to Home Page</button></a><br><br>
    <a href="./view.php"><button> View Single Student's information</button></a><br><br>
    <a href="./view_all.php"><button> View All Student's Information</button></a><br><br>
    <a href="./delete.php"><button>Delete student's information</button></a>
    </center>
</body>
</html>