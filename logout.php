<?php
session_start();
sesssion_destroy();

header('Location: /login.php');
?>