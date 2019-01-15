<?php
    echo "Trafiles na ukryta strone";
if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: http://localhost/lab6/index.html");
}
?>
