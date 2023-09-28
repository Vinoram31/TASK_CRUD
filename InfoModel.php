<?php
class InfoModel extends CI_Model{
    public function updateData($info,$id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->update($info,'employeinfo');
    }
    public function editdata($id){
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('employeinfo')->result();
    }

    public function insertData($info){
        //echo 'you have accessed';
        //print_r($info);
        $this->load->database();
        return $this->db->insert('employeinfo',$info);
    }

    public function getRecord(){
        $this->load->database();
        return $this->db->get('employeinfo')->result();
         //echo'<pre>';
         //print_r($result);
        //echo'</pre>';
        //echo 'you accesed';
    }
}