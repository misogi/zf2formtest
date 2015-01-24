<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ItemForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
      $form = new ItemForm;
      $form->init();

      $post = $this->params()->fromPost();
      var_dump($post);
      $form->setData($post);


      $form->isValid();
      var_dump($form->getMessages());
      $validatedPost = $form->getData();

      var_dump($validatedPost);
        return new ViewModel(['form' => $form]);
    }
}
