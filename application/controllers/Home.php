
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Home extends CI_Controller {
        public function index() {
            

            //$this->middle = 'Home/home'; // its your view name, change for as per requirement.
            //$this->layout();
            $this->load->view('Home/home');
        }
    }