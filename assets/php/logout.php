<?php
session_start();
session_destroy();
include ('utils.php');
redirect_to("../../index.php");
?>