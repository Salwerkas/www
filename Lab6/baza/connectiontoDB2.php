<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect");
mysqli_select_db($link, "testowa")
    or die("Could not select database");
    $name = $_POST['Imie'];
$surname = $_POST['Nazwisko'];
$age = $_POST['Wiek'];
$id = $_POST['ID'];
$sql = "UPDATE test SET Imie='$name', Nazwisko='$surname', Wiek='$age' WHERE id='$id'";
if ($link->query($sql) === TRUE) {
    echo "Record updated successfully \n";
} else {
    echo "Error updating record: " . $sql . "<br>" . $link->error;
}
mysqli_close($link);
?>
