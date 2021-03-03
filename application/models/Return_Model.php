<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Return_Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function get($tableName, $match)
	{
        $this->db->select('book_table.book, return_table.id, return_table.member, return_table.code, return_table.status, return_table.release, return_table.return, return_table.expire,member_table.name');
        $this->db->from('book_table');
        $this->db->join('return_table', 'book_table.code_id = return_table.code');
        $this->db->join('member_table', 'return_table.member = member_table.member_id');

        if($match!=null){
            $this->db->like('return_table.member', $match);
            $this->db->or_like('return_table.code', $match);
        }
        
        $this->db->order_by('return_table.id', 'DESC');

        $query = $this->db->get();

		return $query->result();
	}

    public function verify($tableName, $match)
	{

        $query = $this->db->get_where($tableName,$match);

		return $query->result();
	}


    public function insert($tableName, $dataArray){
        $insert = $this->db->insert($tableName, $dataArray);

        if($insert){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

    public function update($tableName, $dataArray, $where){
        $this->db->where($where);
        $update = $this->db->update($tableName, $dataArray);

        if($update){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

    public function delete($tableName,$whereArray){
        $this->db->where($whereArray);
        $delete = $this->db->delete($tableName);

        if($delete){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }

        return $data;
    }

    public function details($tableName, $id)
	{
        $this->db->select('book_table.book, book_table.author, book_table.price, book_table.rack, book_table.class, book_table.arrival, return_table.id, return_table.member, return_table.code, return_table.status, return_table.release, return_table.return, return_table.expire, member_table.name, member_table.section, member_table.contact');
        $this->db->from('book_table');
        $this->db->join('return_table', 'book_table.code_id = return_table.code');
        $this->db->join('member_table', 'return_table.member = member_table.member_id');

        $this->db->where('return_table.id', $id);
        
        $query = $this->db->get();

		return $query->result();
	}

}

?>