<?php

/**
 * Created by PhpStorm.
 * User: miunh
 * Date: 19-Jul-16
 * Time: 11:30 PM
 * @property M_categories m_categories
 */
class Documents extends Manager_base {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_categories', 'm_categories');
    }

    public function setting_class() {
        // TODO: Implement setting_class() method.
        $this->name = Array(
            "class"  => "admin/documents",
            "view"   => "documents",
            "model"  => "m_documents",
            "object" => "tài liệu",
        );
    }

    public function edit($id = 0, $data = Array()) {
        $data['view_file'] = 'admin/document/form_edit';
        if (FALSE) { //Kiểm tra phân quyền
            redirect();
            return FALSE;
        }
        $data_return = Array();
        $data_return["callback"] = "get_form_edit_response";
        if (!$id) {
            $data_return["state"] = 0;
            $data_return["msg"] = "Id không tồn tại";
            echo json_encode($data_return);
            return FALSE;
        }
        if (!isset($data["save_link"])) {
            $data["save_link"] = site_url($this->name["class"] . "/edit_save/" . $id);
        }
        $this->set_data_part("title", "Sửa " . $this->name["object"], FALSE);
        $data["record_data"] = $this->model->get($id);
        $data['categories'] = $this->m_categories->dropdown('id', 'name');
        $data["form_title"] = "Update document";
        $content = $this->load->view($data['view_file'], $data, TRUE);
        $this->show_page($content);
    }

    public function edit_save($id = 0, $data = Array(), $data_return = Array(), $skip_validate = FALSE) {
        if (FALSE) { //Kiểm tra phân quyền
            redirect();
            return FALSE;
        }
        if (!isset($data_return["callback"])) {
            $data_return["callback"] = "save_form_edit_response";
        }
        if (sizeof($data) == 0) {
            $data = $this->input->post();
        }

        $id = intval($id);
        if (!$id) {
            $data_return["state"] = 0; /* state = 0 : dữ liệu không hợp lệ */
            $data_return["msg"] = "Bản ghi không tồn tại";
            echo json_encode($data_return);
            return FALSE;
        }
        if (sizeof($data) == 0) {
            $data = $this->input->post();
        }
        $config_img['upload_path'] = './upload/image/';
        $config_img['allowed_types'] = 'gif|jpg|png|jpeg';
        $config_img['max_size'] = '20480';
        $config_img['max_width'] = '1024';
        $config_img['max_height'] = '768';
        $config_img['encrypt_name'] = TRUE;
        if (!is_dir($config_img['upload_path'])) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config_img);
        if (!$this->upload->do_upload('new_avatar')) {
            $image = NULL;
        } else {
            $image = "upload/image/" . $this->upload->data()['file_name'];
        }
        $config_file['upload_path'] = './upload/file/';
        $config_file['allowed_types'] = 'pdf';
        $config_file['max_size'] = '2048000';
        $config_file['max_width'] = '1024';
        $config_file['max_height'] = '768';
        $config_file['encrypt_name'] = TRUE;
        if (!is_dir($config_img['upload_path'])) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config_file);
        if (!$this->upload->do_upload('new_file')) {
            $file = NULL;
        } else {
            $file = "upload/file/" . $this->upload->data()['file_name'];
        }
        $document_data = Array(
            'name'             => $data['name'],
            'category_id'      => $data['category_id'],
            'description'      => $data['description'],
            'author'           => $data['author'],
            'count_downloaded' => $data['count_downloaded'],
            'note'             => $data['note'],
        );
        if (!empty($image)) {
            $document_data['avatar'] = $image;
        } else {
            $document_data['avatar'] = $data['avatar'];
        }
        if (!empty($file)) {
            $document_data['file'] = $file;
        } else {
            $document_data['file'] = $data['file'];
        }
        $update = $this->model->update($id, $document_data, TRUE);
        if ($update) {
            $data_return["key_name"] = $this->model->get_primary_key();
            $data_return["record"] = $this->standard_record_data($this->model->get($id));
            $data_return["state"] = 1; /* state = 1 : insert thành công */
            $data_return["msg"] = "Sửa bản ghi thành công.";
            $data_return["redirect"] = base_url("admin/documents");
            echo json_encode($data_return);
            return TRUE;
        } else {
            $data_return["data"] = $data;
            $data_return["state"] = 0; /* state = 0 : dữ liệu không hợp lệ */
            $data_return["msg"] = "Dữ liệu gửi lên không hợp lệ";
            $data_return["error"] = $this->model->get_validate_error();
            echo json_encode($data_return);
            return FALSE;
        }
    }
    
    public function delete($id = 0, $data = Array()) {
        $id = intval($id);
        if (FALSE) { //Kiểm tra phân quyền
            redirect();
            return FALSE;
        }
        $data_return["callback"] = "delete_respone";
        if ($this->input->post() || $id > 0) {
            if (isset($data["list_id"]) && sizeof($data["list_id"])) {
                $list_id = $data["list_id"];
            } else {
                if ($this->input->post() && $id == "0") {
                    $list_id = $this->input->post("list_id");
                } elseif ($id > 0) {
                    $list_id = Array($id);
                }
            }
            foreach ($list_id as $id_delete) {
                $record_data = $this->model->get($id_delete);
                $this->load->helper("file");
                delete_files(base_url($record_data->avatar));
                delete_files(base_url($record_data->file));
            }
            $affected_row = $this->model->delete_many($list_id);
            if ($affected_row) {
                $data_return["list_id"] = $list_id;
                $data_return["state"] = 1;
                $data_return["msg"] = "Xóa bản ghi thành công";
            } else {
                $data_return["list_id"] = $list_id;
                $data_return["state"] = 0;
                $data_return["msg"] = "Bản ghi đã được xóa từ trước hoặc không thể bị xóa. Vui lòng tải lại trang!";
            }

            echo json_encode($data_return);
            return TRUE;
        } else {
            $data_return["state"] = 0;
            $data_return["msg"] = "Id không tồn tại";
            echo json_encode($data_return);
            return FALSE;
        }
    }

    public function add_action_button($origin_column_value, $column_name, &$record, $column_data, $caller) {
        $primary_key = $this->model->get_primary_key();
        $custom_action = "<div class='action-buttons'>";
//        $custom_action .= "<a class='e_ajax_link blue' href='" . site_url($this->url["view"] . $record->$primary_key) . "'><i class='ace-icon fa fa-search-plus bigger-130'></i></a>";
        if ((!isset($record->disable_edit) || !$record->disable_edit)) {
            $custom_action .= "<a class='green' href='" . site_url($this->url["edit"] . $record->$primary_key) . "'><i class='ace-icon fa fa-pencil bigger-130'></i></a>";
            $custom_action .= "<a class='e_ajax_link e_ajax_confirm red' href='" . site_url($this->url["delete"] . $record->$primary_key) . "'><i class='ace-icon fa fa-trash-o  bigger-130'></i></a>";
        }
        $custom_action .= "</div>";
        return $custom_action;
    }
}