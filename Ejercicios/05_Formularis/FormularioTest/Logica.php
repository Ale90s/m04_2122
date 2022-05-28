<?php

print_r($_POST);
echo "<br/>";

if ($_POST["user"] == "aalgarra" AND $_POST["password"] == "123") {
    echo "Valid user";
} else {
    echo "Invalid user";
}
