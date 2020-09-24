<!DOCTYPE html>
<html>
<head>
    <title>code</title>
</head>
<body>
<?php
  require 'connect.php';

    $code = $_POST['code'];

    $sql = "INSERT INTO code SET code = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam("" , $code);
    $stmt->execute([$code]);

    $id = $pdo->lastInsertId();
    echo "<a href='code.php?id=$id'>Bekijk hier je code!</a>";
?>

</body>
</html>