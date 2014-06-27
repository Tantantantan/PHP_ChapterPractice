<?php
/*This effectively prevents session fixation attacks by ensuring that 
any user who logs in is assigned a fresh, random session identifier.*/

if (check_auth($_POST['username'], $_POST['password'])) {
$_SESSION['auth'] = TRUE;
session_regenerate_id();
}
?>