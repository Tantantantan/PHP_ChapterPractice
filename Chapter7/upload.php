<html>
<title>Upload a file</title>
<body>
<form enctype="multipart/form-data"
      action="<?php echo $_SERVER['PHP_SELF']; ?>" 
      method="POST">

           <input type="hidden" name="MAX_FILE_SIZE" value="10240">
File name: <input name="file"   type="file"    />
           <input type="submit" value="Upload" />
</form><hr></hr>
<?php
      if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
      
      echo "<br/>FILE NAME: ", $_FILES["file"]["name"];
      echo "<br/>FILE TYPE: ", $_FILES["file"]["type"];
      echo "<br/>FILE SIZE: ", $_FILES["file"]["size"];
      
      }
?>
</body>
</html>