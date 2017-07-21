<?php
	/**
	* 
	*/
	class product_model extends CI_Model
	{
		
		function __construct()
		{
			
		}

		public function get($data = null, $id = null)
		{
			if ($data !== null) {
				$query = $this -> db -> get_where('products', $data);
			}
			elseif ($id !== null)
			{
				$query = $this -> db -> get_where('products', $id);
			}
			else
			{
				$query = $this -> db -> get('products');
			}

			return $query -> result();
		}
	}