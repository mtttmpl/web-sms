<?php
    class Folders extends CI_Controller {
        public function index() {
            redirect('folders/inbox');
        }

        public function inbox() {
            $this->load->model('folders_model');
            $this->folders_model->folder = 1;
            $messages['list'] = $this->folders_model->list_messages();
            $sidenav['selected'] = 'inbox';
            $this->load->view('templates/header');
            $this->load->view('templates/sidenav', $sidenav);
            $this->load->view('inbox', $messages);
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
