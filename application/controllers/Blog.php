<?php
/**
 * Created by PhpStorm.
 * User: xyd
 * Date: 2016/3/21
 * Time: 19:52
 */

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['blogs'] = $this->blog_model->get_news();
        $data['title'] = 'Sherry Blog';

        $this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }


    public function view($slug = NULL)
    {
        $data['blog_item'] = $this->blog_model->get_news($slug);

        if (empty($data['blog_item']))
        {
            //show_404();
        }

        $data['title'] = $data['blog_item']['b_title'];

        $this->load->view('templates/header', $data);
        $this->load->view('blog/view', $data);
        $this->load->view('templates/footer');

    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('b_title', 'Title', 'required');
        $this->form_validation->set_rules('b_content', 'Text', 'required');
       

      if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('blog/create');
            $this->load->view('templates/footer');
            echo "error";

        }
        else
       {
            $this->blog_model->set_news();
            $this->load->view('blog/success');
       }
    }
}