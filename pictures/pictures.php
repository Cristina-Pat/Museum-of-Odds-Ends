<?php

error_reporting(E_ALL);
init_set('display_errors', 1);

define('IS_SAFE', true);

$title = "Output the pictures in the collection of museum";
$title = "The page footer";

require 'pictures_head.php';

echo "<h1>$title</h1>";
echo "<p>The colection of the Museum contains:</p>";

$pictures = [
    "Not known" => "Budapest Chainbridge";
    "James Ward" => "An Overshot Mill in Wales"; 
    "Jean Of Wavrin" => "Siege of Troyes"; 
    "Henry Peacham" => "Archimedes"; 
    "Alois Kron" => "Oilpainting of Ettingen Village"; 
    "Soja Feldmaier" => "Painting"; 
];
natcasesort($pictures);
?>

<pre>$pictures = <?php var_export($pictures) ?></pre>

<p>Output a table with creator and picture columns: </p>

<table border="1">
    <caption>Pictures</caption>
    <tr>
        <th>creator</th>
        <th>picture</th>
    </tr>
    <?php foreach($pictures as $key => $value) { ?>
        <tr>
            <td><?php echo htmlspecialchars($key)?></td>
            <td><?php echo htmlspecialchars($value)?></td>
        </tr>
    <?php } ?>
</table>

<?php
require "pictures-foot.php";
?>

    
    