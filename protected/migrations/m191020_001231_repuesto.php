<?php

class m191020_001231_repuesto extends CDbMigration {

    public function up() {
        return $this->safeUp();
    }

    public function down() {
        return $this->safeDown();
    }

    public function safeUp() {

        $this->createTable('repuesto', array(
            'id'         => 'pk auto_increment',
            'titulo'     => 'string NOT NULL',
            'modelo'     => 'string NOT NULL',
            'precio'     => 'string NOT NULL',
            'codigo'     => 'string',
            'estado'     => 'string',
            'image'      => 'string',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));
    }

    public function safeDown() {
        $this->dropTable('repuesto');
    }

}
