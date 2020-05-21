<?php
    include 'get_list.php';
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

    $sql = "UPDATE customer SET borrowed = '$book' WHERE username = 'fluffybunny'";
    if ($conn->query($sql) === TRUE) {
        echo "done";
        #header("Location: home.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
?>
