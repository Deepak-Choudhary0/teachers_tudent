<html lang="en">
<head>
<style>
table, th, td {
    border: 1px solid black;
}
.student-details-div ul{
    list-style: none;
    padding: 0;
    width: 400px;

}
.student-details-div ul li{
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
            $query=" select students.sid,students.sname,students.enroll_date,students.dob,course.cid, course.cname,course.course_fee from students inner join course on students.course_id = course.cid where students.sid=$v;";
            $result = mysqli_query($conn, $query);
            while($row=mysqli_fetch_array($result)){
                $cid=$row[3];
                echo "<br><h1>Student Details</h1>
                <div class='student-details-div'>
                <ul>
                <li>
                <p>Student's Id:</p>
                <p>$row[0]</p>
                </li>
                <li>
                <p>Student's Name:</p>
                <p>$row[1]</p>
                </li>
                <li>
                <p>Student's Enrollment Date:</p>
                <p>$row[2]</p>
                </li>
                <li>
                <p>DOB:</p>
                <p>$row[3]</p>
                </li>
                <li>
                <p>Course Id:</p>
                <p>$row[4]</p>
                </li>
                <li>
                <p>Course Name:</p>
                <p>$row[5]</p>
                </li>
                <li>
                <p>Course Fees:</p>
                <p>$row[6]</p>
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