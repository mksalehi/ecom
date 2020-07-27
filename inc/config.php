<?php

$connection=mysqli_connect('localhost','root',
    '','ecom');
mysqli_query($connection, "SET NAMES utf8");
session_start();