<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="result" style="text-align:center">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiA12yd2RmUTc0L5Z52ACzkZuKVc4ko8kdMDcKni2loBDHhzgHGKHkXnZgMxfhOoUwIRk&usqp=CAU" alt="Huan chuong">
<h1>Thx for Phandy <?php if(isset($_POST["name"])) { echo $_POST["name"]; } ?> !!</h1>
<p>We received your application for the <?php if(isset($_POST["Club"])) { echo $_POST["Club"]; } ?></p>

<p>You are a <?php if(isset($_POST["Saturday"])) { echo $_POST["Saturday"]; } ?></p>

<?php
$printAnd = false; // Biến trung gian để kiểm tra xem có nên in "and" hay không

?>

<p>Your skills <?php if(isset($_POST["the_best_coder"])) { echo $_POST["the_best_coder"]; $printAnd = true; } ?>
<?php if(isset($_POST["good_in_arts"])) { if($printAnd) { echo " and "; } echo $_POST["good_in_arts"]; $printAnd = true; } ?>
<?php if(isset($_POST["a_super_star"])) { if($printAnd) { echo " and "; } echo $_POST["a_super_star"]; $printAnd = true; } ?>
<?php if(isset($_POST["a_crazy_dancer"])) { if($printAnd) { echo " and "; } echo $_POST["a_crazy_dancer"]; $printAnd = true; } ?>
<?php if(isset($_POST["singer"])) { if($printAnd) { echo " and "; } echo $_POST["singer"]; $printAnd = true; } ?>
<?php if(isset($_POST["good_in_design"])) { if($printAnd) { echo " and "; } echo $_POST["good_in_design"]; $printAnd = true; } ?>
<?php if(isset($_POST["the_best_eater"])) { if($printAnd) { echo " and "; } echo $_POST["the_best_eater"]; $printAnd = true; } ?>
<?php if(isset($_POST["good_in_speeches"])) { if($printAnd) { echo " and "; } echo $_POST["good_in_speeches"]; $printAnd = true; } ?>
<?php if(isset($_POST["submit"])) { if($printAnd) { echo " and "; } echo $_POST["submit"]; } ?>
</p>

  </body>
</html>