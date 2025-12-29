<html>
    <head>
        <title>My First Web Page</title>
       
    </head>
    <body>
        <center>
            <h1>Khandwa MPmadhay pradesh</h1>
            <hr>
            
            <!-- ✅ FORM CORRECT KIYA HAI -->
            <form method="POST" action="">
                Enter Name: 
                <input type="text" placeholder="Enter your name..." name="n1" required><br><br>
                
                Enter City: 
                <input type="text" placeholder="Enter your City..." name="n2" required><br><br>
                
                Age: 
                <input type="number" placeholder="Enter age..." name="n3" required><br><br>
                
                <!-- ✅ SUBMIT BUTTON ADD KIYA HAI -->
                <button type="submit">Submit Data</button>
            </form>
        </center>
        
        <?php
        // ✅ CHECK KARO KI FORM SUBMIT HUA HAI YA NAHI
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mydatabase";
            
            // Connection create karein
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            // Connection check karein
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // ✅ DATA LEIN AUR SANITIZE KAREIN
            $name = mysqli_real_escape_string($conn, $_POST['n1']);
            $city = mysqli_real_escape_string($conn, $_POST['n2']);
            $age = mysqli_real_escape_string($conn, $_POST['n3']);
            
            // ✅ QUERY BANAYEIN
            $sql = "INSERT INTO okay (name, city, age) VALUES ('$name', '$city', '$age')";
            
            // ✅ QUERY EXECUTE KAREIN
            if (mysqli_query($conn, $sql)) {
                echo "<center><h3 style='color:green;'>Data inserted successfully!</h3></center>";
            } else {
                echo "<center><h3 style='color:red;'>Error: " . mysqli_error($conn) . "</h3></center>";
            }
            
            // ✅ CONNECTION CLOSE KAREIN
            mysqli_close($conn);
        }
        ?>
    </body>
</html>