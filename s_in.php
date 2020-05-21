<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myProject";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    echo "Connected successfully";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $sql = "SELECT * FROM customer WHERE username LIKE '%$username%' AND pwd LIKE '%$pwd%'";
        if ($result=mysqli_query($conn,$sql))
        {
            $rowcount=mysqli_num_rows($result);
            if($rowcount == 0)
            {
                echo "<script>alert('Invalid Credentials');</script>";
                header("Location: login.php");
            }
            else
            {
                echo "<script>alert('Login Successful!');</script>";
                header("Location: home.php");
            }
        }
    }
?>
