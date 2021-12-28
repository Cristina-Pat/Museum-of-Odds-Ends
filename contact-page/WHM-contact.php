<?php

// define a constant to permit each file we "require" to execute
// required PHP files should "die" if IS_SAFE is not defined (security)
define('IS_SAFE', true);

// set variables used by required files
$title ='Walton Hall Museum of Odds &amp; Ends'; // text to be used by head.php as title
$footer = 'The Walton Hall Museum page footer';  // text to be used by foot.php as footer
$url = $_SERVER["PHP_SELF"]; // URL of this page for forms to POST to

// output the page head
require 'WHM-head.php';
?>

<?php
// output a form used to submit the POST data read above
require 'WHM-form.php';

// output the page foot
require 'WHM-foot.php';
?>

<hr />

<p><em>Reading POST data</em></p>
<?php
foreach ($_POST as $key => $value) {
    echo '<pre>';
    var_export($key);
    echo ' => ';
    var_export(htmlspecialchars($value));
    echo '</pre>';
}
if (empty($_POST)) {
    echo "<p><i>No POST data</p>";
}
?>
