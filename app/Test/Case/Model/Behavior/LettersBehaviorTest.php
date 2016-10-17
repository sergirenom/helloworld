<?php
App::uses('Math', 'Model');

class LettersBehaviorTest extends CakeTestCase {
  //public $fixtures = array('app.math');
  public function setUp() {
    parent::setUp();
    $this->Math = ClassRegistry::init('Math');
  }

  public function testSum() {
    $result = $this->Math->sum('-4', 5);
    $expected = 1;
    $this->assertEquals($expected, $result);
    debug($result);
    parent::tearDown();
  }

  public function testLetters() {
    $result = $this->Math->sum('jshvdsh', 'djhi');
    $expected = 0;
    $this->assertEquals($expected, $result);
    debug($result);
    parent::tearDown();
  }
}
?>
