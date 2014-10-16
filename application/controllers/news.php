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
      $this->load->model('news_model');
  }
  
  public function showNews($id=2)
  {
      $news = $this->news_model->getNews($id);
      
      $data['title'] = $news['title'];
      $data['body'] = $news['body'];
      
      $this->load->view('news_article', $data);
  }
  
}
