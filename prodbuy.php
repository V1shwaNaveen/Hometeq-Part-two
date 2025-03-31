<?php
include("db.php");
$pagename = "A smart buy for a smart home";  // Set page name variable

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; // Include stylesheet
echo "<title>" . $pagename . "</title>"; // Display page name in the browser tab
echo "<body>";

include("headfile.html"); // Include header file

echo "<h4>" . $pagename . "</h4>"; // Display page name on the webpage
$prodId = $_GET['u_prod_id'];
echo "<p>product id is : " . $prodId . "</p>";

$sql = "select * from product where prodId = " . $prodId . "";
$execsql = mysqli_query($conn, $sql);

while ($arrayp = mysqli_fetch_array($execsql)) {
    echo "<table style='border:0px'>";
    echo "<tr>";
    echo "<td style ='border:0px'>";
    echo "<image src=images/" . $arrayp['prodPicNameLarge'] . " height = 400 width = 400>";
    echo "</td>";
    echo "<td style ='border:0px'>";
    echo "<p><h5>" . $arrayp['prodName'] . "</h5></p></br>";
    echo "<p>" . $arrayp['prodDescripLong'] . "</p></br>";
    echo "<p> left in stock: " . $arrayp['prodQuantity'] . "</p>";
    echo "<p>Number to be purchased: ";
    //create form made of one text field and one button for user to enter quantity
    //the value entered in the form will be posted to the basket.php to be processed
    echo "<form action=basket.php method=post>";
    echo "<select name=p_quantity>";

    for ($i; $i < $arrayp['prodQuantity']; $i++) {
        echo "<option value=" . $i . ">" . $i . "</option>";
    };

    echo "</select>";
    echo "<input type=submit name='submitbtn' value='ADD TO BASKET' id='submitbtn'>";
    //pass the product id to the next page basket.php as a hidden value
    echo "<input type=hidden name=h_prodid value=" . $prodId . ">";
    echo "</form>";
    echo "</p>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
}

include("footfile.html"); // Include footer file

echo "</body>";
