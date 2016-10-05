<?php
  class MathsController extends AppController {

    public function index() {

          if($this->request->is('post'))
          {
              $sum1 = $_POST['summand1'];
              $sum2 = $_POST['summand2'];
              if (is_numeric($sum1) and is_numeric($sum2)) {
                $result =  $this->Math->sum($sum1, $sum2);
                $this->Flash->success("The total value is: ".$result);
              } else {
                $this->Flash->success('Some summand is not a number');
              }
          }
      }
  }
?>
