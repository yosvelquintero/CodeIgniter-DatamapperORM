<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        // menu
		$this->load->library('menu', array('container_tag_class' => 'nav'));

        // if($this->data['user']['group'] !== 'admin')
        // {
        //     show_error('Shove off, this is for admins.');
        // }
    }
}

/* End of file Backend_Controller.php */
/* Location: ./application/core/Backend_Controller.php */