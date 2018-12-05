<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect");
mysqli_select_db($link, "testowa")
    or die("Could not select database");
    $name = $_POST['Imie'];
$surname = $_POST['Nazwisko'];
$age = $_POST['Wiek'];
$query  = "INSERT INTO id (Imie,Nazwisko,Wiek,ID)
            VALUES ('$name','$surname',$age,4)";
    if ($link->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $link->error;
    }
mysqli_close($link);
?>
