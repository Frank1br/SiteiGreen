<?php require_once 'auth_admin.php'; ?>
<?php
session_start();
session_destroy();
header('Location: login_admin.php');
exit;
?>
