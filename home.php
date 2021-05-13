<?php

session_start();
if(!isset($_SESSION['username'])){
      header('location:index.php');
}

?>

<html>
<head>
      <title>Home page</title>
      <link rel="stylesheet" type="" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
<div class="container">
<a class="float-right" href="logout.php">LOGOUT</a>

<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
</div>
</body>
</html>
