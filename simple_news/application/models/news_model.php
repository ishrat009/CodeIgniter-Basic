<?php

/**
 * Description of news_model
 *
 * @author Ishrat
 */
class News_model extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
//        $this->load->database();
    }

    public function getNews($id)
    {
        if($id != FALSE)
        {
          $query = $this->db->get_where('news', array('id', $id));
          return $query->row_array();
        }
        else
        {
            return FALSE;
        }
    }
    
}
