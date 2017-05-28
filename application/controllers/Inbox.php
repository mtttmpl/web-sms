<?php
    class Inbox extends CI_Controller {
        public function index() {
            $sidenav['selected'] = 'inbox';
            $this->load->view('templates/header');
            $this->load->view('templates/sidenav', $sidenav);
            $this->load->view('inbox');
            $this->load->view('templates/footer');
        }

        public function sent() {
            $sidenav['selected'] = 'sent';
            $this->load->view('templates/header');
            $this->load->view('templates/sidenav', $sidenav);
            $this->load->view('sent');
            $this->load->view('templates/footer');
        }
    }
 ?>
