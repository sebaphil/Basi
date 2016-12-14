<?php session_start(); ?>
<?php require 'function.php'; ?>
<?php
logout();
header('Location: ' . "http://$_SERVER[HTTP_HOST]" . '/index.php');
