<?php

Class User_model extends CI_Model
{
    /**
     * ���� �����������
     * @param var $mail ����� �����������
     * @param var $password ������ �����������
     * @return true  None
     */

    function sign_up($data)
    {
        $query = $this->db->insert("Users",array( "name"=>$data['full_name'],"pass"=>$data['pass'], "tel"=>$data['tel'],
                                                "email"=>$data['email'], "company"=>$data['company'], "role"=>$data['role']));
        return $this->db->insert_id();
    }

    function get_profile($data)
    {
        $this->db->select('idUser, name, role');
        $query = $this->db->get_where('Users', array("pass"=>$data['pass'], "email"=>$data['email']));
        return $query->result();
        /*if ($query->result_id->num_rows == 1)   return 'true';
        else                                    return 'false';*/
    }

    function save_result($data, $id)
    {
        $this->db->where('idUser', $id);
        $this->db->update('Users', $data);
    }
}


