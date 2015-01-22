<?php

namespace Application\Form;

use Zend\Form\Form;

class ItemForm extends Form
{
  public function init()
  {
    $this->add([
      'name' => 'hoge',
      'type' => 'Zend\Form\Element\Collection',
      'options' => [
        'label' => 'Features',
        'count' => 2,
        'allow_add' => true,
        'target_element' => [
          'type'    => 'Application\Form\ItemFieldSet',
        ],
      ]
    ]);

    $this->add(array(
      'name' => 'honge',
    ));
      $this->add(array(
        'name' => 'submit',
        'attributes' => array(
          'type' => 'submit',
          'value' => 'Send',
        ),
      ));
  }
}
