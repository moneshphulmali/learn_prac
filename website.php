<html>
    <head>
        <title> web page </title>
</head>
<body>
    <h1>WELCOME TO MY CLASSES KHANDWA</H1>
    <form method="POST" action= " ">
            Name : <input type="text" name ="name">
            Email : <input type="text" name ="email">
            Password : <input type="password" name ="pass">
            <input type="submit" name ="btn">

</form>

<?php

$con=mysqli_connect('localhost','root','','mydatabase');
if(isset($_POST['btn']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];

$query="insert into person (name, email, password) values ('$name','$email','$password')";
$execute=mysqli_query($con,$query);
}

?>
</body>
</html>
