<?php

$conn = mysqli_connect('localhost', 'salman', '22221111', 'proxima');
if ($conn->connect_error) {
    die("connection to database failed: ". $conn->connect_error);
} else {
    echo "successfully connected to database";
}

?>