<?php
/**
 * Created by PhpStorm.
 * User: CaoLong
 * Date: 7/5/2016
 * Time: 10:48 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class System_config
 */
class System_config extends Manager_base {
    public function __construct() {
        parent::__construct();
        $this->is_in_group(['admin'], TRUE);
    }

    public function setting_class() {
        // TODO: Implement setting_class() method.
        $this->name = Array(
            "class"  => "admin/system_config",
            "view"   => "system_config",
            "model"  => "m_system_config",
            "object" => "bảng system_config",
        );
    }

    public function manager($data = Array()) {
        $data['view_file'] = 'admin/user_base_manager/manager_container';
        parent::manager($data); // TODO: Change the autogenerated stub
    }

    public function add_action_button($origin_column_value, $column_name, &$record, $column_data, $caller) {
        $primary_key = $this->model->get_primary_key();
        $custom_action = "<div class='action-buttons'>";
        if ((!isset($record->disable_edit) || !$record->disable_edit)) {
            $custom_action .= "<a class='e_ajax_link green' href='" . site_url($this->url["edit"] . $record->$primary_key) . "'><i class='ace-icon fa fa-pencil bigger-130'></i></a>";
        }
        $custom_action .= "</div>";
        return $custom_action;
    }
}