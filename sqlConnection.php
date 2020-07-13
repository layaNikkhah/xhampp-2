<?php
$sql = '';
function query($sql)
{
    $conn = new mysqli('localhost', 'root', "", 'db_first');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        if (!empty($sql)) {
            $output = [];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // $output[] = ($row);
                    $output[] =  ($row);
                }
            }
        } else {
            echo 'jfkr';
        }
        return $output;
    }
}