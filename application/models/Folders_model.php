<?php
    class Folders_model extends CI_Model {

        public $folder;

        public function list_messages() {
            $this->db->where('folder', $this->folder);
            $this->db->order_by('time', 'DESC');
            $data = $this->db->get('messages');
            
            return $data->result_array();
        }
    }
?>