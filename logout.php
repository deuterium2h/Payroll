<?php
session_start();

session_destroy();
header("refresh:0; url=/system");
echo 'Logged out! Click <a href="/system">here</a> to Log in.';
?>