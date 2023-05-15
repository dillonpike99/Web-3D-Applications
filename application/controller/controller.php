<?php

class Controller {

	public $load;
	public $model;

	function __construct($pageURI = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageURI();
	}

	function home()
	{
		$data = $this->model->dbGetHomeData();
		$this->load->view("home", $data);
	}

	function drinks()
	{
		$data = $this->model->dbGetDrinksData();
		$this->load->view("drinks", $data);
	}

	function buildDB()
	{
		$data = $this->model->buildDB();
		$this->load->view("viewMessage", $data);
	}
}

?>