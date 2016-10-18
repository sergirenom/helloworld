<?php
App::uses('MathsController', 'Controller');
class MathsControllerTest extends ControllerTestCase {
  public function testNumbers() {
    $sum1 = 1;
    $sum2 = -22;
    $data = array(
        'summand1' => $sum1,
        'summand2' => $sum2
    );
    $result = $this->testAction('/maths/index', array('return' => 'vars', 'fixturize' => true, 'data'=> $data, 'method' => 'post')); // Act
    debug($result);
    $this->assertEquals(-21, $result['result']); // Assert
  }

  public function testLetters() {
    $sum1 = 'Hey';
    $sum2 = 'Ho';
    $data = array(
        'summand1' => $sum1,
        'summand2' => $sum2
    );
    $result = $this->testAction('/maths/index', array('return' => 'vars', 'fixturize' => true, 'data'=> $data, 'method' => 'post')); // Act
    debug($result);
    $this->assertEquals('Summands are not numric', $result['error']); // Assert
  }
}
?>
