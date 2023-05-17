<!DOCTYPE html>
<html>
<head>
    <title>Add Student Information</title>
</head>
<body>
<center>
<form action="added.php";>  
    <h1>Enter Student Information To Add In Database</h1>
    <p ><br>
    Student Name : <input name="n"  ><br><br>
    DOB : <input name="dob"><br><br>
    Dapartment : <input name="d"><br><br>
    Marks 1 : <input name="m1"><br><br>
    Marks 2 : <input name="m2"><br><br>
    Marks 3 : <input name="m3"><br><br>
    <input type="submit" style="text-align:center;color:brown;font-size:25px"; >
    </p>
</form>
<a href="index.php"><button>Go to Home Page</button></a><br><br>
<a href="./view.php"><button> View Single Student's information</button></a><br><br>
<a href="./view_all.php"><button> View All Student's Information</button></a><br><br>
<a href="./delete.php"><button>Delete student's information</button></a>
</center>
</body>
</html>