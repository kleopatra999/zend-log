<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Log
 */

namespace Zend\Log;

use Zend\Log\LoggerInterface;

/**
 * Logger aware interface
 *
 * @category   Zend
 * @package    Zend_Log
 */
interface LoggerAwareInterface
{
    public function setLogger(LoggerInterface $logger);
}
