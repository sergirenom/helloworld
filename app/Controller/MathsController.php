<?php
  class MathsController extends AppController {

    public function index() {

          if($this->request->is('post'))
          {
              $sum1 = $this->request->data['summand1'];
              $sum2 = $this->request->data['summand2'];

              $this->set('sum1', $sum1);
              $this->set('sum2', $sum2);

              if (is_numeric($sum1) and is_numeric($sum2)) {
                $result =  $this->Math->sum($sum1, $sum2);
                //$this->Flash->success("The total value is: ".$result);
                $this->set('result', $result);
              } else {
                $this->Flash->success('Some summand is not a number');
              }
          }
      }
  }
?>
