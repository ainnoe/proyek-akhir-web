<?php

class m_auth extends CI_Model
{
    public function getData()
    {
        return $this->db->query('SELECT a.*,b.kelas
    FROM t_datasiswa a
    JOIN t_kelas b 
    WHERE a.id_kelas=b.id_kelas
    ORDER BY a.id_kelas,b.id_kelas')->result();
    }
    
}