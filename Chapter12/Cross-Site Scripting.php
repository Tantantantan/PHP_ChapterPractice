<?php
 /*html entities() Convert all applicable characters to HTML entities*/
 /*ENT_QUOTES Will convert both double and single quotes.*/

$html = array('username' => htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'),
);

echo $html['username'];
?>