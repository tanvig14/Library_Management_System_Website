<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="css/feedback.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function done(){
            alert("Feedback submitted successfully,\nThank You!");
        }
    </script>
</head>

<body>
    <img id="watermark" src="assets/library.jpg" alt="Library Photograph" height=" 568px" width="1258px">
    <div id="buttons">
        <div id="header">
            <h1>The Book Thing</h1>
        </div>
        <button class="home"><a href="home.php">Home</a></button>
        <button class="signout"><a href="mainpage.php">Logout</a></button>
    </div>

    <div id="form">
        <form id="signup" action="home.php" target="_parent" onsubmit="done()">
            Full Name:<br><br>
            <input type="text" id="fname" name="fullname"><br><br><br>

            On a scale of 1-5 how would you rate our UI?<br><br>
            <select>
                <option value="op1">1 - Unsatisfactory</option>
                <option value="op2">2 - Satisfactory</option>
                <option value="op3" selected>3 - Good</option>
                <option value="op4">4 - Very Good</option>
                <option value="op5">5 - Excellent!</option>
            </select>
            <br><br><br>

            Is the book collection up to the mark?<br><br>
            <select>
                <option value="op1">Yes! I always find what I want</option>
                <option value="op2" selected>Almost all the books I need are there</option>
                <option value="op3">I hardly find the books I need</option>
                <option value="op4">I never find what I need</option>
            </select>
            <br><br><br>

            How did you find out about our website?<br>&nbsp;
            <input type="radio" name="info" value="info1" checked>Reference from a friend<br>&nbsp;
            <input type="radio" name="info" value="info2">While browsing online<br>&nbsp;
            <input type="radio" name="info" value="info3">Other<br><br><br>

            Your Suggestions:<br><br>
            <textarea id="suggestions" name="suggestions" rows="3" cols="7"
            placeholder="Your inputs are valuable for us! Help us improve!"></textarea><br><br>

            <input type="submit" value="Submit">
            <input type="reset">

        </form>
    </div>
</body>
</html>
