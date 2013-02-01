<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends Backend_Controller {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Index
	 */
	public function index()
	{
		return $this->demo_form();
	}

	/**
	 * Form
	 */
	public function demo_form()
	{
		// Group Class
		$g = new Group();

		// Is posted data?
        if ($this->input->post())
        {
        	// User Class
			$u = new User();
			$u->from_array($this->input->post(NULL, TRUE), array('name', 'username', 'email', 'password', 'confirm_password'));

			$g->where('id', $this->input->post('group'))->limit(1)->get();

            // Save user posted data
            if ( ! $u->save($g))
            	$errors =  $u->error->string;
            else
            {
            	return redirect ('demo/demo_list');
            }

            // Clearing group
        	$g->clear();
        }

        // Get all groups
		$g->get();

		return $this->twig->display('contents/demo/form_view.html.twig', array(
			'menu' => $this->menu->render($this->config->item('bootstrap'), 'demo', NULL, 'basic'),
			'page_title' => 'Demo > Form',
			'groups' => $g->all_to_single_array('name'),
			'post_data' => $this->input->post(),
			'form_errors' => isset($errors) ? $errors : NULL
		));
	}

	/**
	 * Users_list
	 */
	public function demo_list()
	{
		// User Class
		$u = new User();
		$u->include_related('group')->get();


		return $this->twig->display('contents/demo/list_view.html.twig', array(
			'menu' => $this->menu->render($this->config->item('bootstrap'), 'demo', NULL, 'basic'),
			'page_title' => 'Demo > list',
			'users' => $u
		));
	}
}

/* End of file demo.php */
/* Location: ./application/controllers/demo.php */