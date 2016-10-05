<?php
  class Math extends AppModel {

    var $name = 'Math';

    public function sum($sum1, $sum2) {
      return $sum1 + $sum2;
    }

  }
?>
