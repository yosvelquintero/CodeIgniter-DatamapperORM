<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Javascript extends Backend_Controller {

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
		return $this->twig->display('contents/javascript/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), 'javascript', NULL, 'basic')
        ));
	}
}

/* End of file javascript.php */
/* Location: ./application/controllers/javascript.php */