<?php

class m191013_080928_message_auto extends CDbMigration {

    public function safeUp() {
        $this->addColumn('auto', 'mensaje', 'text AFTER anio');
    }

    public function safeDown() {
        $this->dropColumn('auto', 'mensaje');
    }

}
