<?php

/**
 * Created by PhpStorm.
 * User: miunh
 * Date: 25-Jul-16
 * Time: 10:27 PM
 * @property M_giasu m_giasu
 * @property M_blog m_blog
 */
class Home extends Guest_layout {

    const CHUYEN_ID = 8;
    const PHUONG_ANH_ID = 4;
    const HA_ID = 9;

    function __construct() {
        parent::__construct();
        $this->load->model('M_giasu', 'm_giasu');
        $this->load->model('M_blog', 'm_blog');
    }

    public function index() {
        $result = $this->m_giasu->get_all();
        $blog = $this->m_blog->get_list_filter([], [], [], 4);
//        echo "<pre>"
//        var_dump($result);
        $tutor = array();
        foreach ($result as $item){
            if($item->id == 4 || $item->id == 8 || $item->id == 9){
                array_push($tutor, $item);
            }
        };

        $sorted = array();
        array_push($sorted, $tutor[1], $tutor[0], $tutor[2]);
        $data['data'] = $sorted;
        $data['blog'] = $blog;
        $content = $this->load->view("guest/home/view", $data, TRUE);
        $this->show_page($content);
    }
}