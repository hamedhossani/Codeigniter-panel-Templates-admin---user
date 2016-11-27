
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Home_User extends User_Controller {
        public function index() {
            $this->middle = 'Home_User/home'; // its your view name, change for as per requirement.
            $this->layout();
        }
    }