<?php

class m191008_054031_create_nosotros extends CDbMigration {

    public function safeUp() {
         $this->insert('nosotros', array(
            'parrafo'  => ' ',
        ));
        
    }

    public function safeDown() {
        $this->truncateTable('nosotros');
    }

}
