<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_css extends Backend_Controller {

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
		return $this->twig->display('contents/base_css/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), 'base_css', NULL, 'basic')
        ));
	}
}

/* End of file base_css.php */
/* Location: ./application/controllers/base_css.php */