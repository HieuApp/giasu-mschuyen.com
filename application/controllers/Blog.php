<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 17/09/2016
 * Time: 22:24
 */
class Blog extends Guest_layout {

    function __construct() {
        parent::__construct();
        $this->load->model('M_system_config', 'm_system_config');
        $this->load->model('M_image_homes', 'm_image_homes');
    }

    public function index() {
        $content = $this->load->view("guest/home/blog", null, TRUE);
        $this->show_page($content);
    }
}