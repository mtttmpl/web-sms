<?php
    class Folders_model extends CI_Model {

        public $folder;

        public function list_messages() {
            $this->db->where('folder', $this->folder);
            $this->db->order_by('time', 'DESC');
            $data = $this->db->get('messages');
            
            return $data->result_array();
        }

        public function count_inbox() {
            $this->db->where('folder', '1');
            $this->db->where('status', '0');
            $this->db->from('messages');
            return $this->db->count_all_results();
        }
    }
?>