<?php header("Access-Control-Allow-Origin: *"); ?>

<?php
require("connection BDD.php");

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    return $xmlStr;
}

// Opens a connection to a MySQL server
$connection=mysqli_connect ('localhost', $username, $password);
if (!$connection) {
    die('Not connected : ' . mysqli_error($connection));
}

// Set the active MySQL database
$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}

// Select all the rows in the markers table
$query = "SELECT * FROM villes";
$result = mysqli_query($connection, $query);
if (!$result) {
    die('Invalid query: ' . mysqli_error($connection));
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<festival>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
    // Add to XML document node
    echo '<marker ';
    echo 'id="' . parseToXML($row['id']) . '" ';
    echo 'nom="' . parseToXML($row['nom']) . '" ';
    echo 'latitude="' . $row['latitude'] . '" ';
    echo 'longitude="' . $row['longitude'] . '" ';
    echo '/>';
}

// End XML file
echo '</festival>';

?>