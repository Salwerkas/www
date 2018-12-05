<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect");
mysqli_select_db($link, "testowa")
    or die("Could not select database");
mysqli_query($link, "SET NAMES utf8");
$query  = "INSERT INTO $link (Imie,Nazwisko,Wiek) VALUES ("Name","Surname","Age")";
$result = mysqli_query($link, $query)
    or die("Error");
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
mysqli_free_result($result);
mysqli_close($link);
?>
