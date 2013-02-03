<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        // if($this->config->item('site_open') === FALSE)
        // {
        //     show_error('Sorry the site is shut for now.');
        // }

        // // If the user is using a mobile, use a mobile theme
        // $this->load->library('user_agent');
        // if( $this->agent->is_mobile() )
        // {
        //     /*
        //      * Use my template library to set a theme for your staff
        //      *     http://philsturgeon.co.uk/code/codeigniter-template
        //      */
        //     $this->template->set_theme('mobile');
        // }
    }
}

/* End of file Frontend_Controller.php */
/* Location: ./application/core/Frontend_Controller.php */