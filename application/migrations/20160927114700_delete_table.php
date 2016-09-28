<?php
/**
 * Created by PhpStorm.
 * User: hieuapp
 * Date: 27/09/2016
 * Time: 23:47
 */

class Migration_Delete_table extends CI_Migration {

    public function up() {
//        $this->dbforge->drop_table('system_configs', FALSE);
//        $this->dbforge->drop_table('learning_method', FALSE);
//        $this->dbforge->drop_table('image_homes', FALSE);
        $this->dbforge->drop_table('feedback_manages', FALSE);
        $this->dbforge->drop_table('documents', FALSE);
        $this->dbforge->drop_table('classes', FALSE);
        $this->dbforge->drop_table('categories', FALSE);
    }

    private function _add_question_table() {
        $this->dbforge->add_field('id');
        $this->dbforge->add_field([
            'question' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ),
            'answer'   => array(
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ),
        ]);
        $this->dbforge->add_field('created_on TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP');
        $this->dbforge->create_table('questions', TRUE, ['ENGINE' => 'InnoDB']);
    }

    public function down() {
        $this->dbforge->drop_table('questions', FALSE);
    }
}