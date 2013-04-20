<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Form;

/**
 * @deprecated As of 2.2.0 <b>Form Factory</b> should be retrieved via <b>Form Manager</b> by implementing
 *             <i>FormManagerAwareInterface</i>
 */
interface FormFactoryAwareInterface
{
    /**
     * Compose a form factory into the object
     *
     * @param Factory $factory
     */
    public function setFormFactory(Factory $factory);
}
