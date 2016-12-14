<?php
session_start();
require 'function.php';
logout();
header('Location: ' . "http://$_SERVER[HTTP_HOST]" . '/index.php');
