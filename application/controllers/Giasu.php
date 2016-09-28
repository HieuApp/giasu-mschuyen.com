<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 16/09/2016
 * Time: 23:53
 * @property M_giasu m_giasu
 */
class Giasu extends Guest_layout {

    function __construct() {
        parent::__construct();
        $this->load->model('M_giasu', 'm_giasu');
    }

    public function index() {
        $result['result'] = $this->m_giasu->get_all();
//        echo "<pre>";
//        var_dump($result);
        $content = $this->load->view("guest/home/giasu", $result, TRUE);
        $this->show_page($content);
    }

    public function cv($id) {
        $profile = $this->m_giasu->get_list_filter(['m.' . 'id' => $id], [], [])[0];
        $data["profile"] = $profile;

        $content = $this->load->view("guest/home/cv", $data, TRUE);
        $this->show_page($content);
    }
}