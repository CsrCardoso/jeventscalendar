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
 
/**
 * HelloWorld Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
class JeventscalendarControllerJeventscalendar extends JControllerForm
{

	// FUNCION GUARDAR - MOD UPLOAD FILE A FUTURO 
	// Archivo afectado tambien para mod en: 
	// jquery_events_calendar_1.0\jeventscalendar\admin\models\forms\jeventscalendar.xml

    /*function save(){
    	        // Neccesary libraries and variables
    jimport( 'joomla.filesystem.folder' );
    jimport('joomla.filesystem.file');
        $file = JRequest::getVar('jform', null, 'files', 'array');
        $path = JPATH_BASE;

        // Make the file name safe.
        jimport('joomla.filesystem.file');
        $file['name']['pdf_file'] = JFile::makeSafe($file['name']['pdf_file']);

        // Move the uploaded file into a permanent location.
        if (isset($file['name']['pdf_file'])) {
            // Make sure that the full file path is safe.
            $filepath = JPath::clean($path. DS ."images". DS ."sampledata". DS .strtolower($file['name']['pdf_file']));
            // Move the uploaded file.
            JFile::upload( $file['tmp_name']['pdf_file'], $filepath );

            JRequest::setVar('jform',$file['name']['pdf_file'] );
        }



        return parent::save();
    }

    */
}