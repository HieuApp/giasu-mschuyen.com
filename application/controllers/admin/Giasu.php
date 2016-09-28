<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 25/09/2016
 * Time: 22:57
 */
class Giasu extends Manager_base {
    public function __construct() {
        parent::__construct();
    }

    public function setting_class() {
        // TODO: Implement setting_class() method.
        $this->name = Array(
            "class"  => "admin/giasu",
            "view"   => "giasu",
            "model"  => "m_giasu",
            "object" => "Giasu",
        );
    }

}