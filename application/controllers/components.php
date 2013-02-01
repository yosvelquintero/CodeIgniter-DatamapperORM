<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Components extends Backend_Controller {

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
		return $this->twig->display('contents/components/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), 'components', NULL, 'basic')
        ));
	}
}

/* End of file components.php */
/* Location: ./application/controllers/components.php */