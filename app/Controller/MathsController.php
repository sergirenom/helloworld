<?php
  App::uses('AppController', 'Controller');
  class MathsController extends AppController {

    public function index() {
      if (!empty($this->request->data)) {
        
        $sum1 = $this->request->data['summand1'];
        $sum2 = $this->request->data['summand2'];

        $this->set('sum1', $sum1);
        $this->set('sum2', $sum2);
        if (is_numeric($sum1) and is_numeric($sum2)) {
          $result =  $this->Math->sum($sum1, $sum2);
          $this->set('result', $result);
        } else {
          $this->set('error', 'Summands are not numric');
          $this->Flash->success('Some summand is not a number');
        }
    }
  }
}
?>
