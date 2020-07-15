<?php

    class QuizModel extends CI_Model{

        function get_allcalebrities()
        {   
            $this->db->select('id,name,image');
            $this->db->from('tbl_celebrities');
            $this->db->where('used', 0);
            $this->db->order_by('id','RANDOM');
            $query = $this->db->get();
            return  $query->result_array();   
        }

        function updateCeleb($celeb)
        {
            $this->db->set('used', 1);
            $this->db->where('id', $celeb);
            $celebrity = $this->db->update('tbl_celebrities');

            return $celebrity;
        }
    }


?>
