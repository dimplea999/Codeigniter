<?php
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();        
    }
    public function checkLogin($username,$password)
    {        
        $role   =   array('1','2');        
        $this->db->select('`m_id`, `m_name`, `m_addr`, `m_phnno`, `m_username`, `m_password`, `m_city`, `m_userImage`, `m_role`');
        $this->db->where('m_username', $username);
        $this->db->where('m_password', $password);        
        $this->db->where_in('m_role', $role);

        $query=$this->db->get('Members');
               
        if ($query->num_rows() > 0) {
             $row = $query->row();            
            return $row;
        } else {
            return false;
        }
    }

    public function getUser($userId=NULL)
    {
        $this->db->select('`m_id`, `m_name`, `m_addr`, `m_phnno`, `m_username`, `m_password`, `m_city`, `m_userImage`, `m_role`');        
        $this->db->where_in('m_role', 1);

        if(isset($userId) && $userId!=NULL)
        {
            $this->db->where_in('m_id', $userId);
        }
        return $this->db->get('Members')->result();        
    }

}