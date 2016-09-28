<?php

/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 24/09/2016
 * Time: 09:27
 */
class M_blog extends Crud_manager
{

    protected $_table = 'blog';
    protected $soft_delete = FALSE;
    public $schema = [
        'title'   => [
            'field'    => 'title',
            'db_field' => 'title',
            'label'    => 'Title',
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
        'part1'     => [
            'field'    => 'part1',
            'db_field' => 'part1',
            'label'    => 'Nội dung 1',
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
        'image1'     => [
            'field'    => 'image1',
            'db_field' => 'image1',
            'label'    => 'Ảnh minh họa 1',
            'rules'    => 'required',
            'form'     => [
                'type'                     => 'file', //multiple_file
                'class'                    => 'ace_file_input',//Use ACE theme for file input
//                'attr'         => 'data-disable_client_validate=1',//Disable validate in client
                'upload'                   => [//As config of File Upload Class in codeingiter
                    'upload_path'      => 'upload/image',
                    'allowed_types'    => 'jpg|jpeg|png',
                    'max_size'         => '20480',
                    'min_size'         => '10',
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
        'part2'     => [
            'field'    => 'part2',
            'db_field' => 'part2',
            'label'    => 'Nội dung 2',
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
        'image2'     => [
            'field'    => 'image2',
            'db_field' => 'image2',
            'label'    => 'Ảnh minh họa 2',
            'rules'    => 'required',
            'form'     => [
                'type'                     => 'file', //multiple_file
                'class'                    => 'ace_file_input',//Use ACE theme for file input
//                'attr'         => 'data-disable_client_validate=1',//Disable validate in client
                'upload'                   => [//As config of File Upload Class in codeingiter
                    'upload_path'      => 'upload/image',
                    'allowed_types'    => 'jpg|jpeg|png',
                    'max_size'         => '20480',
                    'min_size'         => '10',
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
        'part3'     => [
            'field'    => 'part3',
            'db_field' => 'part3',
            'label'    => 'Nội dung 3',
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
        'timestamp' => [
            'field' => 'timestamp',
            'label' => 'Ngày tạo',
            'rules' => '',
            'table' => [
                'class' => "hidden-480",
                'attr'  => 'data-check=\'true\'',
            ],
        ],
    ];

    public function __construct() {
        parent::__construct();
    }

    public function preview_img($origin_column_value, $column_name, &$record, $column_data, $caller) {
        $src = base_url($record->image1);
        return "<div>
                  <img src='$src' width='150' height='100'>
                </div>";
    }
}