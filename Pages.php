<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

    public function save(){
      $model=$this->model('model1'); 
      $Data=$_POST;
      $model->insert($Data);
    }
    public function display()
    {
      $model=$this->model('model1');
      $post=$model->display();
      $data=[
        'display1'=>$post
      ];
      $this->view('pages/display1',$data);
    }


    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

  }