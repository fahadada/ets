<?php

header('Location: sLogin.php');
session_start();

session_unset();

session_destroy();


?>