<?php

/**
 * Description of form
 *
 * @author Ishrat
 */
class Form  extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
    }
    
    public function form_dropdown()
    {
        $this->load->view('registration_form');
    }
    
    public function data_submitted()
    {
        //storing the values send by submit using post method in an array
        $tech_array = $this->input->post('technical_skills');
        //converting array into a string
        $tech_val_string = serialize($tech_array);
        
        $data = array(
        'dropdown_single' => $this->input->post('Department'),
        'dropdown_multi' => $tech_val_string
                        );
        
            $this->load->model("db_dropdown");
            $this->db_dropdown->insert_in_db($data);
            $this->load->model("db_dropdown");
            $result = $this->db_dropdown->read_from_db($data);
            $data['result'] = $result[0];
            $this->load->view("registration_form", $data);
    }
    


}
