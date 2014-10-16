<?php

/**
 * Description of news
 *
 * @author Ishrat
 */
class News extends CI_Controller
{
  public function __construct() 
  {
      parent::__construct();
  
      $this->load->model('login_model');
  }
  
}
