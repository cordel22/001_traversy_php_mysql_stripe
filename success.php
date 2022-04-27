<?php
if (!empty($_GET['tid'] && !empty($_GET['product']))) {
  $_GET = filter_var_array($_GET, FILTER_UNSAFE_RAW);

  $tid = $_GET['tid'];
  $product = $_GET['product'];
} else {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Thank you</title>
</head>

<body>
  <div class="container mt-4">
    <h2>Thank you for your cash <?php echo $product; ?></h2>
    <hr>
    <p>Your transaction ID is <?php echo $tid; ?></p>
    <p>Check your emil for more info</p>
    <p><a href="index.php" clss="btn btn-light mt-2"></a></p>
  </div>
</body>

</html>