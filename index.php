<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
</head>

<body>
    <form action="/index.php" method="POST">
        <label for="name">Movie Name:</label><br>
        <input type="text" name="name" ><br>
        <input type="submit" value="Submit">
    </form>
</html>

<?php
require_once("remote/remote.php");

?>