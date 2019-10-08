<?php

class m191008_053051_modify_nosotros extends CDbMigration {

    public function safeUp() {
        $this->addColumn('nosotros', 'youtube', 'string AFTER parrafo');
    }

    public function safeDown() {
        $this->dropColumn('nosotros', 'youtube');
    }

}
