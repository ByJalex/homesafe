<?php
session_start();
session_destroy();

header("Location: https://homesafe-sv.herokuapp.com/homesafe/home");
?>