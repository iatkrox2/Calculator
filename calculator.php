<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple PHP Calculator</title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom Style -->
<link rel="stylesheet" href="calculator.css">
  </head>
  <body>

<div class="calculator">
    <form method="post" action="calculator.php">

      <input type="text" name="value1">
      <input type="text" name="value2">

        <select name="action">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        </select>
      <input class="btn btn-primary" type="submit" name="submit" value="Calculate Now">
    </form>


    <?php
    if (isset($_POST['submit'])) {
      $value1 = $_POST['value1'];
      $value2 = $_POST['value2'];
      $action = $_POST['action'];

      if ($action == "+") {
        echo "<b>Your Answer is:</b></br>";
        echo $value1+$value2;
      }

      if ($action == "-") {
        echo "<br>Your Answer is:</br></br>";
        echo $value1-$value2;
      }

      if ($action == "*") {
        echo "<b>Your Answer is:</b></br>";
        echo $value1*$value2;
      }

      if ($action == "/") {
        echo "<b>Your Answer is:</b></br>";
        echo $value1/$value2;
      }
    }
     ?>
</div>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>

  </body>
</html>
