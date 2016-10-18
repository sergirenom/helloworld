<?php
App::uses('MathsController', 'Controller');
class MathsControllerTest extends ControllerTestCase {
  //public $fixtures = array('app.math');
  /*public function testIndex() {
    $result = $this->testAction('/maths/index');
    debug($result);
  }*/
  //public $fixtures = array('app.math');
  public function testIndex() {
    $data = array(
    //  'Math' => array(
        'summand1' => 1,
        'summand2' => -22
  //    )
    );
    $result = $this->testAction('/maths/index', array('return' => 'vars', 'fixturize' => true, 'data'=> $data, 'method' => 'post')); // Act
    debug($result);
    $this->assertEquals(-21, $result['result']); // Assert
    //debug($result);
  }
}
?>
