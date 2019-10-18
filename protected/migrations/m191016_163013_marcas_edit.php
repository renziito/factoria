<?php

class m191016_163013_marcas_edit extends CDbMigration
{
    public function safeUp()
    {
        $this->addColumn('marcas', 'titulo', 'string AFTER image');
        $this->addColumn('marcas', 'descripcion', 'string AFTER titulo');
    }

    public function safeDown()
    {
        $this->dropColumn('marcas', 'titulo');
        $this->dropColumn('marcas', 'descripcion');
    }
}
