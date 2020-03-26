<?php

require "../bootstrap.php";



use Illuminate\Database\Capsule\Manager as Capsule;



Capsule::schema()->create('accounts', function ($table) {

       $table->increments('id');

       $table->string('name');

       $table->string('email')->unique();

       $table->string('password');

       $table->string('user_type');

       $table->integer('approved');

       $table->timestamps();

   });  