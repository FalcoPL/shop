<?php
	/**
	* 
	*/
	class Shop extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
			$this -> load -> database();
			$this -> load -> model('product_model');
			$this -> load -> helper('url_helper');
		}

		public function Index()
		{
			$this -> load -> view('templates/header');
			$this -> load -> view('index');
			$this -> load -> view('templates/footer');
		}

		public function search($data)
		{
			$data['products'] = $this -> product_model -> get($data, null);

			$this -> load -> view('templates/header');
			$this -> load -> view('search', $data);
			$this -> load -> view('templates/footer');
		}

		public function view($id)
		{
			$data['products'] = $this -> product_model -> get(null, $id);

			$this -> load -> view('templates/header');
			$this -> load -> view('view', $data);
			$this -> load -> view('templates/footer');
		}
	}