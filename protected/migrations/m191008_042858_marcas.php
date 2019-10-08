<?php

class m191008_042858_marcas extends CDbMigration {

    public function up() {
        return $this->safeUp();
    }

    public function down() {
        return $this->safeDown();
    }

    public function safeUp() {

        $this->createTable('marcas', array(
            'id'         => 'pk auto_increment',
            'image'      => 'string',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));
    }

    public function safeDown() {
        $this->dropTable('marcas');
    }

}
