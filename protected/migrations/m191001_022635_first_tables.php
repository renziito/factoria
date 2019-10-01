<?php

class m191001_022635_first_tables extends CDbMigration {

    public function safeUp() {

        $this->createTable('usuario', array(
            'id'         => 'pk auto_increment',
            'username'   => 'string NOT NULL',
            'password'   => 'text NOT NULL',
            'correo'     => 'string NOT NULL',
            'nombres'    => 'string',
            'apellidos'  => 'string',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->insert('user', array(
            'username'  => 'sa',
            'password'  => password_hash('admin', PASSWORD_DEFAULT),
            'mail'      => 'sepia.aki@gmail.com',
            'nombres'   => 'Super',
            'apellidos' => 'Admin'
        ));

        $this->createTable('slider', array(
            'id'         => 'pk auto_increment',
            'image'      => 'string',
            'title'      => 'text NOT NULL',
            'button'     => 'string',
            'position'   => 'string',
            'link'       => 'string',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->createTable('slider', array(
            'id'         => 'pk auto_increment',
            'image'      => 'string',
            'title'      => 'text NOT NULL',
            'button'     => 'string',
            'position'   => 'string',
            'link'       => 'string',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->createTable('imagenes', array(
            'id'         => 'pk auto_increment',
            'thumb'      => 'string',
            'image'      => 'text',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->createTable('nosotros', array(
            'id'         => 'pk auto_increment',
            'image'      => 'string',
            'parrafo'    => 'text NOT NULL',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->createTable('servicios', array(
            'id'         => 'pk auto_increment',
            'image'      => 'string',
            'parrafo'    => 'text NOT NULL',
            'titulo'     => 'text NOT NULL',
            'parrafo'    => 'text NOT NULL',
            'button'     => 'text',
            'link'       => 'text',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->createTable('clientes', array(
            'id'         => 'pk auto_increment',
            'image'      => 'string',
            'link'       => 'text',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));

        $this->createTable('auto', array(
            'id'          => 'pk auto_increment',
            'marca'       => 'string',
            'modelo'      => 'string',
            'kilometraje' => 'string',
            'color'       => 'string',
            'precio'      => 'string',
            'descripcion' => 'text',
            'destacado'   => 'boolean default FALSE',
            'created_at'  => 'datetime default now()',
            'estado'      => 'boolean default TRUE',
        ));

        $this->createTable('auto_foto', array(
            'id'         => 'pk auto_increment',
            'auto_id'    => 'integer',
            'image'      => 'string',
            'destacado'  => 'boolean default FALSE',
            'created_at' => 'datetime default now()',
            'estado'     => 'boolean default TRUE',
        ));
    }

    public function safeDown() {
        $this->dropTable('usuario');
        $this->dropTable('slider');
        $this->dropTable('imagenes');
        $this->dropTable('nosotros');
        $this->dropTable('servicios');
        $this->dropTable('clientes');
        $this->dropTable('auto');
        $this->dropTable('auto_foto');
    }

}
