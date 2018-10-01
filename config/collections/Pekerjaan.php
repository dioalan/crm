<?php

use Norm\Schema\NormString;
use App\Schema\Password;
use App\Schema\RoleArray;
use App\Schema\SelectTwoReference;
use App\Schema\MultiReference;
use App\Schema\DatePicker;

return array(
    'schema' => array(
        // 'nik' => NormString::create('nik')->filter('trim|required')->set('list-column', true),
        // 'nik'     => SelectTwoReference::create('nik','NIK Operasional')->filter('trim|required')->to('User', 'nik', 'nik')->set('list-column', true),
        'nama_operasional'     => SelectTwoReference::create('nama_operasional','Nama Operasional')->filter('trim|required')->to('Operasional', 'nama_operasional', 'nama_operasional')->set('list-column', true),
        'pekerjaan' => NormString::create('pekerjaan')->filter('trim|required')->set('list-column', true),
        // 'nama_customer' => NormString::create('nama_customer')->filter('trim')->set('list-column', true)->set('list-column',true),
        'nama_customer'     => SelectTwoReference::create('nama_customer')->filter('trim|required')->to('Customer', 'nama_customer', 'nama_customer')->set('list-column', true),
        // 'status' => NormString::create('status')->set('list-column', true),	
         'status'     => SelectTwoReference::create('status')->filter('trim|required')->to('Status', 'nama_status', 'nama_status')->set('list-column', true),
         'tanggal' => DatePicker::create('tanggal')->setformatdate('dd-mm-yyyy')->filter('trim|required')->set('list-column', true),
       
    ),
);
