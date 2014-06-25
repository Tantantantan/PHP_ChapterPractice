<html>
<title>HTML functions</title>
<body>

<?php
$table = get_html_translation_table(HTML_SPECIALCHARS, ENT_NOQUOTES, HTML_ENTITIES);
print_r($table);

$string_1 = htmlentities("http://cyscorpions.com/"); 
$string_2 = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
$string_3 = strip_tags("<a href='test'>Test</a>");
$string_4 = get_meta_tags("https://www.facebook.com/");

?>

</body>
</html>