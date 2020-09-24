<!DOCTYPE html>
<html>
<head>
    <title>code</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/default.min.css">
</head>
<body>
    <h1>hier is jouw code!</h1>
    <h2> Je code URL: </h2>
<?php
  require 'connect.php';

    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
    };

    $sql =("SELECT * FROM code WHERE id = :id");
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':id' => $id));
    foreach ($stmt as $row) {
    $code = htmlspecialchars ($row['Code']);
  }
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
        else
        $url = "http://";
        $url.= $_SERVER['HTTP_HOST'];
        $url.= $_SERVER['REQUEST_URI'];
echo $url
?>
  <pre>
    <code>
      <?php echo $code; ?>
    </code>
  </pre>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</body>
</html>