<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Could not connect");
mysqli_select_db($link, "testowa")
    or die("Could not select database");
mysqli_query($link, "SET NAMES utf8");
$query  = "SELECT * FROM id";
$result = mysqli_query($link, $query)
    or die("Error");
while ($row = mysqli_fetch_array($result)) {
    echo
  "<b><TR>Wiek:&nbsp&nbsp". $row["Wiek"]."</b><br/>".
  "<b><TR>name:&nbsp&nbsp". $row["Imie"]."</b><br/>".
    "<b><TR>surname:&nbsp&nbsp". $row["Nazwisko"]."</b><br/>".
    "<b><TR>Id:&nbsp&nbsp". $row["ID"]."</b><br/>".
    "</TR><TR></TR>\n<br/>";
    }
mysqli_free_result($result);
mysqli_close($link);
?>
