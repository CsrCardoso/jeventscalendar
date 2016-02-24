<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// Get an instance of the controller prefixed by HelloWorld
// creamos controlador
$controller = JControllerLegacy::getInstance('Jeventscalendar');
 
// Perform the Request task
// ejecutamos tarea: /index.php?option=com_helloworld&task=<nombre_tarea
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();