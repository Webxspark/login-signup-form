<?php
require './required/function.php';
$App = new webxspark;

if($App->logout()){
    header('Location: ./login.php');
    exit();
}