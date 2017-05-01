<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_weblinks
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Service Table class
 *
 * @package     Joomla.Administrator
 * @subpackage  com_weblinks
 * @since       1.5
 */
class TableAccred extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	public function __construct(&$db)
	{
		parent::__construct('#__estipress_accred', 'accred_id', $db);

		// JTableObserverTags::createObserver($this, array('typeAlias' => 'com_weblinks.weblink'));
		// JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_weblinks.weblink'));
	}
}
