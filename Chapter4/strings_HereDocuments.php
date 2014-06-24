<html>
<title>Here_Documents</title>
<body>
<?php
echo $string = "This is a simple string.<br />";
echo $heredoc = <<< nomore
"This is a sample of heredoc we can right any strings here 
like Paragraph lists, names or anything that we want to
type to end this long sentences we will just use a double 
quote again to enclose it... Heredoc :) "
nomore;
echo $heredoc;
?>
</body>
</html>