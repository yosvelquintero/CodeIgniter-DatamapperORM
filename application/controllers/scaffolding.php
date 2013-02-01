<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scaffolding extends Backend_Controller {

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
		return $this->twig->display('contents/scaffolding/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), 'scaffolding', NULL, 'basic')
        ));
	}
}

/* End of file scaffolding.php */
/* Location: ./application/controllers/scaffolding.php */