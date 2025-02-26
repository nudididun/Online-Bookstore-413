<?php

// testing database connection 

include 'includes/bookstoredb_connect.php'; //conencting database

if ($conn) {
    echo " Database connected successfully!";
} else {
    echo " Database Connection failed!";
}
?>