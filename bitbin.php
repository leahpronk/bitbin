<!DOCTYPE html>
<html>
<head>
<title>bitbin</title>
</head>
<body>
<?php
    require 'connect.php';
?>
    <h1>Geef je code aan mij! Nu!<h1>
    <form method='post' action="tussenpagina.php">
    <textarea rows="4" cols="50" name="code" type="text"></textarea><br>
    <input type="submit" value="paste">
    </form>
</body>
</html>