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

  <h2>Simple PHP Calculator</h2>

<hr>

    <form method="post" action="calculator.php">

      <div class="form-group">
        <label for="value1">Enter Value 1 : </lable>
          <input type="text" name="value1" id="value1">
      </div>

      <div class="form-group">
        <label for="value2"> Enter Value 1 : </lable>
          <input type="text" name="value2" id="value2">
      </div>

      <hr>

      <div class="form-group">
        <label for="options">Select an Option : </label>
        <select name="action" class="input-lg" id="options">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        </select>
      </div>

<hr>

      <input class="btn btn-lg btn-default cal-button" type="submit" name="submit" value="Calculate Now">
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $value1 = $_POST['value1'];
      $value2 = $_POST['value2'];
      $action = $_POST['action'];

      if ($action == "+") {
        echo "<p class=\"bg-primary answer lead\">Your Answer is : " . $value1+$value2 . "</p>";
      }

      if ($action == "-") {
        echo "<p class=\"bg-primary answer lead\">Your Answer is : " . $value1-$value2 . "</p>";
      }

      if ($action == "*") {
        echo "<p class=\"bg-primary answer lead\">Your Answer is : " . $value1*$value2 . "</p>";
      }

      if ($action == "/") {
          echo "<p class=\"bg-primary answer lead\">Your Answer is : " . $value1/$value2 . "</p>";
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
