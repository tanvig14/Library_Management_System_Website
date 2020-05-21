<?php
$conn = mysqli_connect("localhost", "root", "", "myProject");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "Connected successfully";

$result = mysqli_query($conn,"SELECT * FROM book");
echo "
<title>Book List</title>
<link rel='stylesheet' href='css/mainpage.css'>
<script type='text/javascript' src='js/mainpage.js'></script>
<img id='watermark' src='assets/library.jpg' alt='Library Photograph' height='568px' width='1258px'>
<div id='buttons'>
    <div id='header'>
        <h1>The Book Thing</h1>
    </div>
    <style>.search:hover{background-color: #d7dce5;}</style>
    <button class='search' name='search' style='left: 895px; top: 6px; height: 45px; width: 118px;'>
    <form action='' method='get' style='left: 935px;'>
      <input type='text' placeholder='Type Book Name' name='search'>
      <button type='submit' style='left: 1048px;'>Search</button>
    </form></button>
    <button class='contact'><a href='home.php'>Home</a></button>
    <button class='signup'><a href='signup.php'>Sign Up</a></button>
    <button class='signin'><a href='login.php'>Login</a></button>
    <pre class='coninfo'>

    In case of queries:

    Mob: 7588231717
    Email: tanvigandhi97@gmail.com
    </pre>
</div>

<div id = 'tab' style = 'position: absolute; left: 512px; top: 100px; background-color: white; width: 525px'>
    <table cellspacing='25'>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Category</th>
        <th></th>
    </tr>
";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td align='center'>" . $row['id'] . "</td>";
    echo "<td>" . "<a href='issue.php'>" . $row['title'] . "</a>" . "</td>";
    $book = $row['title'];
    echo "<td align='center'>" . $row['author'] . "</td>";
    echo "<td align='center'>" . $row['category'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";

$query = $_GET['search'];
if($query == "" || $query == "")
{}

else
{
$sql="SELECT * FROM book where title LIKE '%$query%'";

if ($result=mysqli_query($conn,$sql))
    {
      echo "
      <div id = 'tab1' style = 'position: absolute; left: 512px; top: 100px; background-color: black; width: 526px; height: 600px;'>
          <table cellspacing='40' style='color: white;'>
          <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Author</th>
              <th>Category</th>
          </tr>
      ";

        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td align='center'>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            $book = $row['title'];
            echo "<td align='center'>" . $row['author'] . "</td>";
            echo "<td align='center'>" . $row['category'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";

        mysqli_free_result($result);
    }
}

mysqli_close($conn);
?>
