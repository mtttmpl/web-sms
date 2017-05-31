<?php
    class Compose extends CI_Controller {
        public function index() {
            redirect('compose/message');
        }

        public function message() {
            $this->load->view('templates/header');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('to', 'To', 'required|min_length[6]|numeric');
            $this->form_validation->set_rules('message', 'Message', 'required');
            
            if ($this->form_validation->run() == FALSE) :
                // form did not validate or was not submitted so load view
                $sidenav['selected'] = 'none';
                $this->load->view('templates/sidenav', $sidenav);
                $this->load->view('compose');
            else :
                // form did validate to action data and go to inbox
                redirect('folders/sent');
            endif;
            $this->load->view('templates/footer');
        }
    }
?>