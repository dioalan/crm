<?php

use App\Schema\SelectTwoReference;

return array(
    'schema' => array(
        // 'nik' => NormString::create('nik')->filter('trim|required')->set('list-column', true),
        // 'nik'     => SelectTwoReference::create('nik','NIK Operasional')->filter('trim|required')->to('User', 'nik', 'nik')->set('list-column', true),
        'nama_operasional'     => SelectTwoReference::create('nama_operasional','Nama Operasional')->filter('trim|required')->to('User', 'first_name', 'first_name')->set('list-column', true),
       
       
    ),
);
