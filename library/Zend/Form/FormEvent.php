<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Form;

use Zend\EventManager\Event;

/**
 * Custom event for use with forms
 */
class FormEvent extends Event
{
    /**#@+
     * Form events triggered by eventmanager
     */
    CONST EVENT_VALIDATE = 'validate';
    CONST EVENT_PREPARE  = 'prepare';
    /**#@-*/

    /**
     * @var FormInterface
     */
    protected $form;

    /**
     * @var FormElementManager
     */
    protected $formElementManager;

    /**
     * @var Factory
     */
    protected $formFactory;

    /**
     * Get the form instance
     *
     * @return FormInterface
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set the name of a given module
     *
     * @param  FormInterface $form
     * @return FormEvent
     */
    public function setForm(FormInterface $form)
    {
        // Performance tweak, don't add it as param.
        $this->form = $form;

        return $this;
    }

    /**
     * Get form element manager instance
     *
     * @return FormElementManager
     */
    public function getFormElementManager()
    {
        return $this->formElementManager;
    }

    /**
     * Set form element manager
     *
     * @param  FormElementManager $formElementManager
     * @return FormEvent
     */
    public function setFormElementManager(FormElementManager $formElementManager)
    {
        // Performance tweak, don't add it as param.
        $this->formElementManager = $formElementManager;

        return $this;
    }

    /**
     * Get the form factory instance
     *
     * @return Factory
     */
    public function getFormFactory()
    {
        return $this->formFactory;
    }

    /**
     * Set form factory
     *
     * @param  Factory $formFactory
     * @return FormEvent
     */
    public function setFormFactory(Factory $formFactory)
    {
        // Performance tweak, don't add it as param.
        $this->formFactory = $formFactory;

        return $this;
    }
}
