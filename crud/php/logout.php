<?php

session_start();

session_unset();
session_destroy();

header("Location: http://localhost/project/crud/btstrp.php?message=logged out");

?>