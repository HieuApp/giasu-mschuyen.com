<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 17/09/2016
 * Time: 22:24
 * @property M_blog m_blog
 */
class Blog extends Guest_layout {

    function __construct() {
        parent::__construct();
        $this->load->model('M_blog', 'm_blog');
    }

    public function index() {
        $blog = $this->m_blog->get_all();
        $data["blogs"] = $blog;
        $content = $this->load->view("guest/home/blog", $data, TRUE);
        $this->show_page($content);
    }

    public function content($id) {
        $blog = $this->m_blog->get_list_filter(['m.' . 'id' => $id], [], [])[0];
        $data["blog_content"] = $blog;

        $content = $this->load->view("guest/home/blog_content", $data, TRUE);
        $this->show_page($content);
    }
}