
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User_Controller extends MY_Controller 
    { 
        //set the class variable.
        public $template  = array();
        public $data      = array();
        
        /*Loading the default libraries, helper, language */
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('form','language','url'));
            //$this->lang->load('english');
        }
        
        /*Front Page Layout*/
        public function layout() {
            // making template and send data to view.
            $this->template['title']="ایت من";
            $this->template['header']   = $this->load->view('layout/user/header', $this->data, true);
            $this->template['left']   = $this->load->view('layout/user/left', $this->data, true);
            $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
            $this->template['footer'] = $this->load->view('layout/user/footer', $this->data, true);
            $this->load->view('layout/user/front', $this->template);
        }
    }