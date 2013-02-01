<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_started extends Backend_Controller {

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index 
	 */
	public function index()
	{
		return $this->twig->display('contents/get_started/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), 'get_started', NULL, 'basic')
        ));
	}
}

/* End of file get_started.php */
/* Location: ./application/controllers/get_started.php */