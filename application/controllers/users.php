<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Backend_Controller {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();
	}

    /**
     * Index
     * @return string list view
     */
    public function index()
    {
        $this->page();
    }

	/**
	 * Page
	 * @return string list view
	 */
	public function page()
	{
		// User Class
		$u = new User();

        // pagination
        $this->load->library('pagination');
        $this->load->config('pagination');

        $total = $u->count();

        // pagination config
        $config['base_url'] = base_url('users/page');
        $config['total_rows'] = $total;
        $config['uri_segment'] = 3;

        $users = $u
            ->include_related('group')
            ->limit($this->config->item('per_page'))
            ->offset($this->uri->segment(3))
            ->get();

        $this->pagination->initialize($config);

		return $this->twig->display('contents/users/index_view.html.twig', array(
			'page_title' => 'Usuarios',
			'menu' => $this->menu->render($this->config->item('bootstrap'), 'users', NULL, 'basic'),
			'users' => $users,
            'total' => $total,
            'pagination_links' => $this->pagination->create_links(),
            'message' => $this->session->flashdata('message')
		));
	}

	/**
	 * Create
	 * @return string from create view
	 */
	public function create()
	{
		$u = new User(); // User object
		
		$g = new Group(); // Group object

		$post_data = $this->input->post(NULL, TRUE); // $_POST data

		// Is posted data?
        if ($post_data)
        {
			$errors = $this->_form_process($u, $g, $post_data);
        }

		return $this->twig->display('contents/users/form_view.html.twig', array(
			'page_title' => 'Usuarios',
			'menu' => $this->menu->render($this->config->item('bootstrap'), 'users', NULL, 'basic'),
			'groups' => $g->get()->all_to_single_array('name'), // Get all to single array
			'form_errors' => isset($errors) ? $errors : NULL,
			'value' => $post_data,
			'value_group' => $post_data['group']
		));
	}

	/**
	 * Edit
	 * @param  int    $id User id
	 * @return string     Form edit view
	 */
	public function edit($id)
	{
		$id + (int) $id;

		$u = new User(); // User object
		$u->where('id', $id)->include_related('group')->limit(1)->get();

        if ( ! $u->exists())
            redirect('error_page'); // error page...
		
		$g = new Group(); // Group object

		$post_data = $this->input->post(NULL, TRUE); // $_POST data

		// Is posted data?
        if ($post_data)
        {
			$errors = $this->_form_process($u, $g, $post_data);
        }

		return $this->twig->display('contents/users/form_view.html.twig', array(
			'page_title' => 'Usuarios',
			'menu' => $this->menu->render($this->config->item('bootstrap'), 'users', NULL, 'basic'),
			'groups' => $g->get()->all_to_single_array('name'), // Get all to single array
			'form_errors' => isset($errors) ? $errors : NULL,
			'value' => $u,
			'value_group' => $u->group_id,
		));
	}

	/**
	 * Form process
	 * @param  User   $u         User object
	 * @param  Group  $g         Group object
	 * @param  array  $post_data Posted data
	 * @return void            	 Errors or redirection to index view
	 */
	private function _form_process(User $u, Group $g, $post_data)
	{
		$u->from_array($post_data, array('name', 'username', 'email', 'password', 'confirm_password'));

		$g->where('id', $post_data['group'])->limit(1)->get();

        // Save user posted data
        if ( ! $u->save($g))
        	return $u->error->string;
        else {
        	$word = $this->uri->segment(3) == 'edit' ? 'editado' : 'creado';

        	$this->session->set_flashdata('message', 'Registro con id ' . $u->id . ' fue ' . $word . ' correctamente.');
        	return redirect ('users/index');
        }

    	$g->clear(); // Clearing group
	}

    /**
     * Delete user
     * @param  int $id  User id
     * @return void     Errors or redirection to index view
     */
    public function delete($id)
    {
        $id = (int) $id;

        $u = new User(); // User object
        $u->where('id', $id)->limit(1)->get();

        if ( ! $u->exists())
            redirect('error_page'); // error page...

        if ($u->delete())
            $this->session->set_flashdata('message', 'Registro con id ' . $id . ' fue borrado correctamente.');

        return redirect ('users/index');
    }

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */