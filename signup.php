<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript" src="js/signup.js"></script>
</head>

<body>
    <div id="main">
        <img id="lib" src="assets/library.jpg" alt="Library Photograph">
        <img id="picsignup" src="assets/signup.jpg" alt="Signup">
        <div id="buttons">
            <div id="header">
                <h1>The Book Thing</h1>
            </div>
            <button class="home"><a href="mainpage.php">Go Home</a></button>
        </div>

        <div id="form">
            <form id="signup" method="post" action="s_up.php" target="_parent" onsubmit="insert()">
                Full Name:&nbsp;&nbsp;&nbsp;<sup style="color: red">*</sup>
                <input type="text" id="fname" name="fullname"><br><br>
                E-mail ID:&nbsp;&nbsp;&nbsp;&nbsp;<sup style="color: red">*</sup>
                <input type="text" id="email" name="email"><br><br>
                Username:&nbsp;&nbsp;&nbsp;&nbsp;<sup style="color: red">*</sup>
                <input type="text" id="uname" name="username"><br><br>
                Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup style="color: red">*</sup>
                <input type="password" id="pwd" name="password"><br><br>
                Retype Pwd:&nbsp;<sup style="color: red">*</sup>
                <input type="password" id="conpwd" name="conpwd" width="50px"><br><br>
                Gender:<br>
                <input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other<br><br>
                <div id="align">
                    <input type="submit" value="Submit" name="Submit">
                    <input type="reset">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
