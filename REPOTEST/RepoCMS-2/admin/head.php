<?php

session_start();

if (isset($_SESSION['mod']) === TRUE)
{
include('header2.php'); 

}

if (isset($_SESSION['admin']) === TRUE)
{
include('header.php'); 

}

?>