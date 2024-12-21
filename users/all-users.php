<?php
include("../config.php");

$query = "SELECT * FROM `users`";
$result = mysqli_query($connect, $query);

$users = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

return $users;
?>
