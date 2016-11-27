
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Home_Admin extends Admin_Controller {
        public function index() {
            $this->middle = 'Home_Admin/home'; // its your view name, change for as per requirement.
            $this->layout();
        }
    }