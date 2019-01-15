<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect");
mysqli_select_db($link, "testowa")
    or die("Could not select database");

$id = $_POST['Iddel'];

$sql = "DELETE FROM test WHERE ID='$id'";
if(mysqli_query($link, $sql)){
    echo "Record was deleted successfully.";
}
else{
    echo "ERROR. Could not delete the record : $sql. "
                                   . mysqli_error($link);
}
mysqli_close($link);
?>
