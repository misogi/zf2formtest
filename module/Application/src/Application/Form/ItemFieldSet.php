<?php

namespace Application\Form;

use Zend\Form\Fieldset;

class ItemFieldSet extends Fieldset
{

  public function __construct()
  {
    parent::__construct('hash');

    $this->add(array(
      'name' => 'hash',
    ));
  }
}
