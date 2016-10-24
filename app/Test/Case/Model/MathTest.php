<?php
App::uses('Math', 'Model');

class MathTest extends CakeTestCase {
  //public $fixtures = array('app.math');
  public function setUp() {
    parent::setUp();
    $this->Math = ClassRegistry::init('Math'); // Arrange
  }

  public function testSum() {
    $result = $this->Math->sum('-4', 5); // Act
    $expected = 1;
    $this->assertEquals($expected, $result); // Assert
    debug($result);
  }

  public function testLetters() {
    $result = $this->Math->sum('jshvdsh', 'djhi'); // Act
    $expected = 0;
    $this->assertEquals($expected, $result); // Assert
    debug($result);
  }
}
?>
