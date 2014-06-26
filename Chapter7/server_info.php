<html>
<title>Server Info</title>
<body>
	<?php
	echo $_SERVER['PHP_SELF']		, "<br/>"; ##returns current file and path.
	echo $_SERVER['SERVER_NAME']	, "<br/>"; ##returns servername (ex.localhost).
	echo $_SERVER['HTTP_HOST']		, "<br/>"; ##returns host (ex.localhsot).
	echo $_SERVER['HTTP_REFERER']	, "<br/>"; ##returns returns path or url.
	echo $_SERVER['HTTP_USER_AGENT'], "<br/>"; ##returns user's browser.
	echo $_SERVER['SCRIPT_NAME']	, "<br/>"; ##returns map and filename.
	echo $_SERVER['SERVER_PROTOCOL'], "<br/>"; ##returns protocol used.
	?>
</body>
</html>