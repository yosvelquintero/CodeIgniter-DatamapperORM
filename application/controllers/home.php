<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Backend_Controller {

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
		return $this->twig->display('contents/home/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), 'home', NULL, 'basic')
        ));
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */