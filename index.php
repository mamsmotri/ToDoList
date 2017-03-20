<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

define("Q_PATH",dirname(__FILE__));
include Q_PATH.'/application/bootstrap.php';

