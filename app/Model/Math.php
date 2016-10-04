<?php
  class Math extends AppModel {

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
