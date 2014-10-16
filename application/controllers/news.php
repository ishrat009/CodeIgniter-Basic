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
  
  public function showNews()
  {
      $news = $this->login_model->getNews($id);
      
      $data['title'] = $news['title'];
      $data['body'] = $news['body'];
      
      $this->load->view('news_article',$data);
  }
  
}
