<?php
    class Compose_model extends CI_Model {

        public function send($data) {
            $this->db->insert('messages', $data);
        }
    }
?>