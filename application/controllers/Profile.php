<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 02/08/2016
 * Time: 12:17
 * @property M_image_homes   m_image_homes
 * @property M_system_config m_system_config
 */
class Profile extends Guest_layout {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $content = $this->load->view("guest/home/cv", null, TRUE);
        $this->show_page($content);
    }
}