<?php

// This is the database connection configuration.
return array(
    'class'              => 'CDbConnection',
    'connectionString'   => 'mysql:host=localhost;dbname=db_factoria;port=3306',
    'emulatePrepare'     => true,
    'username'           => 'db_userInsite',
    'password'           => 'us3rd3v',
    'charset'            => 'utf8',
    'enableProfiling'    => true,
    'enableParamLogging' => true
);
