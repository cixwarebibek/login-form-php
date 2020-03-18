<?php
session_start();
//include 'user.php';
function gotoLogin() {
    header('Location: index.php');
    session_destroy();
}