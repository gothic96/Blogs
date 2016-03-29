<?php
/**
 * Created by PhpStorm.
 * User: xyd
 * Date: 2016/3/21
 * Time: 19:49
 */
class blog_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('myblog');
            return $query->result_array();
        }

        $query = $this->db->get_where('myblog', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'b_title' => $this->input->post('b_title'),
            'slug' => $slug,
            'b_content' => $this->input->post('b_content')
        );

        return $this->db->insert('myblog', $data);
    }

}