<?php
require '../config.php';
$newConn = mysqli_connect($CFG->dbhost,$CFG->dbuser,$CFG->dbpass,$CFG->dbname);
// $newConn = mysqli_connect($CFG->dbhost,$CFG->dbuser,'123',$CFG->dbname);
// Check connection

if (mysqli_connect_errno($newConn)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
  $time=time();