<?php
  class MathsController extends AppController {

    public function index() {

        /*  if($this->request->is('post'))
          {
              $sum1 = $_POST['summand1'];
              $sum2 = $_POST['summand2'];
              if (is_numeric($sum1) and is_numeric($sum2)) {
                $result =  $sum1+$sum2;
              //  echo "The total value is: ".$result;
                $this->Flash->success("The total value is: ".$result);
              } else {
                //echo "Some summand is not a number";
                $this->Flash->success('Some summand is not a number');
              }
          }*/
          $this->Math->set($this->request->data);
          if ($this->Math->validates()) {
            var_dump($this->Math->validates());
            echo "OK";
          } else {
            echo "not OK";
            $errors = $this->Math->validationErrors;
          }
    }

  }
/* isset($_POST['button'])
  if ($this->request->is('post')) {
    $this->Mesa->create();
    if($this->Mesa->save($this->request->data)) {
      $this->Flash->success('Taula creada');
      return $this->redirect(array('action' => 'index'));
    }
    $this->Flash->set("No s'ha pogut crear la taula");
  }
  $meseros = $this->Mesa->Mesero->find('list', array('fields'=>array('id', 'nom_complet')));
  $this->set('meseros', $meseros);
}*/
?>
