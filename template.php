<?php
$pagename = "template";  // Set page name variable

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; // Include stylesheet
echo "<title>" . $pagename . "</title>"; // Display page name in the browser tab
echo "<body>";

include("headfile.html"); // Include header file

echo "<h4>" . $pagename . "</h4>"; // Display page name on the webpage

echo "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>"; // Placeholder text

include("footfile.html"); // Include footer file

echo "</body>";
