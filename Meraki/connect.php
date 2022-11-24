<?php
session_start();

$url = $_SESSION['url'];
header("Location: $url");
