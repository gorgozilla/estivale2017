<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 

jimport('joomla.application.component.modellist');
 
class EstipressModelAccred extends JModelList
{
	//Add this handy array with database fields to search in
	protected $searchInFields = array('u.name', 'u.email');
	
	function __construct()
	{   
		$config['filter_fields'] = array(
			'u.name',
			'u.email'
		);
		$config['filter_fields']=array_merge($this->searchInFields,array('b.accred'));
		parent::__construct($config);  
		
		
		$app = JFactory::getApplication();
		$this->_accred_id = $app->input->get('accred_id', null);
	}
  
	protected function populateState($ordering = null, $direction = null) {
		$app = JFactory::getApplication();
		
		// Load the filter state.
		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		//Omit double (white-)spaces and set state
		$this->setState('filter.search', preg_replace('/\s+/',' ', $search));
		
		//Filter (dropdown) days presence
		$days_presence= $app->getUserStateFromRequest($this->context.'.filter.day_presence', 'filter_day_presence', '', 'string');
		$this->setState('filter.day_presence', $days_presence);
		
		// Get pagination request variables
		$limit = $app->getUserStateFromRequest('global.list.limit', 'limit', $app->getCfg('list_limit'), 'string');
		$limitstart = JRequest::getVar('limitstart', 0, '', 'int');

		// In case limit has been changed, adjust it
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
		
		$this->setState('limit', $limit);
		$this->setState('limitstart', $limitstart);
		
		parent::populateState('b.user_id', 'ASC');
	}

  function getTotal()
  {
 	// Load the content if it doesn't already exist
 	if (empty($this->_total)) {
 	    $query = $this->_buildQuery();
		$query = $this->_buildWhere($query);
 	    $this->_total = $this->_getListCount($query);	
 	}
 	return $this->_total;
  }

  function getPagination()
  {
 	// Load the content if it doesn't already exist
 	if (empty($this->_pagination)) {
 	    jimport('joomla.html.pagination');
 	    $this->_pagination = new JPagination($this->getTotal(), $this->getState('limitstart'), $this->getState('limit') );
 	}
 	return $this->_pagination;
  }
 
	/**
	* Builds the query to be used by the accred model
	* @return   object  Query object
	*
	*
	*/
	protected function _buildQuery()
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(TRUE);

		$query->select('*');
		$query->from('#__estipress_accred as b');
		$query->from('#__users as u');
		$query->from('#__user_profiles as p');

		return $query;
	}

	/**
	* Builds the filter for the query
	* @param    object  Query object
	* @return   object  Query object
	*
	*/
	protected function _buildWhere(&$query)
	{
		$db = JFactory::getDBO();
		$query->where('b.user_id=p.user_id');
		$query->where('b.user_id=u.id');
		
		if(is_numeric($this->_accred_id)) 
		{
			$query->where('b.accred_id = ' . (int) $this->_accred_id);
		}
		
		// Filter search // Extra: Search more than one fields and for multiple words
		$regex = str_replace(' ', '|', $this->getState('filter.search'));
		if (!empty($regex)) {
			$regex=' REGEXP '.$db->quote($regex);
			$query->where('('.implode($regex.' OR ',$this->searchInFields).$regex.')');
		}
		
		$day_presence= $db->escape($this->getState('filter.day_presence'));
		if (!empty($day_presence)) {
			$query->where('b.user_id IN (SELECT b.user_id FROM #__estipress_accred as b,#__users as u,#__user_profiles as p WHERE b.user_id=p.user_id AND b.user_id=u.id AND (p.profile_value LIKE \'%'.$day_presence.'%\' AND p.profile_key=\'estipress.dates_presence\') group by b.user_id)');
		}
		
		$query->group('b.user_id');
		return $query;
	}

	public function getItem()
	{
		$db = JFactory::getDBO();

		$query = $this->_buildQuery();
		$this->_buildWhere($query);
		$db->setQuery($query);

		$item = $db->loadObject();

		return $item;
	}

	/**
	* Build query and where for protected _getList function and return a list
	*
	* @return array An array of results.
	*/
	public function listItems()
	{
		$query = $this->_buildQuery();    
		$query = $this->_buildWhere($query);
		$list = $this->_getList($query, $this->getState('limitstart'), $this->getState('limit'));
		return $list;
	}
	
	/**
	* Build query and where for protected _getList function and return a list
	*
	* @return array An array of results.
	*/
	public function getTotalItems($sex = null)
	{
		$query = $this->_buildQuery();  
		$query = $this->_buildWhere($query);
		if($sex != null){
			$query->where('b.user_id IN (SELECT b.user_id FROM #__estipress_accred as b,#__users as u,#__user_profiles as p WHERE b.user_id=p.user_id AND b.user_id=u.id AND (p.profile_value=\'"'.$sex.'"\' AND p.profile_key=\'profilestipress.sex\') group by b.user_id)');
		}
		//echo $query;
		$list = $this->_getList($query);
		return $list;
	}

	/**
	* Gets an array of objects from the results of database query.
	*
	* @param   string   $query       The query.
	* @param   integer  $limitstart  Offset.
	* @param   integer  $limit       The number of records.
	*
	* @return  array  An array of results.
	*
	* @since   11.1
	*/
	protected function _getList($query, $limitstart = 0, $limit = 0)
	{
		$db = JFactory::getDBO();
		$query->order($db->escape($this->getState('list.ordering', 'u.name')).' '.$db->escape($this->getState('list.direction', 'ASC')));
		$db->setQuery($query, $limitstart, $limit);
		$result = $db->loadObjectList();
		return $result;
	}
	
	public function getProfileEstipress($userId)
	{
		// Load the profile data from the database.
		$db = JFactory::getDbo();
		$db->setQuery(
			'SELECT profile_key, profile_value, email FROM #__user_profiles as p, #__users as u' .
			' WHERE p.user_id = '.(int) $userId .
			' AND p.user_id=u.id'.
			' AND p.profile_key LIKE \'estipress.%\'' .
			' ORDER BY ordering'
		);
		$results = $db->loadRowList();
 
		// Check for a database error.
		if ($db->getErrorNum()) {
			$this->_subject->setError($db->getErrorMsg());
			return false;
		}
 
		// Merge the profile data.
		$data->estipress = array();
		foreach ($results as $v) {
			$k = str_replace('estipress.', '', $v[0]);
			$data->estipress[$k] = json_decode($v[1], true);
		}
		$data->estipress['email'] = $results[0][2];
		
		return $data;
	}

	/**
	* Delete a accred
	* @param int      ID of the accred to delete
	* @return boolean True if successfully deleted
	*/
	public function delete($id = null)
	{
		$app  = JFactory::getApplication();
		$id   = $id ? $id : $app->input->get('accred_id');

		$accred = JTable::getInstance('Accred','Table');
		$accred->load($id);

		$accred->published = 0;

		if($accred->store()) 
		{
			return true;
		} else {
			return false;
		}
	}
}