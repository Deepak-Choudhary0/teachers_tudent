<html lang="en">
<head>
<style>
table, th, td {
    border: 1px solid black;
}
.teacher-details-div ul{
    list-style: none;
    padding: 0;
    width: 400px;

}
.teacher-details-div ul li{
    display: flex;
    flex-direction: row;
    justify-content: space-between;

}


tr:hover {background-color: #D6EEEE;}
</style>
    <title>Document</title>
</head>
<body>
    <center>
    <?php
        $v=$_GET['n'];
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="ayush";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $query=" select teacher.tid,teacher.tname,teacher.exp_inyears,course.cid, course.cname from teacher inner join course on teacher.course_id = course.cid where teacher.tid=$v;";
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){
                $cid=$row[3];
                echo "<br><h1>Teacher Details</h1>
                <div class='teacher-details-div'>
                <ul>
                <li>
                <p>Teacher's Id:</p>
                <p>$row[0]</p>
                </li>
                <li>
                <p>Teacher's Name:</p>
                <p>$row[1]</p>
                </li>
                <li>
                <p>Teacher's Experience in Years:</p>
                <p>$row[2]</p>
                </li>
                <li>
                <p>Course Id:</p>
                <p>$row[3]</p>
                </li>
                <li>
                <p>Course Name:</p>
                <p>$row[4]</p>
                </li>
                </ul>
                </div>
                ";
            }
        }
    ?>
    <a href="index.php"><button>Go to Home Page</button></a><br><br>
    </center>
</body>
</html>