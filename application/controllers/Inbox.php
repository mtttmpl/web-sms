<?php
    class Inbox extends CI_Controller {
        public function view($page = 1) {
            $this->load->view('templates/header');

            $this->load->view('templates/footer');
        }
    }
 ?>
