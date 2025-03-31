<?php
include("db.php");
$pagename = "smart basket";  // Set page name variable

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; // Include stylesheet
echo "<title>" . $pagename . "</title>"; // Display page name in the browser tab
echo "<body>";

include("headfile.html"); // Include header file

echo "<h4>" . $pagename . "</h4>"; // Display page name on the webpage

$newprodid = $_POST["h_prodid"];
$reququantity = $_POST["p_quantity"];

echo "prodId = " . $newprodid . " quantity selected = " . $reququantity . "";


include("footfile.html"); // Include footer file

echo "</body>";
