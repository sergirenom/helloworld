<?php
App::uses('Math', 'Model');

class LettersBehaviorTest extends CakeTestCase {
  //public $fixtures = array('app.math');
  public function setUp() {
    parent::setUp();
    $this->Math = ClassRegistry::init('Math');
  }

  public function testSum() {
    $result = $this->Math->sum('fdkj', 5);
    $expected = 9;
    $this->assertEquals($expected, $result);
  }
}
?>
