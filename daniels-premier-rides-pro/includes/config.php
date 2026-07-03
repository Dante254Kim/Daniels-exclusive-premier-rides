<?php
$conn=new mysqli('localhost','root','','premier_rides');
if($conn->connect_error) die('DB Error');
session_start();