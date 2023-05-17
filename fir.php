<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password ="";
        $database ="php";
        $input= $_GET["r"];
        $conn = mysqli_connect($servername, $username, $password, $database);
        if($conn){
            $sql="SELECT * FROM `student`;";
        $result = mysqli_query($conn, $sql);
        echo "Success";
        }
    ?>
</body>
</html>