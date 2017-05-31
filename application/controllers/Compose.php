<?php
    class Compose extends CI_Controller {
        public function index() {
            redirect('compose/message');
        }

        public function message() {
            $sidenav['selected'] = 'none';
            $this->load->view('templates/header');
            $this->load->view('templates/sidenav', $sidenav);
            $this->load->view('compose');
            $this->load->view('templates/footer');
        }
    }
?>