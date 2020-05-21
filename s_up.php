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

    if(isset($_POST['Submit'])){
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $gender = $_POST['gender'];
        if($name !=''||$email !='')
        {
            $sql = "INSERT INTO customer(Username, Name, Email, Pwd, Gender) VALUES('$username', '$name', '$email', '$pwd', '$gender')";
            if ($conn->query($sql) === TRUE) {
                header("Location: home.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else{
            echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }
    }
    else {
        echo "Not submitted correctly";
    }

    mysqli_close($conn);
    ?>
