<?php
session_start();
session_destroy();

echo '<script languange="javascript">alert("Anda Berhasil Logout!"); document.location="login.php";</script>';
?>