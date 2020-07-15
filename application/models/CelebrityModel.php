<?php

    class CelebrityModel extends CI_Model{

        function add($data)
        {   
            $celebrity = $this->db->insert('tbl_celebrities', $data);

            return $celebrity;
            
        }
    }


?>
