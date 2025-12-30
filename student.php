<html>
    <head><title>Student infomation  collage</title></head>
    <body>
        <h1>  <center>STUDENT INFORMATION ON THE IPS COLLAGE Indore</center></h1>
        <form  method="POST" action="">
            First Name. <input type="text" name = "f_name"><br>
            Last Name. <input type="text" name ="last_name"><br>
            Marks.      <input type ="number" name ="marks"><br>
            Grade <input type="text" name="grade"><br>
            gmail. <input type="text" name="gmail"><br>
            Phone. <input type="number" name ="phone"><br>
            Address. <input type="text " name ="address"> <br>
            City. <input type="text" name ="city"><br>
            State. <input type="text" name ="state"><br><br>
            <input type="submit" name ="btn">
</form>
<?php   

$con=mysqli_connect('localhost','root','','mydatabase');
if(isset($_POST['btn']))
{   $f_name = $_POST['f_name'] ?? '';
   // $f_name = $_POST['f_name'];
    $last_name  =$_POST['last_name'];
    $marks=$_POST['marks'];
    $grade=$_POST['grade'];
    $gmail=$_POST['gmail'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];


$query="insert into student (f_name, last_name , marks, grade, gmail, phone, address, city, state) values ('$f_name', '$last_name','$marks','$grade','$gmail', '$phone', '$address','$city', '$state')";
$execute=mysqli_query($con, $query);
//$execute=mysqli_query($con, $query);
}
?>
        </body>
    </html>