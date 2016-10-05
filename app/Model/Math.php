<?php
  class Math extends AppModel {

    var $name = 'Math';
    
    public $validate = array(
      'summand' => array(
        'notEmpty' => array(
          'rule' => 'notBlank',
          'message' => 'Fill the field'
        ),
        'numeric' => array(
          'rule' => 'numeric',
          'message' => 'Only numbers'
        )
      )
    );

  }
?>
