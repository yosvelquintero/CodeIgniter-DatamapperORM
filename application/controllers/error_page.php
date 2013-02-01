<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_page extends CI_Controller {

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
		// menu
		$this->load->library('menu', array('container_tag_class' => 'nav'));

		$u = new User();
		$user = $u->where('id', 1)->limit(1)->get();

        $this->twig->display('contents/error_page/index_view.html.twig', array(
        	'menu' => $this->menu->render($this->config->item('bootstrap'), NULL, NULL, 'basic'),
        	'user' => $user
        ));
	}
}

/* End of file error_page.php */
/* Location: ./application/controllers/error_page.php */