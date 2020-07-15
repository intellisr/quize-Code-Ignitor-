<?php

    class ToptenModel extends CI_Model{

        function get_topten()
        {   
            $this->db->select('id,name,score');
            $this->db->from('tbl_players');
            $this->db->order_by('score','desc');
            $this->db->limit(10);
            $query = $this->db->get();
            return  $query->result_array();   
        }

        function UpdatePlayer($score,$name)
        {
            $this->db->set('name', $name);
            $this->db->set('score', $score);
            $data=$this->db->insert('tbl_players');

            return $data;
        }
    }


?>
