<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 25/09/2016
 * Time: 22:28
 */
class Blog extends Manager_base {
    public function __construct() {
        parent::__construct();
    }

    public function setting_class() {
        // TODO: Implement setting_class() method.
        $this->name = Array(
            "class"  => "admin/blog",
            "view"   => "blog",
            "model"  => "m_blog",
            "object" => "Blog",
        );
    }

}