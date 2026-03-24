<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'hotel_book';


$con = mysqli_connect($host, $username, $password, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
        return $data;
    }
}


function select($sql, $values, $datatypes)
{

    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {

            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {

            mysqli_stmt_close($stmt);

            die("Query Cannot be executed - Select");
        }
    } else {
        die("Query Cannot be executed - Select");
    }
}
