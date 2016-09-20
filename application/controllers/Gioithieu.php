<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 16/09/2016
 * Time: 23:47
 */
class Gioithieu extends Guest_layout {

    function __construct() {
        parent::__construct();
        $this->load->model('M_system_config', 'm_system_config');
        $this->load->model('M_image_homes', 'm_image_homes');
    }

    public function index() {
        $content = $this->load->view("guest/home/mschuyen_intro", null, TRUE);
        $this->show_page($content);
    }
}