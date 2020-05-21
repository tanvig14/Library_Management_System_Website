<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div id="main">
        <img id="lib" src="assets/library.jpg" alt="Library Photograph">
        <div id="buttons">
            <div id="header">
                <h1>The Book Thing</h1>
            </div>
            <button class="home"><a href="mainpage.php">Go Home</a></button>
        </div>

        <div id="logpic">
            <h1 id="logtext">Log<span style="color:white">in</span></h1>
        </div>
        <div id="form">
            <form id="login" method="post" action="s_in.php" target="_parent">
                Username:&nbsp;&nbsp;&nbsp;&nbsp;<sup style="color: red">*</sup>
                <input type="text" name="username" required><br><br>
                Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup style="color: red">*</sup>
                <input type="password" name="password" required><br><br><br>
                <div id="align">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
