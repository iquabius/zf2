<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Form;

use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerAwareInterface;
use Zend\EventManager\EventManagerInterface;

/**
 * Plugin manager implementation for form elements.
 *
 * Enforces that elements retrieved are instances of ElementInterface.
 */
class FormManager implements EventManagerAwareInterface
{
    /**
     * @var FormEvent
     */
    protected $event = null;

    /**
     * @var EventManagerInterface
     */
    protected $eventManager = null;

    /**
     * Whether event manager is enabled
     *
     * @var bool
     */
    protected $isEventManagerEnabled = false;

    /**
     * @param ConfigInterface $configuration
     */
    public function __construct(\Zend\ServiceManager\ServiceManager $sm = null)
    {
        $this->event        = new FormEvent;
        $this->eventManager = new EventManager;
    }

    /**
     * Set a Form event
     *
     * @param  FormEvent $event
     * @return FormManager
     */
    public function setEvent(FormEvent $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Get the Form event instance
     *
     * @return FormEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set the event manager instance
     *
     * @param  EventManagerInterface $eventManager
     * @return FormManager
     */
    public function setEventManager(EventManagerInterface $eventManager)
    {
        $eventManager->setIdentifiers(array(
            __CLASS__,
            get_class($this),
        ));
        $this->eventManager = $eventManager;
        return $this;
    }

    /**
     * Retrieve the event manager
     *
     * @return EventManagerInterface
     */
    public function getEventManager()
    {
        return $this->eventManager;
    }
}
