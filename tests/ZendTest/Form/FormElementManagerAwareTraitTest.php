<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Form
 */

namespace ZendTest\Form;

use PHPUnit_Framework_TestCase;
use Zend\Form\FormElementManager;

/**
 * @requires PHP 5.4
 */
class FormElementManagerAwareTraitTest extends PHPUnit_Framework_TestCase
{
    public function testSetFormElementManager()
    {
        $object = $this->getObjectForTrait('\Zend\Form\FormElementManagerAwareTrait');

        $this->assertAttributeEquals(null, 'formElementManager', $object);

        $formElementManager = new FormElementManager;

        $object->setFormElementManager($formElementManager);

        $this->assertAttributeEquals($formElementManager, 'formElementManager', $object);
    }

    public function testGetFormElementManager()
    {
        $object = $this->getObjectForTrait('\Zend\Form\FormElementManagerAwareTrait');

        $this->assertNull($object->getFormElementManager());

        $formElementManager = new FormElementManager;

        $object->setFormElementManager($formElementManager);

        $this->assertEquals($formElementManager, $object->getFormElementManager());
    }
}
