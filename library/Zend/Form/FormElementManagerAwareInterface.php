<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Form;

interface FormElementManagerAwareInterface
{
    /**
     * Inject a form element manager into the object
     *
     * @param FormElementManager $formElementManager
     */
    public function setFormElementManager(FormElementManager $formElementManager);

    /**
     * Retrieve the form element manager from the object
     *
     * @return FormElementManager
     */
    public function getFormElementManager();
}
