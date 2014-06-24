<html>
<title>Printing types in PHP</title>
<body>
<h1>Using Print()</h1>
<?php
print ("Hello World!!!  <br />");
print ("Jonathan Magay  <br />");
print "print print print<br />";
print "print w/o parentheses <br />";
?>
<hr></hr>
<h1>Using Printf()</h1>
<?php
printf("Hello!!!<br/>");
printf("wont print without paranthesis<br/>");
printf("%b",7);
print "<br/>";
printf("%c",90);
print "<br/>";
printf("%d",90);
print "<br/>";
printf("%e",90);
print "<br/>";
printf("%E",90);
print "<br/>";
printf("%f",90);
print "<br/>";
printf("%F",90);
print "<br/>";
printf("%g",90);
print "<br/>";
printf("%G",90);
print "<br/>";
printf("%o",90);
print "<br/>";
printf("%s",hello);
print "<br/>";
printf("%u",1);
print "<br/>";
printf("%x",15);
print "<br/>";
printf("%X",15);
print "<br/>";
?>
<hr></hr>
<h1>Using Printr()</h1>
<?php
$codes = array("Tan","Jonathan","Magay","Mitra");
print_r($codes);
?>
</body>
</html>