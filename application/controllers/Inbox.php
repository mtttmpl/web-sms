<?php
    class Inbox extends CI_Controller {
        public function index() {
            $this->load->view('templates/header');
            $this->load->view('inbox');
            $this->load->view('templates/footer');
        }

        public function sent() {
            $this->load->view('templates/header');
            $this->load->view('sent');
            $this->load->view('templates/footer');
        }
    }
 ?>
