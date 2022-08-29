<?php
$conn = mysqli_connect('localhost:3307', 'root', 'Environment#147', 'sourcecodester_omsdb');
if (!$conn) {
  die('Could not connect: ' . mysqli_error());
}
