<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    
        public function index()
        {
            //return $this->load->view('test1');
            $this->load->model('test_model');
            $data['test2'] = $this->test_model->getdata(); // variable declared in array format
            
            $this->load->view('test1', $data);

        }

        // public function testfunction1() {
            
            

        // }
        public function insert_data_into_table()
        {
            echo " hi";
            $this->load->model('test_model'); 
            var_dump($this->input->post());
            $data =array(
                    $this->input->post("title"),
                    $this->input->post("description")
            );
            $this->test_model->insert_table_data($data);
            // $data = $this->test_model->select_data();
            // return $this->load->view('test1',$data);
            redirect(base_url('test'));
            
        }   
        // public function get_data(){
            
        //     // $this->load->model('test_model');
        //     $data = $this->test_model->select_data();
        //     print_r($data);
        // }
        
        public function edit($sno){
            $this->load->model('test_model');
            $data['test2'] = $this->test_model->editdata($sno);
            $this->load->view('edit' ,$data);
        }

        public function update($sno)
        {
            $data =array(
                'title' =>$this->input->post("title"),
                'description' =>$this->input->post("description")
        );
            $this->load->model('test_model');
            $this->test_model->updatedata($data, $sno);
            redirect(base_url('test'));
        }
        public function delete($sno)
        {
            $this->load->model('test_model');
            $this->test_model->deletedata($sno);
            redirect(base_url('test'));
        }

}
