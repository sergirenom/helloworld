<?php
//App::uses('MathsController', 'Controller');

class LettersBehaviorTest extends ControllerTestCase {
  //public $fixtures = array('app.math');
  public function testIndex() {
    $result = $this->testAction('/maths/index');
    debug($result);
    parent::tearDown();
  }

  public function testSum() {
    $result = $this->testAction('/maths/sum/2/-4');
    debug($result);
    parent::tearDown();
  }

}
?>
