<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 25/09/2016
 * Time: 22:47
 */
class M_giasu extends Crud_manager
{

    protected $_table = 'giasu';
    protected $soft_delete = FALSE;
    public $schema = [
        'avatar'     => [
            'field'    => 'avatar',
            'db_field' => 'avatar',
            'label'    => 'Avatar',
            'rules'    => 'required',
            'form'     => [
                'type'                     => 'file', //multiple_file
                'class'                    => 'ace_file_input',//Use ACE theme for file input
//                'attr'         => 'data-disable_client_validate=1',//Disable validate in client
                'upload'                   => [//As config of File Upload Class in codeingiter
                    'upload_path'      => 'upload/image',
                    'allowed_types'    => 'jpg|jpeg|png',
                    'max_size'         => '20480',
                    'min_size'         => '2',
                    'min_width'        => 30,
                    'min_height'       => 40,
                    'max_width'        => 12000,
                    'max_height'       => 16000,
                    'encrypt_name'     => TRUE,
                    'file_ext_tolower' => TRUE,
                ],
                'callback_before_validate' => '',
                'callback_after_validate'  => '',
                'resize'                   => [ //As config of Image Manipulation Class(resize) in CodeIgniter (without source_image)
                    'height' => 104,
                    'width'  => 104,
                ],
                'watermarking'             => [ //As config of Image Manipulation Class(watermarking) in CodeIgniter (without source_image)
                    'wm_text'          => 'Copyright 2016 - TrongPD',
                    'wm_type'          => 'text',
                    'wm_font_size'     => '16',
                    'wm_font_color'    => 'ffffff',
                    'wm_vrt_alignment' => 'bottom',
                    'wm_hor_alignment' => 'right',
                    'wm_padding'       => '20',
                ],
            ],
            'table'    => [
                'callback_render_data' => "preview_img",
            ],
        ],
        'name'   => [
            'field'    => 'name',
            'db_field' => 'name',
            'label'    => 'Name',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
                'attr' => 'data-test="question"',
            ],
            'table'    => [
                'label' => 'Title',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
        ],
        'university'     => [
            'field'    => 'university',
            'db_field' => 'university',
            'label'    => 'Đại học',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'highschool'     => [
            'field'    => 'highschool',
            'db_field' => 'highschool',
            'label'    => 'Trường THPT',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'major'     => [
            'field'    => 'major',
            'db_field' => 'major',
            'label'    => 'Chuyên ngành',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'hobbies'     => [
            'field'    => 'hobbies',
            'db_field' => 'hobbies',
            'label'    => 'Sở thích',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'introduce'     => [
            'field'    => 'introduce',
            'db_field' => 'introduce',
            'label'    => 'Giới thiệu',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'experience'     => [
            'field'    => 'experience',
            'db_field' => 'experience',
            'label'    => 'Kinh nghiệm',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'award'     => [
            'field'    => 'award',
            'db_field' => 'award',
            'label'    => 'Thành tích',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'toan'     => [
            'field'    => 'toan',
            'db_field' => 'toan',
            'label'    => 'Toán',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'ly'     => [
            'field'    => 'ly',
            'db_field' => 'ly',
            'label'    => 'Lý',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'hoa'     => [
            'field'    => 'hoa',
            'db_field' => 'hoa',
            'label'    => 'Hóa',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
        'anh'     => [
            'field'    => 'anh',
            'db_field' => 'anh',
            'label'    => 'Anh',
            'rules'    => 'required',
            'form'     => [
                'type' => 'text',
            ],
            'filter'   => [
                'search_type' => 'like',
                'type'        => 'text',
            ],
            'table'    => [
//                'callback_render_data' => "get_status_text",
                'class'                => "hidden-480",
            ],
        ],
    ];

    public function __construct() {
        parent::__construct();
    }

    public function preview_img($origin_column_value, $column_name, &$record, $column_data, $caller) {
        $src = base_url($record->avatar);
        return "<div>
                  <img src='$src' width='150' height='100'>
                </div>";
    }
}