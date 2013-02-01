<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		//$this->output->enable_profiler(TRUE);
		$this->data['site_title'] = 'Welcome to CodeIgniter';
		
		/*
		$u = new User();

		$u->name = 'Yosvel Quintero Argüelles';
		$u->username = 'yosvel';
		$u->email = 'yosvelquintero@gmail.com';
		$u->password = 'lokoman';
		$u->confirm_password = 'lokoman';

		$g = new Group();
		$g->limit(1)->get();

		$this->data['errors'] = '';

		// And save them to the database (validation rules will run)
        if ( ! $u->save($g))
        {
            // or we can just show all errors in one string!
            $this->data['errors'] =  $u->error->string;
        }
        */
       
       	$this->data['user'] = new User();
       	$this->data['user']
       		->include_related('groups')
       		->where('id', 1)
       		->limit(1)
       		->get();



        $this->data['date'] = new \DateTime("now");

        $this->data['groups'] = new Group();
        $this->data['groups']->get();


        $this->twig->display('welcome_message.html', $this->data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */