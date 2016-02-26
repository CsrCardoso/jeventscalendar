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
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class JeventscalendarModelJeventscalendar extends JModelItem
{
	/**
	 * @var array messages
	 */
	protected $messages;
 
	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'Jeventscalendar', $prefix = 'JeventscalendarTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
 
	/**
	 * Get the message
	 *
	 * @param   integer  $id  Greeting Id
	 *
	 * @return  string        Fetched String from Table for relevant Id
	 */
	public function getMsg($id = 1)
	{
		if (!is_array($this->messages))
		{
			$this->messages = array();
		}
 
		if (!isset($this->messages[$id]))
		{
			// Request the selected id
			$jinput = JFactory::getApplication()->input;
			$id     = $jinput->get('id', 1, 'INT');
 
			// Get a TableHelloWorld instance
			$table = $this->getTable();
 
			// Load the message
			$table->load($id);
 

			//CONSULTAMOS TODAS LOS EVENTOS PROXIMOS:

			 // Get a db connection.
			$db = JFactory::getDbo();
			 
			// Create a new query object.
			$query = $db->getQuery(true);
			 
			// Select all records from the user profile table where key begins with "custom.".
			// Order it by the ordering field.
			$query->select($db->quoteName(array('id', 'date_from', 'date_to', 'title', 'description', 'link')));
			$query->from($db->quoteName('#__jeventscalendar'));
			$query->where($db->quoteName('date_from') . ' > '. $db->quote($table->date_from));
			$query->order('date_from ASC');
			 
			// Reset the query using our newly populated query object.
			$db->setQuery($query);
			 
			// Load the results as a list of stdClass objects (see later for more options on retrieving data).
			$results = $db->loadObjectList();


			//GENERAMOS ARRAY A MOSTRAR:

			// Assign the message
			$this->messages['id'] = $table->id;
			$this->messages['date_from'] = $table->date_from;
			$this->messages['date_to'] = $table->date_to;
			$this->messages['type'] = $table->type;
			$this->messages['title'] = $table->title;
			$this->messages['description'] = $table->description;
			$this->messages['link'] = $table->link;
			$this->messages['lugar'] = $table->lugar;
			$this->messages['items'] = $results;
		}
 
		return $this->messages;
	}
}