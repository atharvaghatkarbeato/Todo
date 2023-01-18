

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test_model extends CI_Model{

    public function getdata()
    {
        $query = $this->db->get('test2'); 
        return $query ->result();
    }

    function insert_table_data($data){
        
        $data = array( 
            'title'=> $data[0],
            'description' => $data[1] );

       if($this->db->insert("test2", $data))
       {
        echo " success";
       }
       else {
        echo "query failed";
       }
        // $this ->load->controller('Test');
    }

    // function select_data(){
    //     $this->db->select("*");
    //     $this->db->from("test2");
    //     $query = $this->db->get();  
    //     return $result = $query->result();
    // }

    public function editdata($sno){

        $query = $this->db->get_where('test2', ['sno'=>$sno]);
        return $query->row_array();
    }

    public function updatedata($data,$sno){

        return $this->db->update('test2' ,$data, ['sno' =>$sno] );
    }

    public function deletedata($sno){

        return $this->db->delete('test2',['sno' =>$sno]);
    }
}