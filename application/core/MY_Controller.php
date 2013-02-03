<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->output->enable_profiler(TRUE); // Enabled profiler...

		// $user_id = $this->session->userdata('user_id');
		// $this->data['user'] = $this->user_lib->get($user_id);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */