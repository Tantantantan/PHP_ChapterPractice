<html>
<head>
<title>Here are the keys...</title>
</head>
<body>
<?php 
/*With the eval() function, PHP allows a script to execute arbitrary 
PHP code. Although it can be useful in a few limited cases, allowing 
any user-supplied data to go into an eval() call is just begging to 
be hacked. */

if ($_REQUEST['code']) {
echo "Executing code...";
eval(stripslashes($_REQUEST['code'])); // BAD!

} ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="code" />
<input type="submit" name="Execute Code" />
</form>
</body>
</html>