<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

  function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('item_model');
	}

  function index()
  {
    echo '123';
    echo '123123';
  }

  function list()
  {
    $items = $this->item_model->gets();

    echo $items;
  }

  function one()
  {

  }

}
