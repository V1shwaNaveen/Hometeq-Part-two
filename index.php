<?php
include("db.php");
$pagename = "Make your home smart";  // Set page name variable

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; // Include stylesheet
echo "<title>" . $pagename . "</title>"; // Display page name in the browser tab
echo "<body>";

include("headfile.html"); // Include header file

echo "<h4>" . $pagename . "</h4>"; // Display page name on the webpage

$sql = "select * from Product";
$execsql = mysqli_query($conn, $sql) or die(mysqli_connect_error($conn));

echo "<table style= 'border:0px'>";

while ($arrayp = mysqli_fetch_array($execsql)) {
    echo "<tr>";
    echo "<td style = 'border:0px'>";
    echo "<a href=prodbuy.php?u_prod_id=" . $arrayp["prodId"] . ">";
    echo "<img src=images/" . $arrayp["prodPicNameSmall"] . " height=200,width=200>";
    echo "</a>";
    echo "</td>";
    echo "<td style = 'border:0px'>";
    echo "<p><h5>" . $arrayp["prodName"] . "</h5></p></br>";
    echo "<p>" . "$" . $arrayp["prodPrice"] . "</p>";
    echo "</tr>";
}
echo "</table>";
include("footfile.html"); // Include footer file

echo "</body>";
