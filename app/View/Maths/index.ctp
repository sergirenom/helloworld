<h1>SUM</h1>

<form action="" method="post">
  <label>Summand</label>
  <input type="text" name="summand1" /><br>
  <label>Summand</label>
  <input type="text" name="summand2" /><br><br>
  <input  type="submit" name="button" value="SUM">
</form>

<?php
    if(isset($_POST['button']))
    {
        $sum1 = $_POST['summand1'];
        $sum2 = $_POST['summand2'];
        if (is_numeric($sum1) and is_numeric($sum2)) {
          $result =  $sum1+$sum2;
          echo "The total value is: ".$result;
        } else {
          echo "Some summand is not a number.";
        }
    }
?>
