<h1>SUM</h1>

<form action="" method="post">
  <label>Summand 1</label>
  <input type="text" name="summand1" /><br>
  <label>Summand 2</label>
  <input type="text" name="summand2" /><br><br>
  <input  type="submit" name="button" value="SUM">
</form>
<br>
<?php
  if ($this->request->is('post') and is_numeric($sum1) and is_numeric($sum2)) {
    echo "<h1>" . $sum1 . " + " . $sum2 . " = " . $result . '</h1>';
  }
?>
