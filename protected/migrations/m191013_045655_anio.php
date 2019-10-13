<?php

class m191013_045655_anio extends CDbMigration {

    public function safeUp() {
        $this->addColumn('auto', 'anio', 'string AFTER precio');
    }

    public function safeDown() {
        $this->dropColumn('auto', 'anio');
    }

}
