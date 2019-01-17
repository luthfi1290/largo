<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'email' => array(
                                'type' => 'TEXT',
                                'constraint' => '50'
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255'
                        ),
                        'remember_token' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'created_at' => array(
                                'type' => 'timestamp',
                                'null' => TRUE,
                        ),
                        'updated_at' => array(
                                'type' => 'timestamp',
                                'null' => TRUE,
                        )
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}