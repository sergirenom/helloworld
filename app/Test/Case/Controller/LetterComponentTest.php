<?php
//App::uses('MathsController', 'Controller');

class LettersBehaviorTest extends ControllerTestCase {
  //public $fixtures = array('app.math');
  public function testIndex() {
    $result = $this->testAction('/maths/index');
    debug($result);
  }

  public function testSum() {
    $result = $this->testAction('/maths/maths/2/4');
    debug($result);
  }

}
?>
